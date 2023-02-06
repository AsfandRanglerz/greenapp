<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => 'required',
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->password = bcrypt($request->password);
        $company->save();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd(Auth());
        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success', "You've Login Successfully");
        }
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success', "You've Login Successfully");
        }

        return redirect()->back()->with('error', "Your Email Or Password Invalid!");
    }

    public function logout()
    {
        if (Auth::guard('company')->check()) {
            Auth::guard('company')->logout();
        } else {
            Auth::guard('web')->logout();
        }
        return redirect()->route('login')->with('success', "You've Logout Successfully");
    }
}
