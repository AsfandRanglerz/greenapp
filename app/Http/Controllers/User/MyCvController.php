<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyCvController extends Controller
{
    public function myCvIndex()
    {
        $authId = Auth::guard('web')->id();
        $data =  User::find($authId);


        // return $data;
        return view('user.generateCV.mycv_index',compact('data'));
    }

    public function add_cv_details(Request $request , $id)
    {
        //  return $request;
        $user =  User::find($id);
        // return $user;
        $request->validate([
            'carrier_objectives' => 'required',
            'education_details' => 'required',
            'experience' => 'required',
            'license' => 'required',
            'skills' => 'required',
        ]);
        // $authId = Auth::guard('web')->id();
        $user->update([
            'carrier_objectives'=>$request->carrier_objectives,
            'education_details'=>$request->education_details,
            'experience'=>$request->experience,
            'license'=>$request->license,
            'skills'=>$request->skills,
        ]);
        // return $user;
        return redirect()->back()->with('success', 'Updated Successfully');

 }
}
