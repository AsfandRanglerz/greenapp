<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('company')->id();
        $employees =   User::whereCompany_id($authId)->latest()->get();

        return view('user.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        }else{
            $image = 'public/admin/assets/img/users/fdkdh.png';
        }

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make(12345678),
            'dob' => $request->dob,
            // dd($request->dob),
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'company_id' => Auth::guard('company')->id(),
        ] + ['image' => $image]);

        return redirect()->route('employee.index')->with(['status' => true, 'message' => 'Created Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
         $documents = UserDocument::whereUser_id($id)->latest()->get();
         $empId = $id;
        //  dd($user);
        return view('user.employee-document.index',compact('user','documents','empId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        //$data['usercompany'] = Company::select('id', 'name')->get();
       // $data['company_id'] = $id;
        return view('user.employee.edit', compact(['data']));
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
        $employee = User::find($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        }else{
            $image = $employee->image;
        }

        $employee->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'company_id' => Auth::guard('company')->id(),
        ] + ['image' => $image]);

        return redirect()->route('employee.index')->with(['status' => true, 'message' => 'Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('employee.index');
    }
}
