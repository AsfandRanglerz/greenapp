<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('user.employee-profile.changePassword');
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
        //
    }
    public function changePassword(Request $request)
    {

        // $this->validate($request, [
        //     'oldPassword' => 'required',
        //     'newPassword' => 'required|confirmed',
        // ]);
        // dd('ali');
        $auth = Auth::guard('web')->user();
        // dd($auth->password);
        if (!Hash::check($request->oldPassword, $auth->password)) {
            return back()->with(['status' => false, 'message' => "Current Password is Invalid"]);
        } else if (strcmp($request->oldPassword, $request->newPassword) == 0) {
            return redirect()->back()->with(['status' => false, 'message' => "New Password cannot be same as your current password."]);
        } else {
            $user = User::find($auth->id);
            $user->password = Hash::make($request->newPassword);
            //  dd($user->password);
            $user->save();
            return back()->with(['status' => true, 'message' => 'Password Updated Successfully']);
        }
    }
}
