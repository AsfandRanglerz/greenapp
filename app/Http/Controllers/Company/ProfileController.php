<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
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
        $authId = Auth::guard('company')->id();
        $company = Company::find($authId);
        return view('company.profile.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('ali');

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
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        } else {
            $image = Auth::guard('company')->user()->image;
        }

        Company::find($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'establishment_no' => $request->establishment_no,
            'establishment_issue_date' => $request->establishment_issue_date,
            'establishment_expiry_date' => $request->establishment_expiry_date,
            'license_no' => $request->license_no,
            'license_issue_date' => $request->license_issue_date,
            'license_expiry_date' => $request->license_expiry_date,
            'tenancy' => $request->tenancy,
            'tenancy_issue_date' => $request->tenancy_issue_date,
            'tenancy_expiry_date' => $request->tenancy_expiry_date,
            'e_channel_issue_date' => $request->e_channel_issue_date,
            'e_channel_expiry_date' => $request->e_channel_expiry_date,
            'mohre_no' => $request->mohre_no,
            'po_box' => $request->po_box,
            'daman_police_number' => $request->daman_police_number,
            'daman_customer_number' => $request->daman_customer_number,
            'other_insurance_policy_number' => $request->other_insurance_policy_number,
        ] + ['image' => $image]);

        return redirect()->route('company.profile.index')->with('success', 'Updated Successfully');
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
    public function changePasswordIndex()
    {
        return view('company.profile.changePassword');
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirm_password' => 'same:newPassword',
        ]);
        $auth = Auth::guard('company')->user();
        if (!Hash::check($request->oldPassword, $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        } else if (strcmp($request->oldPassword, $request->newPassword) == 0) {
            return redirect()->back()->with('error', "New Password cannot be same as your current password.");
        } else {
            $user = Company::find($auth->id);
            $user->password = Hash::make($request->newPassword);
            $user->save();
            return back()->with('success', 'Updated Successfully');
        }
    }
}
