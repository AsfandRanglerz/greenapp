<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualVisaProcess extends Controller
{
    public function visa_process_by_admin()
    {
        return view('admin.self-user.dependents.visaprocess.visaprocess');
    }

    public function visa_process_individual_by_admin()
    {
        return view('admin.self-user.visaprocess.individualvisa');
    }
}
