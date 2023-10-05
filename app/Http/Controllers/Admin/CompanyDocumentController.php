<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\storage;
class CompanyDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //dd('usman');
        $data['company_id'] = $id;
        $data['company'] = CompanyDocument::where('company_id', $id)->orderby('id', 'DESC')->get();
        return view('admin.company.document.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['company_id'] = $id;
        return view('admin.company.document.add', compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        // validate the input data
        // $validator = Validator::make($request->all(), [
        //     //"doc_name"    => "required|array",
        //     "doc_name.*" => "required|string",
        //     // "file"    => "required|array",
        //     "file.*" => "required",
        //     // 'file' => 'required',
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
            $document->company_id = $id;
            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                // $file->move('public/admin/assets/img/users',$filename);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            // dd($document);
            $document->save();
        }
        return redirect()->route('company-document.index', $id)->with('success', 'Added Successfully');
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
        $data['company_id'] = $id;
        $data = CompanyDocument::find($id);
        //dd($data);
        return view('admin.company.document.edit', compact(['data']));
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
        // return $request;
        {
            // $request->validate([
            //     'doc_name' => 'required',

            // ]);
            $company = CompanyDocument::find($id);
            $company->doc_type = $request->input('doc_type');
            $company->doc_name = $request->input('doc_name');
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
                $company->file = 'public/admin/assets/img/users/' . $filename;

            }
            //dd($company);
            $company->update();
            return redirect()->route('company-document.index', $company->company_id)->with('success','Updated Successfully');
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
        CompanyDocument::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
    // Download
    // public function download($id)
    // {
    //     $document = CompanyDocument::find($id);
    //     if ($document) {

    //         $path = asset('admin/' . $document->file);
    //         dd($path);
    //         if (file_exists($path)) {
    //             return response()->download($path);
    //         } else {
    //             return back()->withErrors(['msg' => 'File does not exist']);
    //         }
    //     } else {
    //         return back()->withErrors(['msg' => 'Document not found']);
    //     }
    // }

}
