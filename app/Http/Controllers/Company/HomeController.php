<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyDocument;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $authId = Auth::guard('company')->id();
        $data['employee'] = User::whereCompany_id($authId)->count();
        $data['companyDocument'] = CompanyDocument::whereCompany_id($authId)->count();
        $company = Company::with('empDocument')->find($authId);
        $data['company'] = $company;
        $data['employeeDocument'] = $company->empDocument->count();

        return view('company.dashboard', $data);
    }

    public function logout()
    {
        Auth::guard('company')->logout();
        return redirect()->route('login')->with('success', "You've Logout Successfully");
    }
}
