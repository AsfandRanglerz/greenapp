<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Company;
use App\Models\Receipt;
use App\Mail\ProcessStarted;
use Illuminate\Http\Request;
use App\Models\ModifyContract;
use App\Models\NewVisaProcess;
use App\Models\RenewalProcess;
use App\Models\VisaCancelation;
use App\Exports\MultiTableExport;
use App\Helper\AdminNotificationHelper;
use App\Models\AdminNotification;
use App\Models\UaeAndGccNational;
use App\Models\PermitCancellation;
use App\Models\SponsaredBySomeOne;
use App\Models\VisaProcessRequest;
use App\Models\IndividualDependent;
use App\Http\Controllers\Controller;
use App\Models\PartTimeAndTemporary;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use App\Models\ModificationVisaEmiratesId;

class NewVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visa_requests = VisaProcessRequest::with('company', 'user','dependent')->orderBy('created_at', 'DESC')->get();
        // return   $visa_requests;
        foreach($visa_requests as $process_request)
        {
            $process_request->update([
                'seen_by_admin'=>1,
            ]);
        }
        return view('admin.visaprocess.index', compact('visa_requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // approve the requests of visa processes
    public function show($id)
    {
        // return 'ok';
        $status = VisaProcessRequest::find($id);
        $company_id = $status->company_id;
        $employee_id = $status->employee_id;
        $dependent_id = $status->dependent_id;
        $status = VisaProcessRequest::find($id);

        $company = Company::find($company_id);
        $employee = User::find($employee_id);
        $dependent = IndividualDependent::find($dependent_id);
        // return $status;
        $status->update([
            'status' => 'approved',
        ]);
        // notify to company of his employee
        if($company_id && $employee_id)
        {
            $notify = AdminNotification::create([
                'company_id' => $status->company_id,
                'to_all' => 'Companies',
                'title' => 'Visa Notification',
                'message' => 'The request of '. $status->process_name .' '.($status->sub_type ? $status->sub_type : '').' has been approved
                against '.$employee->name.'<a href="' . route('company.employee.visa.process',$employee->id) . '">' . ' click here. ' . '</a>',
            ]);
        }
        // notify to individual of his dependent
        elseif($employee_id && $dependent_id)
        {
            $notify = AdminNotification::create([
                'employee_id' => $status->employee_id,
                'to_all' => 'Individuals',
                'title' => 'Visa Notification',
                'message' => 'The request of '. $status->process_name . ' has been approved
                 against '.$dependent->name.'<a href="' . route('user.dependent-visa-process',$dependent->id) . '">' . ' click here. ' . '</a>.',
            ]);
        }
        // notify to individual
        elseif($employee_id && VisaProcessRequest::where('employee_id',$employee_id)->where('request_for','individual')->first())
        {
            $notify = AdminNotification::create([
                'employee_id' => $status->employee_id,
                'to_all' => 'Individuals',
                'title' => 'Visa Notification',
                'message' => 'Your request of '. $status->process_name . ' has been approved by admin.'.'<a href="' . route('user.visa-process.index') . '">' . ' click here. ' . '</a>',
            ]);
        }

        return redirect()->back()->with('success', 'Request approved successfully.');
        // return view('admin.visaprocess.newvisa');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view($request_id, $user_id, $company_id)
    {
        $ids['user_id'] = $user_id;
        $ids['company_id'] = $company_id;
        $ids['req_id'] = $request_id;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $spo_by_some = SponsaredBySomeOne::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $part_time = PartTimeAndTemporary::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $uae_gcc = UaeAndGccNational::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        return view('admin.visaprocess.newvisa', compact('ids', 'new_visa', 'renewal_process', 'spo_by_some', 'part_time', 'uae_gcc'));
    }

    public function start_visa_process(Request $request, $request_id, $user_id, $company_id)
    {

        $employee = User::find($user_id);
        $data['employee_name'] = $employee->name;
        $data['request_name'] = VisaProcessRequest::where('id', $request_id)->value('process_name');
        $data['request_type'] = VisaProcessRequest::where('id', $request_id)->value('sub_type');
        $process_request = VisaProcessRequest::find($request_id);
        if ($process_request) {
            if ($process_request->notify == 'pending') {
                Mail::to($employee->email)->send(new ProcessStarted($data));
                $process_request->update([
                    'notify' => 'notified',
                ]);
            }
        }
        $ids['user_id'] = $user_id;
        $ids['company_id'] = $company_id;
        $ids['req_id'] = $request_id;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $spo_by_some = SponsaredBySomeOne::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $part_time = PartTimeAndTemporary::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $uae_gcc = UaeAndGccNational::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $modify_contract = ModifyContract::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('company_id', $company_id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('company_id', $company_id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $permit_cancellation =  PermitCancellation::where('employee_id', $user_id)->where('company_id', $company_id)->first();

        if ($data['request_name'] == 'new visa') {
            // return "ok new visa";
            if (!$new_visa) {
                $new_visa = NewVisaProcess::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'name' => $employee->name,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'].' '.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);

            }
        } elseif ($data['request_name'] == 'renewal process') {
            // return "ok renewal process";
            if (!$renewal_process) {
                $renewal_process = RenewalProcess::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'].' '.' has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'sponsored by some one') {
            if (!$spo_by_some) {
                $spo_by_some = SponsaredBySomeOne::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);

                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.'('.($data['request_type'] ? $data['request_type'] : '').')'.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'part time') {
            if (!$part_time) {
                $part_time = PartTimeAndTemporary::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.'('.($data['request_type'] ? $data['request_type'] : '').')'.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'uae and gcc') {
            if (!$uae_gcc) {
                $uae_gcc = UaeAndGccNational::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.'('.($data['request_type'] ? $data['request_type'] : '').')'.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'modify contract') {
            if (!$modify_contract) {
                // return "ok";
                $modify_contract = ModifyContract::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.'('.($data['request_type'] ? $data['request_type'] : '').')'.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'modification of visa') {
            // return "ok renewal process";
            if (!$modification_visa) {
                $modification_visa = ModificationVisaEmiratesId::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'process_name' => 'modification of visa',
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'modification of emirates Id') {
            // return "ok renewal process";
            if (!$modification_emirates) {
                $modification_emirates = ModificationVisaEmiratesId::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'process_name' => 'modification of emirates Id',
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.'process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'visa cancellation') {
            // return "ok renewal process";
            if (!$visa_cancellation) {
                $visa_cancellation = VisaCancelation::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        } elseif ($data['request_name'] == 'permit cancellation') {
            // return "ok renewal process";
            if (!$permit_cancellation) {
                $permit_cancellation = PermitCancellation::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                ]);
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'The '. $data['request_name'] .' '.' process has been started
                    against '.$employee->name.  ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
        }
        return view('admin.visaprocess.newvisa', compact('ids', 'new_visa', 'renewal_process', 'spo_by_some', 'part_time', 'uae_gcc', 'modify_contract', 'modification_visa', 'modification_emirates', 'visa_cancellation', 'permit_cancellation'));
    }

    public function start_visa_process_by_admin(Request $request, $user_id, $company_id)
    {
        $employee = User::find($user_id);
        $data['employee_name'] = $employee->name;
        $data['request_name'] = $request->input('process_name');
        $data['request_type'] = $request->input('process_type');
        // return $data;
        $new_visa = NewVisaProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $renewal_process = RenewalProcess::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $spo_by_some = SponsaredBySomeOne::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $part_time = PartTimeAndTemporary::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $uae_gcc = UaeAndGccNational::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $modify_contract = ModifyContract::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('company_id', $company_id)->where('process_name', 'modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $user_id)->where('company_id', $company_id)->where('process_name', 'modification of emirates Id')->first();
        $visa_cancellation =  VisaCancelation::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        $permit_cancellation =  PermitCancellation::where('employee_id', $user_id)->where('company_id', $company_id)->first();
        if ($data['request_name'] == 'new visa') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            // return "ok new visa";
            if (!$new_visa) {
                $new_visa = NewVisaProcess::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'renewal process') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$renewal_process) {
                $renewal_process = RenewalProcess::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'sponsored by some one') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$spo_by_some) {
                $spo_by_some = SponsaredBySomeOne::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'part time') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$part_time) {
                $part_time = PartTimeAndTemporary::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'uae and gcc') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$uae_gcc) {
                $uae_gcc = UaeAndGccNational::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'work permit' && $data['request_type'] == 'modify contract') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$modify_contract) {
                // return "ok";
                $modify_contract = ModifyContract::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'modification of visa') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$modification_visa) {
                $modification_visa = ModificationVisaEmiratesId::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                    'process_name' => 'modification of visa',
                ]);
            }
        } elseif ($data['request_name'] == 'modification of emirates Id') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$modification_emirates) {
                $modification_emirates = ModificationVisaEmiratesId::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                    'process_name' => 'modification of emirates Id',
                ]);
            }
        } elseif ($data['request_name'] == 'visa cancellation') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$visa_cancellation) {
                $visa_cancellation = VisaCancelation::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        } elseif ($data['request_name'] == 'permit cancellation') {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            if (!$permit_cancellation) {
                $permit_cancellation = PermitCancellation::create([
                    'company_id' => $company_id,
                    'employee_id' => $user_id,
                    'start_by'=>'admin',
                ]);
            }
        }
        if ($data['request_name'] == 'renewal process') {
            $notify = AdminNotification::create([
                'company_id' => $company_id,
                'to_all' => 'Companies',
                'title' => 'Visa Notification',
                'message' => 'This is inform you that admin started the ' . $data['request_name'] . ($data['request_type'] ? $data['request_type'] : '')
                    . ' against ' . $employee->name . ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
            ]);
        }
        else
        {
            $notify = AdminNotification::create([
                'company_id' => $company_id,
                'to_all' => 'Companies',
                'title' => 'Visa Notification',
                'message' => 'This is inform you that admin started the ' . $data['request_name'] . ($data['request_type'] ? $data['request_type'] : '')
                    . ' process against ' . $employee->name . ' <a href="' . route('company.employee.visa.process', $employee->id) . '">' . ' click here. ' . '</a>',
            ]);
        }
        return redirect()->back()->with('success', 'Process has been started successfully.');
    }

    // new visa action
    public function new_visa_updation(Request $request, $user_id, $company_id, $newvisa_id, $req_id)
    {
        $user = User::find($user_id);
        $new_visa = NewVisaProcess::find($newvisa_id);
        // $employee_receipt = Receipt::where('user_id',$user_id)->first();
        // return $employee_receipt;

        if ($request->input('job_offer') == "step1") {
            $file = NULL;
            if ($request->hasfile('file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->job_offer_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $new_visa->job_offer_file;
            }
            // return $request;
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'job_offer_file' => $file,
                'job_offer_file_name' => $request->job_offer_file_name,
                'job_offer_date' => $request->job_offer_date,
                'job_offer_status' => $request->job_offer_status,
                'job_offer_tran_fees' => $request->job_offer_tran_fees,
                'job_offer_preapproval_wp_t_no' => $request->job_offer_preapproval_wp_t_no,
                'job_offer_mb_trc_no' => $request->job_offer_mb_trc_no,
                'job_offer_tran_no' => $request->job_offer_tran_no,
            ]);
            $ids['user_id'] = $user_id;
            $ids['company_id'] = $company_id;
            $ids['req_id'] = $req_id;
            $status = NULL;
            if ($request->job_offer_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->job_offer_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->job_offer_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Job Offer step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            // return $notify;
            return redirect()->back()->with('success', 'Data Added Successfully and notify to the company.');
        }

        elseif ($request->input('sign_mb') == "step2") {
            $file = NULL;
            if ($request->hasFile('signed_mb_st_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->signed_mb_st_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->signed_mb_st_file;
            }
            // return $file;
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_st_file' => $file,
                'signed_mb_st_date' => $request->signed_mb_st_date,
                'signed_mb_st_status' => $request->signed_mb_st_status,
                'signed_mb_st_reason' => $request->signed_mb_st_reason,
            ]);
            $status = NULL;
            if ($request->signed_mb_st_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->signed_mb_st_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->signed_mb_st_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Signed MB & ST step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('dubai_ins') == "step3") {
            $file = NULl;
            if ($request->hasFile('dubai_insurance_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->dubai_insurance_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('dubai_insurance_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->dubai_insurance_file;
            }
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'dubai_insurance_file' => $file,
                'dubai_insurance_file_name' => $request->dubai_insurance_file_name,
                'dubai_insurance_tran_no' => $request->dubai_insurance_tran_no,
                'dubai_insurance_tran_fees' => $request->dubai_insurance_tran_fees,
                'dubai_insurance_status' => $request->dubai_insurance_status,
                'dubai_insurance_date' => $request->dubai_insurance_date,
            ]);
            $status = NULL;
            if ($request->dubai_insurance_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->dubai_insurance_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->dubai_insurance_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Dubai Insurance step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('preapproval') == "step4") {
            $file = NULl;
            // return $request;
            if ($request->hasFile('pre_approved_wp_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->pre_approved_wp_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('pre_approved_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->pre_approved_wp_file;
            }
            // return $request->pre_approved_wp_file_name;
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'pre_approved_wp_file' => $file,
                'pre_approved_wp_status' => $request->pre_approved_wp_status,
                'pre_approved_wp_file_name' => $request->pre_approved_wp_file_name,
                'pre_approved_wp_tran_fees' => $request->pre_approved_wp_tran_fees,
                'pre_approved_wp_date' => $request->pre_approved_wp_date,
                'pre_approved_wp_tran_no' => $request->pre_approved_wp_tran_no,
            ]);
            // return $new_visa;
            $status = NULL;
            if ($request->pre_approved_wp_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->pre_approved_wp_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->pre_approved_wp_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Preapproval Work Permit Fees step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('entry_visa') == 'step5') {
            // return $request;
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
                'company_id' => $company_id,
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
            $status = NULL;
            if ($request->enter_visa_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->enter_visa_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->enter_visa_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Entry Visa step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('change_of') == 'step6') {
            // return $request;
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'change_of_visa_file' => $file,
                'change_of_visa_status' => $request->change_of_visa_status,
                'change_of_visa_file_name' => $request->change_of_visa_file_name,
                'change_of_visa_tfee' => $request->change_of_visa_tfee,
                'change_of_visa_date' => $request->change_of_visa_date,
                'change_of_visa_tno' => $request->change_of_visa_tno,
            ]);
            $status = NULL;
            if ($request->change_of_visa_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->change_of_visa_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->change_of_visa_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Visa status step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
         elseif ($request->input('medical_fitness') == 'step7') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'medical_fitness_file' => $file,
                'medical_fitness_status' => $request->medical_fitness_status,
                'medical_fitness_file_name' => $request->medical_fitness_file_name,
                'medical_fitness_tfee' => $request->medical_fitness_tfee,
                'medical_fitness_date' => $request->medical_fitness_date,
                'medical_fitness_tno' => $request->medical_fitness_tno,
            ]);
            $status = NULL;
            if ($request->medical_fitness_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->medical_fitness_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->medical_fitness_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Medical Fitness step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('tawjeeh_class') == 'step8') {

            $file = NULl;
            if ($request->hasFile('tawjeeh_file')) {
                $destination = 'public/admin/assets/img/users' . $new_visa->tawjeeh_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('tawjeeh_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->tawjeeh_file;
            }
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'tawjeeh_file' => $file,
                'tawjeeh_status' => $request->tawjeeh_status,
                'tawjeeh_payment' => $request->tawjeeh_payment,
                'tawjeeh_trans_fee' => $request->tawjeeh_trans_fee,
                'tawjeeh_date' => $request->tawjeeh_date,
                'tawjeeh_trans_no' => $request->tawjeeh_trans_no,
            ]);
            $status = NULL;
            if ($request->tawjeeh_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->tawjeeh_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->tawjeeh_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Tawjeeh Training Classes step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('contract_subm') == 'step9') {

            $file = NULl;
            if ($request->hasFile('contract_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->contract_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('contract_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->contract_file;
            }
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'contract_file' => $file,
                'contract_status' => $request->contract_status,
                'contract_file_name' => $request->contract_file_name,
                'contract_tran_no' => $request->contract_tran_no,
                'contract_date' => $request->contract_date,
                'contract_tran_fee' => $request->contract_tran_fee,
            ]);
            $status = NULL;
            if ($request->contract_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->contract_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->contract_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Contract Submission step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('health_insurance') == 'step10') {

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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'health_insur_file' => $file,
                'health_insur_status' => $request->health_insur_status,
                'health_insur_file_name' => $request->health_insur_file_name,
                'health_insur_tran_fee' => $request->health_insur_tran_fee,
                'health_insur_date' => $request->health_insur_date,
                'health_insur_tran_no' => $request->health_insur_tran_no,
            ]);
            $status = NULL;
            if ($request->health_insur_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->health_insur_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->health_insur_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Health Insurance step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('work_permit') == 'step11') {

            $file = NULl;
            if ($request->hasFile('work_permit_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->work_permit_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('work_permit_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->work_permit_file;
            }
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'work_permit_file' => $file,
                'work_permit_status' => $request->work_permit_status,
                'work_permit_file_name' => $request->work_permit_file_name,
                'work_permit_tran_fee' => $request->work_permit_tran_fee,
                'work_permit_date' => $request->work_permit_date,
                'work_permit_tran_no' => $request->work_permit_tran_no,
            ]);
            $status = NULL;
            if ($request->work_permit_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->work_permit_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->work_permit_status == 'Reject') {
                $status = 'Reject';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Work Permit step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('emirates_residency_app') == 'step12') {
            // return $request;
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
                'company_id' => $company_id,
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
            if ($request->emirates_status == 'Approved') {
                $e_status = 'Approved';
            } elseif ($request->emirates_status == 'Skip') {
                $e_status = 'Skip';
            } elseif ($request->emirates_status == 'Reject') {
                $e_status = 'Reject';
            }
            if ($e_status === 'Approved' || $e_status === 'Skip' || $e_status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Emirates ID step of New Visa Process has been ' . $e_status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }

            if ($request->residency_status == 'Approved') {
                $r_status = 'Approved';
            } elseif ($request->residency_status == 'Skip') {
                $r_status = 'Skip';
            } elseif ($request->residency_status == 'Reject') {
                $r_status = 'Reject';
            }
            if ($r_status === 'Approved' || $r_status === 'Skip' || $r_status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Residency Application step of New Visa Process has been ' . $r_status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('biometric') == 'step13') {
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
                'company_id' => $company_id,
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
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your New Visa Process has been Completed.!',
                ]);
            }
            if ($request->biometric_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->biometric_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->biometric_status == 'Reject') {
                $status = 'Reject';
            }elseif ($request->biometric_status == 'Hold') {
                $status = 'Hold';
            }
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Change of Employee Biometric step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            if ($request->biometric_status == "Approved") {
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('waiting_for_approval') == 'waiting_for_approval') {
            $file = NULl;
            if ($request->hasFile('waiting_fappro_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->waiting_fappro_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_fappro_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $new_visa->waiting_fappro_file;
            }
            $new_visa->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_fappro_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_fappro_reason' => $request->waiting_fappro_reason,
                'waiting_fappro_no' => $request->waiting_fappro_no,
            ]);
            $status = NULL;
            if ($request->waiting_for_approval_status == 'Approved') {
                $status = 'Approved';
            } elseif ($request->waiting_for_approval_status == 'Skip') {
                $status = 'Skip';
            } elseif ($request->waiting_for_approval_status == 'Reject') {
                $status = 'Reject';
            }
            // return $status;
            if ($status === 'Approved' || $status === 'Skip' || $status === 'Reject') {
                $notify = AdminNotification::create([
                    'company_id' => $company_id,
                    'to_all' => 'Companies',
                    'title' => 'Visa Notification',
                    'message' => 'This is inform you that the Waiting For Approval step of New Visa Process has been ' . $status . ' against ' . $user->name . ' <a href="' . route('company.employee.visa.process', $user->id) . '">' . ' click here. ' . '</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
    // renewal process
    public function start_renewal_process(Request $request, $user_id, $company_id, $renewal_id, $req_id)
    {
        // return "ok";
        $user = User::find($user_id);
        $renewal_process = RenewalProcess::find($renewal_id);
        if ($request->input('medical_fitness') == 'step1') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'medical_fitness_file' => $file,
                'medical_fitness_date' => $request->medical_fitness_date,
                'medical_fitness_status' => $request->medical_fitness_status,
                'medical_fitness_tran_fees' => $request->medical_fitness_tran_fees,
                'medical_fitness_tran_no' => $request->medical_fitness_tran_no,
                'medical_fitness_st' => $request->medical_fitness_st,
            ]);
            $status = NULL;
            if($request->medical_fitness_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->medical_fitness_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->medical_fitness_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Medical Fitness step of Renewal Visa Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('work_permit') == 'step2') {
            $file = NULL;
            if ($request->hasfile('work_permit_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->work_permit_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('work_permit_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->work_permit_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'work_permit_file' => $file,
                'work_permit_date' => $request->work_permit_date,
                'work_permit_status' => $request->work_permit_status,
                'work_permit_tran_fee' => $request->work_permit_tran_fee,
                'work_permit_tran_no' => $request->work_permit_tran_no,
                'work_permit_file_name' => $request->work_permit_file_name,
            ]);
            $status = NULL;
            if($request->work_permit_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->work_permit_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->work_permit_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit application step of Renewal Visa Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('signed_st') == 'step3') {
            $file = NULL;
            if ($request->hasfile('signed_mb_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->signed_mb_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->signed_mb_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_file' => $file,
                'signed_mb_date' => $request->signed_mb_date,
                'signed_mb_status' => $request->signed_mb_status,
                'signed_mb_tranc_fee' => $request->signed_mb_tranc_fee,
                'signed_mb_tranc_no' => $request->signed_mb_tranc_no,
                // 'work_permit_file_name'=>$request->work_permit_file_name,
            ]);
            $status = NULL;
            if($request->signed_mb_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signed_mb_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signed_mb_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload signed MB step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('dubai_insur') == 'step4') {
            $file = NULL;
            if ($request->hasfile('pay_dubai_insu_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->pay_dubai_insu_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('pay_dubai_insu_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->pay_dubai_insu_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'pay_dubai_insu_file' => $file,
                'pay_dubai_insu_date' => $request->pay_dubai_insu_date,
                'pay_dubai_insu_status' => $request->pay_dubai_insu_status,
                'pay_dubai_insu_tran_fee' => $request->pay_dubai_insu_tran_fee,
                'pay_dubai_insu_tran_no' => $request->pay_dubai_insu_tran_no,
                'pay_dubai_insu_file_name' => $request->pay_dubai_insu_file_name,
            ]);
            $status = NULL;
            if($request->pay_dubai_insu_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->pay_dubai_insu_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->pay_dubai_insu_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Pay Dubai insurance step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('contract_sub') == 'step5') {
            $file = NULL;
            if ($request->hasfile('contract_sub_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->contract_sub_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('contract_sub_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->contract_sub_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'contract_sub_file' => $file,
                'contract_sub_date' => $request->contract_sub_date,
                'contract_sub_status' => $request->contract_sub_status,
                'contract_sub_tranc_fee' => $request->contract_sub_tranc_fee,
                'contract_sub_tranc_no' => $request->contract_sub_tranc_no,
                'contract_sub_file_name' => $request->contract_sub_file_name,
            ]);
            $status = NULL;
            if($request->contract_sub_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->contract_sub_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->contract_sub_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Contract submission step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('tawjeeh_class') == 'step6') {
            $file = NULL;
            if ($request->hasfile('tawjeeh_tranc_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->tawjeeh_tranc_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('tawjeeh_tranc_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->tawjeeh_tranc_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'tawjeeh_tranc_file' => $file,
                'tawjeeh_tranc_date' => $request->tawjeeh_tranc_date,
                'tawjeeh_tranc_status' => $request->tawjeeh_tranc_status,
                'tawjeeh_tranc_fee' => $request->tawjeeh_tranc_fee,
                'tawjeeh_tranc_no' => $request->tawjeeh_tranc_no,
                'tawjeeh_tranc_payment' => $request->tawjeeh_tranc_payment,
            ]);
            $status = NULL;
            if($request->tawjeeh_tranc_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->tawjeeh_tranc_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->tawjeeh_tranc_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Tawjeeh classes step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('residency') == 'step7') {
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
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'residency_file' => $file,
                'residency_date' => $request->residency_date,
                'residency_status' => $request->residency_status,
                'residency_tran_fees' => $request->residency_tran_fees,
                'residency_tran_no' => $request->residency_tran_no,
                'residency_file_name' => $request->residency_file_name,
            ]);
            $status = NULL;
            if($request->residency_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->residency_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->residency_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Residency step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('renewal') == 'step8') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('renewal_file')) {
                $destination = 'public/admin/assets/img/users' . $renewal_process->renewal_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('renewal_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $renewal_process->renewal_file;
            }
            $renewal_process->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'renewal_file' => $file,
                'renewal_date' => $request->renewal_date,
                'renewal_status' => $request->renewal_status,
                'renewal_tran_fees' => $request->renewal_tran_fees,
                'renewal_tran_no' => $request->renewal_tran_no,
                'renewal_file_name' => $request->renewal_file_name,
            ]);
            $status = NULL;
            if($request->renewal_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->renewal_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->renewal_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the  ID Renewal step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('emp_bio') == 'step9') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'emp_biometric_file' => $file,
                'emp_biometric_date' => $request->emp_biometric_date,
                'emp_biometric_status' => $request->emp_biometric_status,
                'emp_biometric_tranc_fee' => $request->emp_biometric_tranc_fee,
                'emp_biometric_tranc_no' => $request->emp_biometric_tranc_no,
                'emp_biometric' => $request->emp_biometric,
            ]);
            $status = NULL;
            if($request->emp_biometric_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->emp_biometric_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->emp_biometric_status == 'Reject')
            {
                $status = 'Reject';

            }elseif($request->emp_biometric_status == 'Hold')
            {
                $status = 'Hold';

            }

            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject' || $status === 'Hold')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Employee Biometric step of Renewal Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->emp_biometric_status == 'Approved')
            {
                $renewal_process->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Renewal Process has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    // work permit (sponsored by some one)
    public function sponsored_by_some(Request $request, $user_id, $company_id, $sponsored_id, $req_id)
    {
        $user = User::find($user_id);
        $sopnsored_by = SponsaredBySomeOne::find($sponsored_id);
        if ($request->input('work_permit') == 'step1') {
            $file = NULL;
            if ($request->hasfile('work_permit_app_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->work_permit_app_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('work_permit_app_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->work_permit_app_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'work_permit_app_file' => $file,
                'work_permit_app_date' => $request->work_permit_app_date,
                'work_permit_app_status' => $request->work_permit_app_status,
                'work_permit_app_tranc_fee' => $request->work_permit_app_tranc_fee,
                'work_permit_app_tranc_no' => $request->work_permit_app_tranc_no,
                'work_permit_app_file_name' => $request->work_permit_app_file_name,
            ]);
            $status = NULL;
            if($request->work_permit_app_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->work_permit_app_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->work_permit_app_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work Permit step of Sponsored by Some one process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('sign_mb') == 'step2') {
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->signed_mb_st_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->signed_mb_st_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_st_file' => $file,
                'signed_mb_st_status' => $request->signed_mb_st_status,
                'signed_mb_st_date' => $request->signed_mb_st_date,
                'signed_mb_st_tranc_fee' => $request->signed_mb_st_tranc_fee,
                'signed_mb_st_tranc_no' => $request->signed_mb_st_tranc_no,
                // 'work_permit_app_file_name'=>$request->work_permit_app_file_name,
            ]);

            $status = NULL;
            if($request->signed_mb_st_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signed_mb_st_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signed_mb_st_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Signed MB & ST step of Sponsored by Some one has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('waiting_for') == 'step3') {
            // return $request->waiting_for_approval_reason;
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $sopnsored_by->waiting_for_approval_reason_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Waiting of approval step of Sponsored by Some one has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('dubai_insu') == 'step4') {
            $file = NULL;
            if ($request->hasfile('pay_dubai_insu_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->pay_dubai_insu_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('pay_dubai_insu_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->pay_dubai_insu_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'pay_dubai_insu_file' => $file,
                'pay_dubai_insu_tranc_no' => $request->pay_dubai_insu_tranc_no,
                'pay_dubai_insu_tranc_fee' => $request->pay_dubai_insu_tranc_fee,
                'pay_dubai_insu_status' => $request->pay_dubai_insu_status,
                'pay_dubai_insu_date' => $request->pay_dubai_insu_date,
                'pay_dubai_insu_file_name' => $request->pay_dubai_insu_file_name,
            ]);
            $status = NULL;
            if($request->pay_dubai_insu_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->pay_dubai_insu_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->pay_dubai_insu_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Dubai Insurance step of Sponsored by Some one has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('pre_approval') == 'step5') {
            $file = NULL;
            if ($request->hasfile('pre_approv_wp_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->pre_approv_wp_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('pre_approv_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->pre_approv_wp_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'pre_approv_wp_file' => $file,
                'pre_approv_wp_file_name' => $request->pre_approv_wp_file_name,
                'pre_approv_wp_date' => $request->pre_approv_wp_date,
                'pre_approv_wp_status' => $request->pre_approv_wp_status,
                'pre_approv_wp_tranc_fee' => $request->pre_approv_wp_tranc_fee,
                'pre_approv_wp_tranc_no' => $request->pre_approv_wp_tranc_no,
            ]);
            $status = NULL;
            if($request->pre_approv_wp_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->pre_approv_wp_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->pre_approv_wp_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Pre-Approval Work Permit step of Sponsored by Some one has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('upload_wp') == 'step6') {
            $file = NULL;
            if ($request->hasfile('upload_wp_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->upload_wp_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('upload_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->upload_wp_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'upload_wp_file' => $file,
                'upload_wp_file_name' => $request->upload_wp_file_name,
                'upload_wp_date' => $request->upload_wp_date,
                'upload_wp_status' => $request->upload_wp_status,
                'upload_wp_tranc_fee' => $request->upload_wp_tranc_fee,
                'upload_wp_tranc_no' => $request->upload_wp_tranc_no,
            ]);
            $status = NULL;
            if($request->upload_wp_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->upload_wp_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->upload_wp_status == 'Reject')
            {
                $status = 'Reject';

            }elseif($request->upload_wp_status == 'Hold')
            {
                $status = 'Hold';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject' || $status === 'Hold')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload Work Permit step of Sponsored by Some one has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->upload_wp_status == 'Approved')
            {
                $sopnsored_by->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Sponsored By / Golden Visa Process of Work Permit has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    // work permit (part time & temporary)
    public function part_time(Request $request, $user_id, $company_id, $part_time, $req_id)
    {
        $user = User::find($user_id);
        $sopnsored_by = PartTimeAndTemporary::find($part_time);
        if ($request->input('work_p') == 'step1') {
            $file = NULL;
            if ($request->hasfile('wp_app_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->wp_app_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('wp_app_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->wp_app_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'wp_app_file' => $file,
                'wp_app_date' => $request->wp_app_date,
                'wp_app_status' => $request->wp_app_status,
                'wp_app_trnc_fee' => $request->wp_app_trnc_fee,
                'wp_app_trnc_no' => $request->wp_app_trnc_no,
                'wp_app_file_name' => $request->wp_app_file_name,
            ]);
            $status = NULL;
            if($request->wp_app_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->wp_app_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->wp_app_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit application step of Part time and temporary process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }

            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('signed_st') == 'step2') {
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->signed_mb_st_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->signed_mb_st_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_st_file' => $file,
                'signed_mb_st_date' => $request->signed_mb_st_date,
                'signed_mb_st_status' => $request->signed_mb_st_status,
                'signed_mb_st_trc_fee' => $request->signed_mb_st_trc_fee,
                'signed_mb_st_trc_no' => $request->signed_mb_st_trc_no,
                // 'work_permit_app_file_name'=>$request->work_permit_app_file_name,
            ]);
            $status = NULL;
            if($request->signed_mb_st_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signed_mb_st_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signed_mb_st_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the  Upload ST & MB application step of Part time and temporary process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('waiting_for') == 'step3') {
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $sopnsored_by->waiting_for_approval_reason_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Waiting for Approval step of Part time and temporary process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('contract') == 'step4') {
            $file = NULL;
            if ($request->hasfile('contract_file')) {
                $destination = 'public/admin/assets/img/users' . $sopnsored_by->contract_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('contract_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $sopnsored_by->contract_file;
            }
            $sopnsored_by->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'contract_file' => $file,
                'contract_file_name' => $request->contract_file_name,
                'contract_date' => $request->contract_date,
                'contract_tran_fee' => $request->contract_tran_fee,
                'contract_tran_no' => $request->contract_tran_no,
                'contract_status' => $request->contract_status,
            ]);
            $status = NULL;
            if($request->contract_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->contract_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->contract_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload Contract step of Part time and temporary process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->contract_status == 'Approved')
            {
                $sopnsored_by->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Part Time / Temporary Process of Work Permit has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    // work permit (uae and gcc)
    public function uae_gcc_process(Request $request, $user_id, $company_id, $uae_gcc, $req_id)
    {
        $user = User::find($user_id);
        $uae_national = UaeAndGccNational::find($uae_gcc);
        if ($request->input('work_p') == 'step1') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('wp_app_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->wp_app_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('wp_app_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $uae_national->wp_app_file;
            }
            $uae_national->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'wp_app_file' => $file,
                'wp_app_date' => $request->wp_app_date,
                'wp_app_status' => $request->wp_app_status,
                'wp_app_trnc_fee' => $request->wp_app_trnc_fee,
                'wp_app_trnc_no' => $request->wp_app_trnc_no,
                'wp_app_file_name' => $request->wp_app_file_name,
            ]);
            $status = NULL;
            if($request->wp_app_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->wp_app_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->wp_app_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit application step of UAE and GCC has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }

        elseif ($request->input('signed_st') == 'step2') {
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->signed_mb_st_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $uae_national->signed_mb_st_file;
            }
            $uae_national->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_st_file' => $file,
                'signed_mb_st_date' => $request->signed_mb_st_date,
                'signed_mb_st_status' => $request->signed_mb_st_status,
                'signed_mb_st_trc_fee' => $request->signed_mb_st_trc_fee,
                'signed_mb_st_trc_no' => $request->signed_mb_st_trc_no,
                // 'work_permit_app_file_name'=>$request->work_permit_app_file_name,
            ]);
            $status = NULL;
            if($request->signed_mb_st_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signed_mb_st_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signed_mb_st_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload ST & MB step of UAE and GCC has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('dubai_insu') == 'step3') {
            $file = NULL;
            if ($request->hasfile('pay_dubai_insu_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->pay_dubai_insu_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('pay_dubai_insu_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $uae_national->pay_dubai_insu_file;
            }
            $uae_national->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'pay_dubai_insu_file' => $file,
                'pay_dubai_insu_tranc_no' => $request->pay_dubai_insu_tranc_no,
                'pay_dubai_insu_tranc_fee' => $request->pay_dubai_insu_tranc_fee,
                'pay_dubai_insu_status' => $request->pay_dubai_insu_status,
                'pay_dubai_insu_date' => $request->pay_dubai_insu_date,
                'pay_dubai_insu_file_name' => $request->pay_dubai_insu_file_name,
            ]);
            $status = NULL;
            if($request->pay_dubai_insu_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->pay_dubai_insu_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->pay_dubai_insu_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Pay Dubai insurance step of UAE and GCC has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('waiting_for') == 'step4') {
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $uae_national->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $uae_national->waiting_for_approval_reason_file;
            }
            $uae_national->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Waiting for Approval step of UAE and GCC has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('upload_wp') == 'step5') {
            $file = NULL;
            if ($request->hasfile('upload_wp_file')) {
                $destination = 'public/admin/assets/img/users' . $uae_national->upload_wp_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('upload_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $uae_national->upload_wp_file;
            }
            $uae_national->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'upload_wp_file' => $file,
                'upload_wp_file_name' => $request->upload_wp_file_name,
                'upload_wp_date' => $request->upload_wp_date,
                'upload_wp_status' => $request->upload_wp_status,
                'upload_wp_tranc_fee' => $request->upload_wp_tranc_fee,
                'upload_wp_tranc_no' => $request->upload_wp_tranc_no,
            ]);
            $status = NULL;
            if($request->upload_wp_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->upload_wp_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->upload_wp_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload Work Permit step of UAE and GCC has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->upload_wp_status == 'Approved')
            {
                $uae_national->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your UAE / GCC Process of Work Permit has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
    //work permit (modify contract)
    public function modify_cnt(Request $request, $user_id, $company_id, $modify_cn, $req_id)
    {
        $user = User::find($user_id);
        $modify_contract = ModifyContract::find($modify_cn);
        if ($request->input('work_permit_app') == 'step1') {
            // return $request;
            $file = NULL;
            if ($request->hasfile('wp_app_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_contract->wp_app_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('wp_app_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $modify_contract->wp_app_file;
            }
            $modify_contract->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'wp_app_file' => $file,
                'wp_app_date' => $request->wp_app_date,
                'wp_app_status' => $request->wp_app_status,
                'wp_app_trnc_fee' => $request->wp_app_trnc_fee,
                'wp_app_trnc_no' => $request->wp_app_trnc_no,
                'wp_app_file_name' => $request->wp_app_file_name,
            ]);
            $status = NULL;
            if($request->wp_app_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->wp_app_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->wp_app_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit application step of Modify Contract Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('signed_st') == 'step2') {
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_contract->signed_mb_st_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $modify_contract->signed_mb_st_file;
            }
            $modify_contract->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_mb_st_file' => $file,
                'signed_mb_st_date' => $request->signed_mb_st_date,
                'signed_mb_st_status' => $request->signed_mb_st_status,
                'signed_mb_st_trc_fee' => $request->signed_mb_st_trc_fee,
                'signed_mb_st_trc_no' => $request->signed_mb_st_trc_no,
                // 'work_permit_app_file_name'=>$request->work_permit_app_file_name,
            ]);
            $status = NULL;
            if($request->signed_mb_st_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signed_mb_st_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signed_mb_st_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload ST & MB step of Modify Contract Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('waiting_for') == 'step3') {
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_contract->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $modify_contract->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_contract->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $modify_contract->waiting_for_approval_reason_file;
            }
            $modify_contract->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Waiting for Approval step of Modify Contract Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
        elseif ($request->input('upload_wp') == 'step4') {
            $file = NULL;
            if ($request->hasfile('upload_wp_file')) {
                $destination = 'public/admin/assets/img/users' . $modify_contract->upload_wp_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('upload_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $modify_contract->upload_wp_file;
            }
            $modify_contract->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'upload_wp_file' => $file,
                'upload_wp_file_name' => $request->upload_wp_file_name,
                'upload_wp_date' => $request->upload_wp_date,
                'upload_wp_status' => $request->upload_wp_status,
                'upload_wp_tranc_fee' => $request->upload_wp_tranc_fee,
                'upload_wp_tranc_no' => $request->upload_wp_tranc_no,
            ]);
            $status = NULL;
            if($request->upload_wp_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->upload_wp_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->upload_wp_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload Work Permit step of Modify Contract Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->upload_wp_status == 'Approved')
            {
                $modify_contract->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Modify Contract Process of Work Permit has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }

    public function modification_visa(Request $request, $user_id, $company_id, $modify_visa, $req_id)
    {
        $user = User::find($user_id);
        $modify_visa = ModificationVisaEmiratesId::find($modify_visa);
        // return $modify_visa;
        if ($request->input('application') == 'step1') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'application_approval_file' => $file,
                'application_approval_no' => $request->application_approval_no,
                'application_status' => $request->application_status,
                'application_reject_reason' => $request->application_reject_reason,
                'application_reject_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->application_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->application_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->application_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Visa Modification step of Modification of Visa has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->application_status == 'Approved')
            {
                $modify_visa->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Modification of Visa Process it has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
    public function modification_emirates(Request $request, $user_id, $company_id, $modify_emirates, $req_id)
    {
        $user = User::find($user_id);
        $emirates = ModificationVisaEmiratesId::find($modify_emirates);
        if ($request->input('application') == 'step1') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'application_approval_file' => $file,
                'application_approval_no' => $request->application_approval_no,
                'application_status' => $request->application_status,
                'application_reject_reason' => $request->application_reject_reason,
                'application_reject_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->application_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->application_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->application_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Modification of Emirates ID step of Modification of Emirates Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->application_status == 'Approved')
            {
                $emirates->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Modification of Emirates Process has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
    public function visa_cancellation(Request $request, $user_id, $company_id, $visa_can, $req_id)
    {
        $user = User::find($user_id);
        $visa_cancellation = VisaCancelation::find($visa_can);
        if ($request->input('work_permit_app_cancellation') == 'step1') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('wp_app_can_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->wp_app_can_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('wp_app_can_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $visa_cancellation->wp_app_can_file;
            }
            $visa_cancellation->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'wp_app_can_file' => $file,
                'wp_app_can_date' => $request->wp_app_can_date,
                'wp_app_can_status' => $request->wp_app_can_status,
                'wp_app_can_trnc_fee' => $request->wp_app_can_trnc_fee,
                'wp_app_can_trnc_no' => $request->wp_app_can_trnc_no,
                'wp_app_can_file_name' => $request->wp_app_can_file_name,
            ]);
            $status = NULL;
            if($request->wp_app_can_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->wp_app_can_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->wp_app_can_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit cancellation form step of Visa Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('signed_cancellation') == 'step2') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('signed_cancellation_form')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->signed_cancellation_form;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_cancellation_form');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $visa_cancellation->signed_cancellation_form;
            }
            $visa_cancellation->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_cancellation_form' => $file,
            ]);
            $status = NULL;
            if($request->signed_cancellation_form)
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'Admin upload signed cancellation form of Visa Cancellation Process against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('signd_can_form_det') == 'step3') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('signd_can_from_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->signd_can_from_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signd_can_from_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $visa_cancellation->signd_can_from_file;
            }
            $visa_cancellation->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signd_can_from_file' => $file,
                'signd_can_from_date' => $request->signd_can_from_date,
                'signd_can_from_status' => $request->signd_can_from_status,
                'signd_can_from_tranc_fee' => $request->signd_can_from_tranc_fee,
                'signd_can_from_tranc_no' => $request->signd_can_from_tranc_no,
                'signd_can_from_file_name' => $request->signd_can_from_file_name,
            ]);
            $status = NULL;
            if($request->signd_can_from_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signd_can_from_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signd_can_from_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Signed Cancellation step of Visa Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('waiting_for') == 'step4') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $visa_cancellation->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_cancellation->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $visa_cancellation->waiting_for_approval_reason_file;
            }
            $visa_cancellation->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work Permit Cancellation Approval step of Visa Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('residency') == 'step5') {
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
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'residency_app_file' => $file,
                'residency_app_date' => $request->residency_app_date,
                'residency_app_status' => $request->residency_app_status,
                'residency_app_tranc_fee' => $request->residency_app_tranc_fee,
                'residency_app_tranc_no' => $request->residency_app_tranc_no,
                'residency_app_file_name' => $request->residency_app_file_name,
            ]);
            $status = NULL;
            if($request->residency_app_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->residency_app_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->residency_app_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Residency step of Visa Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->residency_app_status == 'Approved')
            {
                $visa_cancellation->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Visa Cancelation Process has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }
    public function permit_cancellation(Request $request, $user_id, $company_id, $permit_can, $req_id)
    {
        $user = User::find($user_id);
        $permit_can = PermitCancellation::find($permit_can);
        if ($request->input('work_permit_app_cancellation') == 'step1') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('wp_app_can_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $permit_can->wp_app_can_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('wp_app_can_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $permit_can->wp_app_can_file;
            }
            $permit_can->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'wp_app_can_file' => $file,
                'wp_app_can_date' => $request->wp_app_can_date,
                'wp_app_can_status' => $request->wp_app_can_status,
                'wp_app_can_trnc_fee' => $request->wp_app_can_trnc_fee,
                'wp_app_can_trnc_no' => $request->wp_app_can_trnc_no,
                'wp_app_can_file_name' => $request->wp_app_can_file_name,
            ]);
            $status = NULL;
            if($request->wp_app_can_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->wp_app_can_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->wp_app_can_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit cancellation form step of Work Permit Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('signed_cancellation') == 'step2') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('signed_cancellation_form')) {
                $destination = 'public/admin/assets/img/users' . $permit_can->signed_cancellation_form;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_cancellation_form');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $permit_can->signed_cancellation_form;
            }
            $permit_can->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signed_cancellation_form' => $file,
            ]);
            if($request->signed_cancellation_form)
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'Admin upload signed cancellation form of Work Permit Cancellation Process against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('signd_can_form_det') == 'step3') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('signd_can_from_file')) {
                $destination = 'public/admin/assets/img/users' . $permit_can->signd_can_from_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signd_can_from_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $permit_can->signd_can_from_file;
            }
            $permit_can->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'signd_can_from_file' => $file,
                'signd_can_from_date' => $request->signd_can_from_date,
                'signd_can_from_status' => $request->signd_can_from_status,
                'signd_can_from_tranc_fee' => $request->signd_can_from_tranc_fee,
                'signd_can_from_tranc_no' => $request->signd_can_from_tranc_no,
                'signd_can_from_file_name' => $request->signd_can_from_file_name,
            ]);
            $status = NULL;
            if($request->signd_can_from_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->signd_can_from_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->signd_can_from_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Upload signed cancellation form step of Work Permit Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        } elseif ($request->input('waiting_for') == 'step4') {
            // return "ok";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_file')) {
                $destination = 'public/admin/assets/img/users' . $permit_can->waiting_for_approval_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $file =  $permit_can->waiting_for_approval_file;
            }
            $reason_file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                $destination = 'public/admin/assets/img/users' . $permit_can->waiting_for_approval_reason_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $reason_file = $request->file('waiting_for_approval_reason_file');
                $extension = $reason_file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $reason_file->move('public/admin/assets/img/users', $filename);
                $reason_file = 'public/admin/assets/img/users/' . $filename;
            } else {
                // return "ok";
                $reason_file =  $permit_can->waiting_for_approval_reason_file;
            }
            $permit_can->update([
                'company_id' => $company_id,
                'employee_id' => $user_id,
                'waiting_for_approval_file' => $file,
                'waiting_for_approval_status' => $request->waiting_for_approval_status,
                'waiting_for_approval_no' => $request->waiting_for_approval_no,
                'waiting_for_approval_reason' => $request->waiting_for_approval_reason,
                // 'signed_mb_st_tranc_no'=>$request->signed_mb_st_tranc_no,
                'waiting_for_approval_reason_file' => $reason_file,
            ]);
            $status = NULL;
            if($request->waiting_for_approval_status == 'Approved')
            {
                $status = 'Approved';
            }
            elseif($request->waiting_for_approval_status == 'Skip')
            {
                $status = 'Skip';

            }elseif($request->waiting_for_approval_status == 'Reject')
            {
                $status = 'Reject';

            }
            if($status === 'Approved'|| $status === 'Skip' || $status === 'Reject')
            {
                $notify = AdminNotification::create([
                    'company_id'=>$company_id,
                    'to_all'=>'Companies',
                    'title'=>'Visa Notification',
                    'message'=>'This is inform you that the Work permit cancellation approval step of Work Permit Cancellation Process has been '.$status.' against '.$user->name.' <a href="'.route('company.employee.visa.process',$user->id).'">'.' click here. '.'</a>',
                ]);
            }
            if($request->waiting_for_approval_status == 'Approved')
            {
                $permit_can->update([
                    'status'=> 'completed',
                ]);
                $notify = AdminNotification::create([
                    'employee_id'=>$user_id,
                    'to_all'=>'Employees',
                    'title'=>'Visa Notification',
                    'message' => 'Your Permit Cancelation Process has been Completed.!',
                ]);
                return redirect()->back()->with('success', 'This process is completed Successfully.');
            }
            return redirect()->back()->with('success', 'Data Added Successfully.');
        }
    }


}
