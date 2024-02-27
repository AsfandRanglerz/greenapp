<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Employee;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EmployeeDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = UserDocument::get();
        return view('company.employee-document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.employee-document.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "doc_type.*" => "required|string",
            "file.*" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $doc_type = $request->input('doc_type');
        $doc_name = $request->input('doc_name');
        $receipt = $request->input('receipt');
        $issue_date = $request->input('issue_date');
        $expiry_date = $request->input('expiry_date');
        // $comment = $request->input('comment');
        $files = $request->file('file');
        for ($i = 0; $i < count($doc_type); $i++) {

            $document = new UserDocument;
            $document->doc_type = $doc_type[$i];
            $document->doc_name = $doc_name[$i];
            if (isset($receipt[$i])) {
                $document->receipt = $receipt[$i];
            }
            $document->issue_date = $issue_date[$i];
            $document->expiry_date = $expiry_date[$i];
            // $document->comment = $comment[$i];
            $document->user_id = $request->employee_id;

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $document->save();
        }
        return redirect()->route('company.employee.show', ['employee' => $request->employee_id])->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /** document create against employee */
    public function show($id)
    {
        $empId = $id;
        return view('company.employee-document.create', compact('empId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user_id'] = $id;
        $data = UserDocument::find($id);
        //    dd($data);
        return view('company.employee-document.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'doc_type' => 'required',

        ]);
        $company = UserDocument::find($id);
        $company->doc_type = $request->input('doc_type');
        $company->comment = $request->input('comment');
        if ($request->doc_type == "Other") {
            $company->issue_date = null;
            $company->expiry_date = null;
            $company->receipt = null;
            $company->doc_name = $request->input('doc_name');
        }
        elseif ($request->doc_type == "Receipts") {
            $company->issue_date = null;
            $company->expiry_date = null;
            $company->doc_name = null;
            $company->receipt = $request->input('receipt');
        }
        else {
            $company->issue_date = $request->input('issue_date');
            $company->expiry_date = $request->input('expiry_date');
            $company->doc_name = null;
        }

        if ($request->hasfile('file')) {
            $destination = 'public/admin/assets/img/users' . $company->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $company->file = 'public/admin/assets/img/users/' . $filename;

        }

        $company->update();
        return redirect()->route('company.employee.show', $company->user_id)->with('success', 'Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserDocument::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function download($id)
    {
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }
}
