<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLoginPage()
    {
        return view('admin.auth.login');
    }
    public function Login(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $remember_me=($request->remember_me)?true:false;
        if(!auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$remember_me)){
            return redirect()->back()->with( 'error','Invalid Email and Password');
        }

                return redirect('admin/dashboard');
    }
}
