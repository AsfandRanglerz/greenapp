<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyDocument;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $authId = Auth::guard('company')->id();
        if (Auth::guard('company')->check()) {
            $data['employee'] = User::whereCompany_id($authId)->count();
            $data['companyDocument'] = CompanyDocument::whereCompany_id($authId)->count();
            $company = Company::with('empDocument')->find($authId);
            $data['company'] = $company;
            $data['employeeDocument'] = $company->empDocument->count();
        }

        $authId = Auth::guard('web')->id();
        if (Auth::guard('web')->check()) {
            $data['employeeDocument'] = UserDocument::whereUser_id($authId)->count();
            $data['employee'] = User::whereCompany_id($authId)->count();
            $data['companyDocument'] = 1;
            $data['company'] = 1;
        }
        return view('user.home', $data);
    }
}