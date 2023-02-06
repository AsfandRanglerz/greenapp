<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyProfileController extends Controller
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
        return view('user.company-profile.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('ali');
        return view('user.company-profile.changePassword');
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
            'license_no' => $request->license_no,
            'mohre_no' => $request->mohre_no,
        ] + ['image' => $image]);

        return redirect()->route('companyProfile.index')->with(['status' => true, 'message' => 'Updated Successfully']);
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
        $auth = Auth::guard('company')->user();
        // dd($auth->password);
        if (!Hash::check($request->oldPassword, $auth->password)) {
            return back()->with(['status' => false, 'message' => "Current Password is Invalid"]);
        } else if (strcmp($request->oldPassword, $request->newPassword) == 0) {
            return redirect()->back()->with(['status' => false, 'message' => "New Password cannot be same as your current password."]);
        } else {
            $user = Company::find($auth->id);
            $user->password = Hash::make($request->newPassword);
            // dd($user->password);
            $user->save();
            return back()->with(['status' => true, 'message' => 'Password Updated Successfully']);
        }
    }
}
