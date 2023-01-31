<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyDocument;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $authId = Auth::guard('company')->id();
        if(Auth::guard('company')->check()){
           $data['employee'] =   User::whereCompany_id($authId)->count();
           $data['companyDocument'] =   CompanyDocument::whereCompany_id($authId)->count();
        }
        $authId = Auth::guard('web')->id();
        if(Auth::guard('web')->check()){
           $data['employee'] =   User::whereCompany_id($authId)->count();
           $data['companyDocument'] =   CompanyDocument::whereCompany_id($authId)->count();
        }
        return view('user.home',$data);
    }
}
