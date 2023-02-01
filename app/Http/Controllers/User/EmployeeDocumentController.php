<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Employee;
use App\Models\UserDocument;
use Illuminate\Http\Request;

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
        return view('user.employee-document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.employee-document.create');

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
        } else {
            $file = 'public/admin/assets/img/users/fdkdh.png';
        }

        UserDocument::create([
            'user_id' => $request->employee_id,
            // dd($request->employee_id),
            'doc_type' => $request->doc_type,
            'issue_date' => $request->issue_date,
            'expiry_date' => $request->expiry_date,
            'comment' => $request->comment,
        ] + ['file' => $file]);

        return redirect()->route('employee.show',['employee'=>$request->employee_id]);
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
        return view('user.employee-document.create', compact('empId'));
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
        UserDocument::destroy($id);
        return redirect()->back();
    }
}
