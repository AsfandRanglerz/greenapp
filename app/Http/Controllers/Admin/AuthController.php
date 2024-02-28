<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;


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
        // return $request;

        // $remember_me=($request->remember_me)?true:false;
        // if(!auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$remember_me)){
        //     return redirect()->back()->with( 'error','Invalid Email and Password');
        // }
        if(auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
        }
        else
        {
            return "wrong passwprd";
        }
        if(auth()->guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
        }
    }

    public function privacyPolicyPage(){
        $data=PrivacyPolicy::first();
        return view('privacyPolicy.index',compact('data'));
    }

}

