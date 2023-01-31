<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CompanyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('company')->id();
        $documents = CompanyDocument::whereCompany_id($authId)->get();
        return view('user.company-document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.company-document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting file extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $file = 'public/admin/assets/img/users/' . $filename;
        }

        CompanyDocument::create([
            'company_id' => Auth::guard('company')->id(),
            'doc_name' => $request->doc_name,
        ] + ['file' => $file]);

        return redirect()->route('companyDocument.index');
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
        return redirect()->route('companyDocument.index');
    }
}
