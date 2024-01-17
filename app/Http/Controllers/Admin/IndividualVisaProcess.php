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
    public function dependent_visa_section(Request $request ,$user_id ,$dependent_id)
    {
        $ids['user_id'] = $user_id;
        $ids['dependent_id'] = $dependent_id;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        return view('admin.self-user.dependents.visaprocess.visaprocess', compact('ids', 'new_visa', 'renewal_process', 'modification_visa', 'modification_emirates', 'visa_cancellation'));
    }

    public function visa_process_individual_by_admin()
    {
        return view('admin.self-user.visaprocess.individualvisa');
    }

    public function visa_process_by_admin(Request $request ,$user_id ,$dependent_id)
    {
        // return "ok";
        $dependent = IndividualDependent::find($dependent_id);
        $individual = User::find($user_id);
        $data['request_name'] = $request->input('process_name');
        $data['dependent_name'] = $dependent->name;
        $ids['user_id'] = $user_id;
        $ids['dependent_id'] = $dependent_id;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $user_id)->where('dependent_id', $dependent_id)->first();
        if ($data['request_name'] == 'new visa') {
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
        if ($request->input('entry_visa') == 'step1') {
            // return $request;
            // return "ok";
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
                $over_stay = $new_visa->over_stay_fines_file;
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
        elseif ($request->input('change_of_visa') == 'change_of_visa') {
            // return "ok";
            $file = NULl;
            if ($request->hasFile('change_of_visa_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->change_of_visa_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('change_of_visa_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->change_of_visa_file;
            }
            // return $request->change_of_visa_file;
            $new_visa->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'change_of_visa_file' => $file,
                'change_of_visa_status' => $request->change_of_visa_status,
                'change_of_visa_file_name' => $request->change_of_visa_file_name,
                'change_of_visa_tfee' => $request->change_of_visa_tfee,
                'change_of_visa_date' => $request->change_of_visa_date,
                'change_of_visa_tno' => $request->change_of_visa_tno,
            ]);
            // $status = NULL;
            // if ($request->change_of_visa_status == 'Approved') {
            //     $status = 'Approved';
            // } elseif ($request->change_of_visa_status == 'Skip') {
            //     $status = 'Skip';
            // } elseif ($request->change_of_visa_status == 'Reject') {
            //     $status = 'Reject';
            // }
            // if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Visa status step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('health_insurance') == 'health_insurance') {

            $file = NULl;
            if ($request->hasFile('health_insur_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->health_insur_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('health_insur_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->health_insur_file;
            }
            $new_visa->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'health_insur_file' => $file,
                'health_insur_status' => $request->health_insur_status,
                'health_insur_file_name' => $request->health_insur_file_name,
                'health_insur_tran_fee' => $request->health_insur_tran_fee,
                'health_insur_date' => $request->health_insur_date,
                'health_insur_tran_no' => $request->health_insur_tran_no,
            ]);
            // $status = NULL;
            // if ($request->health_insur_status == 'Approved') {
            //     $status = 'Approved';
            // } elseif ($request->health_insur_status == 'Skip') {
            //     $status = 'Skip';
            // } elseif ($request->health_insur_status == 'Reject') {
            //     $status = 'Reject';
            // }
            // if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Health Insurance step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('medical_fitness') == 'medical_fitness') {
            // return $request;
            $file = NULl;
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'medical_fitness_file' => $file,
                'medical_fitness_status' => $request->medical_fitness_status,
                'medical_fitness_file_name' => $request->medical_fitness_file_name,
                'medical_fitness_tfee' => $request->medical_fitness_tfee,
                'medical_fitness_date' => $request->medical_fitness_date,
                'medical_fitness_tno' => $request->medical_fitness_tno,
            ]);
            // $status = NULL;
            // if ($request->medical_fitness_status == 'Approved') {
            //     $status = 'Approved';
            // } elseif ($request->medical_fitness_status == 'Skip') {
            //     $status = 'Skip';
            // } elseif ($request->medical_fitness_status == 'Reject') {
            //     $status = 'Reject';
            // }
            // if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Medical Fitness step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('emirates_residency_app') == 'emirates_residency_app') {
            // return "working";
            $e_status = NULL;
            $r_status = NULL;
            $file = NULl;
            if ($request->hasFile('emirates_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->emirates_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('emirates_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->emirates_file;
            }
            $rs_file = NULl;
            if ($request->hasFile('residency_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->residency_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $rs_file = $request->file('residency_file');
                $extension = $rs_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $rs_file->move('public/admin/assets/img/users', $filename);
                $rs_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $rs_file = $new_visa->residency_file;
            }
            $new_visa->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'emirates_file' => $file,
                'emirates_status' => $request->emirates_status,
                'emirates_file_name' => $request->emirates_file_name,
                'emirates_tran_fee' => $request->emirates_tran_fee,
                'emirates_date' => $request->emirates_date,
                'emirates_tran_no' => $request->emirates_tran_no,
                'residency_file' => $rs_file,
                'residency_status' => $request->residency_status,
                'residency_file_name' => $request->residency_file_name,
                'residency_tran_fee' => $request->residency_tran_fee,
                'residency_date' => $request->residency_date,
                'residency_tran_no' => $request->residency_tran_no,
            ]);
            // if ($request->emirates_status == 'Approved') {
            //     $e_status = 'Approved';
            // } elseif ($request->emirates_status == 'Skip') {
            //     $e_status = 'Skip';
            // } elseif ($request->emirates_status == 'Reject') {
            //     $e_status = 'Reject';
            // }
            // if ($e_status === 'Approved' || $e_status === 'Skip' || $e_status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Emirates ID step of New Visa Process has been ' . $e_status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }

            // if ($request->residency_status == 'Approved') {
            //     $r_status = 'Approved';
            // } elseif ($request->residency_status == 'Skip') {
            //     $r_status = 'Skip';
            // } elseif ($request->residency_status == 'Reject') {
            //     $r_status = 'Reject';
            // }
            // if ($r_status === 'Approved' || $r_status === 'Skip' || $r_status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Residency Application step of New Visa Process has been ' . $r_status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('biometric') == 'biometric') {
            // return $request;
            $status = NULL;
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'biometric_file' => $file,
                'biometric_status' => $request->biometric_status,
                'employee_biometric' => $request->employee_biometric,
                'biometric_tranc_fee' => $request->biometric_tranc_fee,
                'biometric_date' => $request->biometric_date,
                'biometric_tranc_no' => $request->biometric_tranc_no,
            ]);
            if($request->biometric_status == 'Approved')
            {
                $new_visa->update([
                    'status'=> 'completed',
                ]);
            }
            // if ($request->biometric_status == 'Approved') {
            //     $status = 'Approved';
            // } elseif ($request->biometric_status == 'Skip') {
            //     $status = 'Skip';
            // } elseif ($request->biometric_status == 'Reject') {
            //     $status = 'Reject';
            // }elseif ($request->biometric_status == 'Hold') {
            //     $status = 'Hold';
            // }
            // if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
            //     $notify = AdminNotification::create([
            //         'company_id' => $company_id,
            //         'to_all' => 'Companies',
            //         'title' => 'Visa Notification',
            //         'message' => 'This is inform you that the Change of Employee Biometric step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
            //     ]);
            // }
            if ($request->biometric_status == "Approved") {
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

    }

    public function renewal_of_dependent(Request $request ,$user_id,$dependent_id,$process_id)
    {
        $user = User::find($user_id);
        $renewal_process = RenewalProcess::find($process_id);
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'medical_fitness_file' => $file,
                'medical_fitness_date' => $request->medical_fitness_date,
                'medical_fitness_status' => $request->medical_fitness_status,
                'medical_fitness_tran_fees' => $request->medical_fitness_tran_fees,
                'medical_fitness_tran_no' => $request->medical_fitness_tran_no,
                'medical_fitness_st' => $request->medical_fitness_st,
            ]);
            // $status = NULL;
            // if($request->medical_fitness_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->medical_fitness_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->medical_fitness_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }
            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Medical Fitness step of Renewal Visa Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('residency') == 'residency') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('residency_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->residency_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('residency_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->residency_file;
            }
            $r_file = NULL;
            if ($request->hasfile('renewal_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->renewal_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $r_file = $request->file('renewal_file');
                $extension = $r_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $r_file->move('public/admin/assets/img/users', $filename);
                $r_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $r_file =  $renewal_process->renewal_file;
            }
            $renewal_process->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'residency_file' => $file,
                'residency_date' => $request->residency_date,
                'residency_status' => $request->residency_status,
                'residency_tran_fees' => $request->residency_tran_fees,
                'residency_tran_no' => $request->residency_tran_no,
                'residency_file_name' => $request->residency_file_name,
                'renewal_file' => $r_file,
                'renewal_date' => $request->renewal_date,
                'renewal_status' => $request->renewal_status,
                'renewal_tran_fees' => $request->renewal_tran_fees,
                'renewal_tran_no' => $request->renewal_tran_no,
                'renewal_file_name' => $request->renewal_file_name,
            ]);
            // $status = NULL;
            // if($request->residency_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->residency_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->residency_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }
            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Residency step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'emp_biometric_file' => $file,
                'emp_biometric_date' => $request->emp_biometric_date,
                'emp_biometric_status' => $request->emp_biometric_status,
                'emp_biometric_tranc_fee' => $request->emp_biometric_tranc_fee,
                'emp_biometric_tranc_no' => $request->emp_biometric_tranc_no,
                'emp_biometric' => $request->emp_biometric,
            ]);
            // $status = NULL;
            // if($request->emp_biometric_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->emp_biometric_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->emp_biometric_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }elseif($request->emp_biometric_status == 'Hold')
            // {
            //     $status = 'Hold';

            // }

            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject' || $status === 'Hold')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Employee Biometric step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
            if($request->emp_biometric_status == 'Approved')
            {
                $renewal_process->update([
                    'status'=> 'completed',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function modification_visa_of_dependent(Request $request ,$user_id,$dependent_id,$process_id)
    {
        $user = User::find($user_id);
        $modify_visa = ModificationVisaEmiratesId::find($process_id);
        if ($request->input('application') == 'application') {
            // return $modify_visa;
            $file = NULL;
            if ($request->hasfile('application_approval_file')) {
                // return $request;
                $destination = 'public/admin/assets/img/users' . $modify_visa->application_approval_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('application_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
                // return $file;
            } else {
                // return "ok";
                $file =  $modify_visa->application_approval_file;
            }
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'application_approval_file' => $file,
                'application_approval_no' => $request->application_approval_no,
                'application_status' => $request->application_status,
                'application_reject_reason' => $request->application_reject_reason,
                'application_reject_reason_file' => $reason_file,
            ]);
            // $status = NULL;
            // if($request->application_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->application_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->application_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }
            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Visa Modification step of Modification of Visa has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
            if($request->application_status == 'Approved')
            {
                $modify_visa->update([
                    'status'=> 'completed',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function modification_emirates_dependent(Request $request ,$user_id,$dependent_id,$process_id)
    {
        $user = User::find($user_id);
        $emirates = ModificationVisaEmiratesId::find($process_id);
        if ($request->input('application') == 'application') {
            $file = NULL;
            if ($request->hasfile('application_approval_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $emirates->application_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('application_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
                // return $file;
            } else {
                $file =  $emirates->application_approval_file;
            }
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
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'application_approval_file' => $file,
                'application_approval_no' => $request->application_approval_no,
                'application_status' => $request->application_status,
                'application_reject_reason' => $request->application_reject_reason,
                'application_reject_reason_file' => $reason_file,
            ]);
            // $status = NULL;
            // if($request->application_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->application_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->application_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }
            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Modification of Emirates ID step of Modification of Emirates Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
            // if($request->application_status == 'Approved')
            // {
            //     $emirates->update([
            //         'status'=> 'completed',
            //     ]);
            // }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function visa_cancellation_dependent(Request $request ,$user_id,$dependent_id,$process_id)
    {
        $user = User::find($user_id);
        $visa_cancellation = VisaCancelation::find($process_id);
        if ($request->input('residency') == 'residency') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('residency_app_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->residency_app_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('residency_app_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $visa_cancellation->residency_app_file;
            }
            $visa_cancellation->update([
                'dependent_id' => $dependent_id,
                'employee_id' => $user_id,
                'residency_app_file' => $file,
                'residency_app_date' => $request->residency_app_date,
                'residency_app_status' => $request->residency_app_status,
                'residency_app_tranc_fee' => $request->residency_app_tranc_fee,
                'residency_app_tranc_no' => $request->residency_app_tranc_no,
                'residency_app_file_name' => $request->residency_app_file_name,
            ]);
            // $status = NULL;
            // if($request->residency_app_status == 'Approved')
            // {
            //     $status = 'Approved';
            // }
            // elseif($request->residency_app_status == 'Skip')
            // {
            //     $status = 'Skip';

            // }elseif($request->residency_app_status == 'Reject')
            // {
            //     $status = 'Reject';

            // }
            // if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            // {
            //     $notify = AdminNotification::create([
            //         'company_id'=>$company_id,
            //         'to_all'=>'Companies',
            //         'title'=>'Visa Notification',
            //         'message'=>'This is inform you that the Residency step of Visa Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
            //     ]);
            // }
            if($request->residency_app_status == 'Approved')
            {
                $visa_cancellation->update([
                    'status'=> 'completed',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }


}
