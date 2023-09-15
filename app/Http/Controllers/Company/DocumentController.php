<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\CompanyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('company')->id();
        $documents = CompanyDocument::whereCompany_id($authId)->orderBy('id', 'DESC')->get();
        return view('company.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the input data
        // $validator = Validator::make($request->all(), [
        //     'doc_name.*' => 'required|string',
        //     'file.*' => 'required|file',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $doc_type = $request->input('doc_type');
        $doc_name = $request->input('doc_name');
        $files = $request->file('file');
        // dd($doc_names);
        for ($i = 0; $i < count($doc_type); $i++) {
            $document = new CompanyDocument;
            $document->doc_type = $doc_type[$i];
            $document->doc_name = $doc_name[$i];
            $document->company_id = Auth::guard('company')->id();

            if ($request->hasFile('file.' . $i)) {
                $file = $files[$i];
                $file_name = time() . $i . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('admin/assets/img/users'), $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $document->save();
        }

        return redirect()->route('company.document.index')->with('success', 'Created Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyDocument::destroy($id);
        return redirect()->route('company.document.index')->with('success', 'Deleted Successfully');
    }

    public function download($id)
    {
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }
}
