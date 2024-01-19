<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\NotifyToAdmin;
use App\Models\NewVisaProcess;
use App\Models\RenewalProcess;
use App\Models\VisaCancelation;
use App\Models\VisaProcessRequest;
use App\Models\IndividualDependent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\ModificationVisaEmiratesId;

class IndividualDependentVisaController extends Controller
{
    public function index($id)
    {
        $authId = Auth::guard('web')->id();
        $dependent = IndividualDependent::find($id);
        $new_visa = NewVisaProcess::where('employee_id', $authId)->where('dependent_id', $id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $authId)->where('dependent_id', $id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $authId)->where('dependent_id', $id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $authId)->where('dependent_id', $id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $authId)->where('dependent_id', $id)->first();
        return view('user.dependents.visaprocess.index',compact('dependent','new_visa','renewal_process','modification_visa','modification_emirates','visa_cancellation'));
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

    public function entry_visa_updation(Request $request , $id)
    {
        $new_visa = NewVisaProcess::find($id);
        $employee_id =  $new_visa->employee_id;
        $individual =  User::find($employee_id);
        // return $individual;
        $dependent_id =  $new_visa->dependent_id;
        $dependent =  IndividualDependent::find($dependent_id);
        // return $dependent;

        if ($request->input('entry_visa') == 'entry_visa') {
            $over_stay = NULL;
            if ($request->hasFile('enter_visa_osf_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->enter_visa_osf_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $over_stay = $request->file('enter_visa_osf_file');
                $extension = $over_stay->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $over_stay->move('public/admin/assets/img/users', $filename);
                $over_stay = 'public/admin/assets/img/users/' . $filename;
            }
            else {
                $over_stay = $new_visa->enter_visa_osf_file;
            }
            if ($request->enter_visa_country == 'no') {
                $over_stay = NULL;
                // return "no";
            }
            $new_visa->update([
                'enter_visa_osf_file' => $over_stay,
                'enter_visa_over_sf' => $request->enter_visa_over_sf,
                'enter_visa_country' => $request->enter_visa_country,
            ]);
                $notify_admin = NotifyToAdmin::create([
                    'title' => 'Visa Notification',
                    'message' => 'The individual ' . $individual->name . ' take action on his dependent name'.$dependent->name.'on his Entry Visa step of New Visa Process.',
                    'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
                ]);

            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('medical_fitness') == 'medical_fitness') {
            // return $request;
            $file = NULL;
            if ($request->hasFile('medical_fitness_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->medical_fitness_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->medical_fitness_file;
            }
            $new_visa->update([
                'medical_fitness_file' => $file,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Medical Fitness step of New Visa Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('biometric') == 'biometric') {
            // return $request;
            // $status = NULL;
            $file = NULL;
            if ($request->hasFile('biometric_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->biometric_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->biometric_file;
            }
            $new_visa->update([
                 'biometric_file' => $file,
                 'employee_biometric' => $request->employee_biometric,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Biometric step of New Visa Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

    }

    public function renewal_process_updation(Request $request , $id)
    {
        $renewal_process = RenewalProcess::find($id);
        $employee_id =  $renewal_process->employee_id;
        $individual =  User::find($employee_id);
        // return $individual;
        $dependent_id =  $renewal_process->dependent_id;
        $dependent =  IndividualDependent::find($dependent_id);
        // return $dependent;
        if ($request->input('medical_fitness') == 'medical_fitness') {
            $file = NULL;
            if ($request->hasfile('medical_fitness_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->medical_fitness_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->medical_fitness_file;
            }
            $renewal_process->update([
                'medical_fitness_file' => $file,
                'medical_fitness_st' => $request->medical_fitness_st,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Medical Fitness step of Renewal Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('biometric') == 'biometric') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('emp_biometric_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->emp_biometric_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('emp_biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->emp_biometric_file;
            }
            $renewal_process->update([

                'emp_biometric_file' => $file,
                'emp_biometric' => $request->emp_biometric,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Biometric step of Renewal Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function modification_visa_updation(Request $request ,$id)
    {
        $modify_visa = ModificationVisaEmiratesId::find($id);
        $employee_id =  $modify_visa->employee_id;
        $individual =  User::find($employee_id);
        // return $individual;
        $dependent_id =  $modify_visa->dependent_id;
        $dependent =  IndividualDependent::find($dependent_id);
        if ($request->input('application') == 'application') {
            $reason_file = NULL;
            if ($request->hasfile('application_reject_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_visa->application_reject_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('application_reject_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $modify_visa->application_reject_reason_file;
            }
            $modify_visa->update([
                'application_reject_reason_file' => $reason_file,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Modification of Visa Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function modification_emirates_updation(Request $request ,$id)
    {
        $emirates = ModificationVisaEmiratesId::find($id);
        $employee_id =  $emirates->employee_id;
        $individual =  User::find($employee_id);
        // return $individual;
        $dependent_id =  $emirates->dependent_id;
        $dependent =  IndividualDependent::find($dependent_id);
        if ($request->input('application') == 'application') {
            $reason_file = NULL;
            if ($request->hasfile('application_reject_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $emirates->application_reject_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('application_reject_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $reason_file =  $emirates->application_reject_reason_file;
            }
            $emirates->update([
                'application_reject_reason_file' => $reason_file,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his dependent name '.$dependent->name.' on Modification of Emirates Process.',
                'route' => route('dependent-visa-section',['user_id'=>$employee_id , 'dependent_id'=>$dependent_id]),
            ]);
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
}
