<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\ProcessStarted;
use Illuminate\Http\Request;
use App\Models\NewVisaProcess;
use App\Models\RenewalProcess;
use App\Models\VisaCancelation;
use App\Models\AdminNotification;
use App\Models\VisaProcessRequest;
use App\Models\IndividualDependent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Models\ModificationVisaEmiratesId;

class IndividualVisaProcess extends Controller
{
    public function dependent_visa_section()
    {
        return view('admin.self-user.dependents.visaprocess.visaprocess');
    }

    public function visa_process_individual_by_admin()
    {
        return view('admin.self-user.visaprocess.individualvisa');
    }

    public function visa_process_by_admin()
    {
        return "ok";
    }

    public function start_dependent_process(Request $request ,$request_id,$user_id ,$dependent_id)
    {
        $dependent = IndividualDependent::find($dependent_id);
        $individual = User::find($user_id);
        $data['dependent_name'] = $dependent->name;
        $data['request_name'] = VisaProcessRequest::where('id', $request_id)->value('process_name');
        // $data['request_type'] = VisaProcessRequest::where('id', $request_id)->value('sub_type');
        $process_request = VisaProcessRequest::find($request_id);
        // return $process_request;
        // if ($process_request) {
        //     if ($process_request->notify == 'pending') {
        //         Mail::to($individual->email)->send(new ProcessStarted($data));
        //         $process_request->update([
        //             'notify' => 'notified',
        //         ]);
        //     }
        // }
        $ids['user_id'] = $user_id;
        $ids['dependent_id'] = $dependent_id;
        $ids['req_id'] = $request_id;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        if ($data['request_name'] == 'new visa') {
            // return "ok new visa";
            if (!$new_visa) {
                $new_visa = NewVisaProcess::create([
                    'dependent_id' => $dependent_id,
                    'employee_id' => $user_id,
                ]);
                // $notify = AdminNotification::create([
                //     'employee_id' => $user_id,
                //     'to_all' => 'Individuals',
                //     'title' => 'Visa Notification',
                //     'message' => 'The '. $data['request_name'] .' '.' process has been started
                //     against '.$dependent->name.  ' <a href="' . route('company.employee.visa.process', $dependent->id) . '">' . ' click here. ' . '</a>',
                // ]);
            }
        } elseif ($data['request_name'] == 'renewal process') {
            // return "ok renewal process";
            if (!$renewal_process) {
                $renewal_process = RenewalProcess::create([
                    'dependent_id' => $dependent_id,
                    'employee_id' => $user_id,
                ]);
                // $notify = AdminNotification::create([
                //     'employee_id' => $user_id,
                //     'to_all' => 'Individuals',
                //     'title' => 'Visa Notification',
                //     'message' => 'The '. $data['request_name'].' '.' has been started
                //     against '.$dependent->name.  ' <a href="' . route('company.employee.visa.process', $dependent->id) . '">' . ' click here. ' . '</a>',
                // ]);
            }
        }   elseif ($data['request_name'] == 'modification of visa') {
            // return "ok renewal process";
            if (!$modification_visa) {
                $modification_visa = ModificationVisaEmiratesId::create([
                    'dependent_id' => $dependent_id,
                    'employee_id' => $user_id,
                    'process_name' => 'modification of visa',
                ]);
                // $notify = AdminNotification::create([
                //     'employee_id' => $user_id,
                //     'to_all' => 'Individuals',
                //     'title' => 'Visa Notification',
                //     'message' => 'The '. $data['request_name'] .' '.' process has been started
                //     against '.$dependent->name.  ' <a href="' . route('company.dependent.visa.process', $dependent->id) . '">' . ' click here. ' . '</a>',
                // ]);
            }
        } elseif ($data['request_name'] == 'modification of emirates Id') {
            // return "ok renewal process";
            if (!$modification_emirates) {
                $modification_emirates = ModificationVisaEmiratesId::create([
                    'dependent_id' => $dependent_id,
                    'employee_id' => $user_id,
                    'process_name' => 'modification of emirates Id',
                ]);
                // $notify = AdminNotification::create([
                //     'employee_id' => $user_id,
                //     'to_all' => 'Individuals',
                //     'title' => 'Visa Notification',
                //     'message' => 'The '. $data['request_name'] .' '.'process has been started
                //     against '.$dependent->name.  ' <a href="' . route('company.dependent.visa.process', $dependent->id) . '">' . ' click here. ' . '</a>',
                // ]);
            }
        } elseif ($data['request_name'] == 'visa cancellation') {
            // return "ok renewal process";
            if (!$visa_cancellation) {
                $visa_cancellation = VisaCancelation::create([
                    'dependent_id' => $dependent_id,
                    'employee_id' => $user_id,
                ]);
                // $notify = AdminNotification::create([
                //     'employee_id' => $user_id,
                //     'to_all' => 'Individuals',
                //     'title' => 'Visa Notification',
                //     'message' => 'The '. $data['request_name'] .' '.' process has been started
                //     against '.$dependent->name.  ' <a href="' . route('company.dependent.visa.process', $dependent->id) . '">' . ' click here. ' . '</a>',
                // ]);
            }
        }
        return view('admin.self-user.dependents.visaprocess.visaprocess', compact('ids', 'new_visa', 'renewal_process', 'modification_visa', 'modification_emirates', 'visa_cancellation'));
    }

    public function new_visa_of_dependent(Request $request ,$user_id,$dependent_id,$process_id)
    {
        $user = User::find($user_id);
        $new_visa = NewVisaProcess::find($process_id);
        if ($request->input('entry_visa') == 'entry_visa') {
            return "ok";
            $file = Null;
            if ($request->hasFile('enter_visa_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->enter_visa_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('enter_visa_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
                // return $file;

            } else {
                $file = $new_visa->enter_visa_file;
            }
            $over_stay = NULL;
            if ($request->hasFile('enter_visa_osf_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->over_stay_fines_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $over_stay = $request->file('enter_visa_osf_file');
                $extension = $over_stay->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $over_stay->move('public/admin/assets/img/users', $filename);
                $over_stay = 'public/admin/assets/img/users/' . $filename;
            } else {
                $over_stay = $new_visa->entry_visa_file;
            }
            if ($request->enter_visa_country == 'no') {
                $over_stay = NULL;
            }
            $new_visa->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'enter_visa_file' => $file,
                'enter_visa_osf_file' => $over_stay,
                'enter_visa_status' => $request->enter_visa_status,
                'enter_visa_file_name' => $request->enter_visa_file_name,
                'enter_visa_ts_fee' => $request->enter_visa_ts_fee,
                'enter_visa_date' => $request->enter_visa_date,
                'enter_visa_ts_no' => $request->enter_visa_ts_no,
                'enter_visa_over_sf' => $request->enter_visa_over_sf,
                'enter_visa_country' => $request->enter_visa_country,
            ]);
            // $status = NULL;
            // if ($request->enter_visa_status == 'Approved') {
            //     $status = 'Approved';
            // } elseif ($request->enter_visa_status == 'Skip') {
            //     $status = 'Skip';
            // } elseif ($request->enter_visa_status == 'Reject') {
            //     $status = 'Reject';
            // }
            // if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Entry Visa step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
}
