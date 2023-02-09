<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('web')->id();
        $employee = User::find($authId);
        return view('user.employee-profile.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'dob' => 'required',
        'nationality'=>'required',
        'religion'=>'required',

    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('admin/assets/img/users/'), $filename);
        $image = 'public/admin/assets/img/users/' . $filename;
    } else {
        $image = Auth::guard('web')->user()->image;
    }

    User::find($id)->update([
        'name' => $request->name,
        'dob' => $request->dob,
        'nationality' => $request->nationality,
        'religion' => $request->religion,
        'phone' => $request->phone,
        'image' => $image
    ]);

    return redirect()->route('EmployeeProfile.index')->with('success' , 'Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function changePassword_index()
    {
        return view('user.employee-profile.changePassword');
    }
    public function changePassword(Request $request)
    {

        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirm_password' => 'same:newPassword',
        ]);
        // dd('ali');
        $auth = Auth::guard('web')->user();
        // dd($auth->password);
        if (!Hash::check($request->oldPassword, $auth->password)) {
            return back()->with( 'error',"Current Password is Invalid");
        } else if (strcmp($request->oldPassword, $request->newPassword) == 0) {
            return redirect()->back()->with('error' , "New Password cannot be same as your current password.");
        } else {
            $user = User::find($auth->id);
            $user->password = Hash::make($request->newPassword);
            //  dd($user->password);
            $user->save();
            return back()->with('success' , 'Updated Successfully');
        }
    }
}
