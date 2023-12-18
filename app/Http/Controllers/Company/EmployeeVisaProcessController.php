<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\Company;
use App\Models\VisaProcessRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeVisaProcessController extends Controller
{
    public function index($id)
    {
        $authId = Auth::guard('company')->id();
        $employee = User::find($id);
        // return $employee;
        return view('company.visaprocess.index',compact('employee'));
    }

    public function visa_process_request(Request $request , $id)
    {
        return $request;
        $process_name = $request->process_name;
        $visa_process_request = VisaProcessRequest::create([

        ]);
    }
}
