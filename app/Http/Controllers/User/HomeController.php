<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $authId = Auth::guard('web')->id();
       $data['user'] =  User::find($authId);
        $data['document'] = UserDocument::whereUser_id($authId)->count();
        return view('user.dashboard', $data);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', "You've Logout Successfully");
    }
}
