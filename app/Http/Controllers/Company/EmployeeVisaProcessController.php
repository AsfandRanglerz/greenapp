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
        $authId = Auth::guard('company')->id();
        $name = $request->input('process_name');
        // return $name;
        $get_request =  VisaProcessRequest::where('company_id',$authId)->where('employee_id',$id)->first();
        if($get_request)
        {
            return redirect()->route('company.employee.visa.process',$id)->with('success','This request is already in process.');

        }
        else
        {
            $visa_process_request = VisaProcessRequest::create([
                'company_id'=>$authId,
                'employee_id'=>$id,
                'process_name'=>$name,
                // 'process_name'=>$process_name,
            ]);
            return redirect()->route('company.employee.visa.process',$id)->with('success','Request send to admin successfully.');
        }

    }
}
