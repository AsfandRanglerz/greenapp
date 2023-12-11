<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
        $data['countries'] = Country::all();
        return view('user.profile.index', compact('employee', 'data'));
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
        // return $request;
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
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
            'phone' => $request->phone,
            'image' => $image,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'passport_number' => $request->passport_number,
            'unified_number' => $request->unified_number,
            'emirate_id_number' => $request->emirate_id_number,
            'work_permit_number' => $request->work_permit_number,
            'person_code' => $request->person_code,
            'position' => $request->position,
            'pob' => $request->pob,
            'join_date' => $request->join_date,
            'marital_status' => $request->marital_status,
            'residence_no' => $request->residence_no,
            'insurance_no' => $request->insurance_no,
            'salary_detail' => $request->salary_detail,
            'salary' => $request->salary,
        ]);
        return redirect()->route('user.profile.index')->with('success', 'Updated Successfully');
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
        return view('user.profile.changePassword');
    }
    public function changePassword(Request $request)
    {

        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirm_password' => 'same:newPassword',
        ]);
        $auth = Auth::guard('web')->user();
        if (!Hash::check($request->oldPassword, $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        } else if (strcmp($request->oldPassword, $request->newPassword) == 0) {
            return redirect()->back()->with('error', "New Password cannot be same as your current password.");
        } else {
            $user = User::find($auth->id);
            $user->password = Hash::make($request->newPassword);
            $user->save();
            return back()->with('success', 'Updated Successfully');
        }
    }
}
