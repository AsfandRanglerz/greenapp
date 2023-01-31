<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['user_id'] = $id;
        $data['user'] = UserDocument::where('user_id', $id)->orderby('id', 'DESC')->get();
        return view('admin.user.document.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['user_id'] = $id;
        return view('admin.user.document.add', compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "doc_type.*" => "required|string",
            // "file"    => "required|array",
            "file.*" => "required",
            // 'doc_type' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $doc_type = $request->input('doc_type');
        $issue_date = $request->input('issue_date');
        $expiry_date = $request->input('expiry_date');
        $comment = $request->input('comment');
        //dd($doc_names);
        $files = $request->file('file');
        for ($i = 0; $i < count($doc_type); $i++) {

            $document = new UserDocument;
            $document->doc_type = $doc_type[$i];
            $document->issue_date = $issue_date[$i];
            $document->expiry_date = $expiry_date[$i];
            $document->comment = $comment[$i];
            $document->user_id = $id;

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = $file_name;
            }
            // dd($document);
            $document->save();
        }
        return redirect()->route('user-document.index', $id)->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('admin.user.document.edit', compact(['data']));
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
        {
            $request->validate([
                'doc_type' => 'required',
                'issue_date' => 'required',
                'expiry_date' => 'required',

            ]);
            $company = UserDocument::find($id);
            $company->doc_type = $request->input('doc_type');
            $company->issue_date = $request->input('issue_date');
            $company->expiry_date = $request->input('expiry_date');
            $company->comment = $request->input('comment');
            //$company->company_id = $request->input('company_id');
            //$company['company_id'] = $id;

            if ($request->hasfile('file')) {
                $destination = 'public/admin/assets/img/users' . $company->file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $company->file = $filename;

            }
            //dd($company);
            $company->update();
            return redirect()->route('user-document.index', $company->user_id)->with(['status' => true, 'message' => 'Updated Successfully']);
        }
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
        return redirect()->back()->with(['status' => true, 'message' => 'Deleted Successfully']);
    }
}
