<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndividualDependent;
use App\Models\VisaProcessRequest;
use Illuminate\Support\Facades\Auth;

class IndividualDependentVisaController extends Controller
{
    public function index($id)
    {
        $authId = Auth::guard('web')->id();
        $dependent = IndividualDependent::find($id);
        return view('user.dependents.visaprocess.index',compact('dependent'));
    }

    public function send_request(Request $request , $id)
    {
        $authId = Auth::guard('web')->id();
        // return  [$authId,$id];
        $process_name = $request->input('process_name');
        $visa_request = VisaProcessRequest::where('employee_id',$authId)->where('dependent_id',$id)
            ->where('request_for','dependent')->where('process_name',$process_name)->first();
        // return $visa_request->isEmpty();
        if(!$visa_request)
        {
            $visa_process_request = VisaProcessRequest::create([
                'employee_id'=>$authId,
                'dependent_id'=>$id,
                'process_name'=>$process_name,
                'request_for'=>'dependent',
            ]);
            return redirect()->route('user.dependent-visa-process',$id)->with('success','Request send to admin successfully.');
        }
        else
        {
            return redirect()->back()->with('success','This request is already in process.');

        }
    }
}
