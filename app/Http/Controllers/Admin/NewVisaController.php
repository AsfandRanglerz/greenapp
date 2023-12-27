<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\ProcessStarted;
use Illuminate\Http\Request;
use App\Models\NewVisaProcess;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;
use App\Models\Receipt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class NewVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visa_requests = VisaProcessRequest::with('company','user')->orderBy('created_at','DESC')->get();
        // return $visa_requests->company->name;
        return view('admin.visaprocess.index',compact('visa_requests'));
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
    public function show($id)
    {
        // return 'ok';
        $status = VisaProcessRequest::find($id);
        $status->update([
            'status'=>'approved',
        ]);
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

    public function view()
    {
        return view('admin.visaprocess.newvisa');
    }

    public function start_visa_process($request_id,$user_id,$company_id)
    {
        $employee = User::find($user_id);
        $data['employee_name'] = $employee->name;
        $data['request_name'] = VisaProcessRequest::where('employee_id',$user_id)->value('process_name');
        $process_request= VisaProcessRequest::find($request_id);
        if($process_request->notify == 'pending')
        {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            $process_request->update([
                'notify'=>'notified',
            ]);
        }
        $ids['user_id'] = $user_id;
        $ids['company_id'] = $company_id;
        $ids['req_id'] = $request_id;
        $new_visa = NewVisaProcess::where('employee_id',$user_id)->where('company_id',$company_id)->first();
        if(!$new_visa)
        {
            $new_visa = NewVisaProcess::create([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
        ]);}
        return view('admin.visaprocess.newvisa',compact('ids','new_visa'));
    }


    // visa action
    public function new_visa_updation(Request $request,$user_id,$company_id,$newvisa_id,$req_id)
    {
        $new_visa = NewVisaProcess::find($newvisa_id);
        // $employee_receipt = Receipt::where('user_id',$user_id)->first();
        // return $employee_receipt;

        if($request->input('job_offer')== "step1")
        {
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
            }
            else
            {
                // return "ok";
                $file =  $new_visa->job_offer_file;
            }
            // return $request;
            $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'job_offer_file'=>$file,
                'job_offer_file_name'=>$request->job_offer_file_name,
                'job_offer_date'=>$request->job_offer_date,
                'job_offer_status'=>$request->job_offer_status,
                'job_offer_tran_fees'=>$request->job_offer_tran_fees,
                'job_offer_preapproval_wp_t_no'=>$request->job_offer_preapproval_wp_t_no,
                'job_offer_mb_trc_no'=>$request->job_offer_mb_trc_no,
                'job_offer_tran_no'=>$request->job_offer_tran_no,
            ]);
            // $primaryKey = NULL;
            //  if(!$employee_receipt)
            //  {
            //     // return "ok";
            //     $receipt = Receipt::create([
            //         'user_id'=>$user_id,
            //         'file'=>$file,
            //         'receipt'=>$request->job_offer_file_name,
            //     ]);
            //     $primaryKey = $receipt->getKey();
            //     // return $primaryKey;
            //  }
            // elseif(Receipt::where('user_id',$user_id)->where('receipt',$request->job_offer_file_name)->first())
            // {
            //     $exist_receipt = Receipt::where('receipt',$request->job_offer_file_name)->first();
            //     // return $exist_receipt;
            //     $exist_receipt->update([
            //         'file'=>$file,
            //         'receipt'=>$request->job_offer_file_name,
            //     ]);
            //     return $exist_receipt;
            // }
            $ids['user_id'] = $user_id;
            $ids['company_id'] = $company_id;
            $ids['req_id'] = $req_id;
             return redirect()->back()->with('success','Data Added Successfully.');
            //  return redirect()->route('view-process')->with('success', 'Added.');

        }
        elseif($request->input('sign_mb')== "step2")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('signed_mb_st_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->signed_mb_st_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->signed_mb_st_file;
            }
            // return $file;
            $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'signed_mb_st_file'=>$file,
                'signed_mb_st_date'=>$request->signed_mb_st_date,
                'signed_mb_st_status'=>$request->signed_mb_st_status,
                'signed_mb_st_reason'=>$request->signed_mb_st_reason,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('dubai_ins')== "step3")
        {
            $file = NULl;
            if($request->hasFile('dubai_insurance_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->dubai_insurance_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('dubai_insurance_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->dubai_insurance_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'dubai_insurance_file'=>$file,
                'dubai_insurance_file_name'=>$request->dubai_insurance_file_name,
                'dubai_insurance_tran_no'=>$request->dubai_insurance_tran_no,
                'dubai_insurance_tran_fees'=>$request->dubai_insurance_tran_fees,
                'dubai_insurance_status'=>$request->dubai_insurance_status,
                'dubai_insurance_date'=>$request->dubai_insurance_date,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('preapproval')== "step4")
        {
            $file = NULl;
            if($request->hasFile('pre_approved_wp_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->pre_approved_wp_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('pre_approved_wp_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users' ,$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->pre_approved_wp_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'pre_approved_wp_file'=>$file,
                'pre_approved_wp_status'=>$request->pre_approved_wp_status,
                'pre_approved_wp_file_name'=>$request->pre_approved_wp_file_name,
                'pre_approved_wp_tran_fees'=>$request->pre_approved_wp_tran_fees,
                'pre_approved_wp_date'=>$request->pre_approved_wp_date,
                'pre_approved_wp_tran_no'=>$request->pre_approved_wp_tran_no,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('entry_visa') == 'step5')
        {
            // return $request;
            $file = Null;
            if($request->hasFile('enter_visa_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->enter_visa_file;
                if(File::exists($destination)){
                    File::delete($destination);

                }
                $file = $request->file('enter_visa_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users' , $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
                // return $file;

            }
            else
            {
                $file = $new_visa->enter_visa_file;
            }
            $over_stay = NULL;
            if($request->hasFile('enter_visa_osf_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->over_stay_fines_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $over_stay = $request->file('enter_visa_osf_file');
                $extension = $over_stay->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $over_stay->move('public/admin/assets/img/users', $filename);
                $over_stay = 'public/admin/assets/img/users/'.$filename;
            }
            else
            {
                $over_stay = $new_visa->entry_visa_file;
            }
            if($request->enter_visa_country=='no')
            {
                    $over_stay = NULL;
            }
            $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'enter_visa_file'=>$file,
                'enter_visa_osf_file'=>$over_stay,
                'enter_visa_status'=>$request->enter_visa_status,
                'enter_visa_file_name'=>$request->enter_visa_file_name,
                'enter_visa_ts_fee'=>$request->enter_visa_ts_fee,
                'enter_visa_date'=>$request->enter_visa_date,
                'enter_visa_ts_no'=>$request->enter_visa_ts_no,
                'enter_visa_over_sf'=>$request->enter_visa_over_sf,
                'enter_visa_country'=>$request->enter_visa_country,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');

        }

        elseif($request->input('change_of') == 'step6')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('change_of_visa_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->change_of_visa_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('change_of_visa_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->change_of_visa_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'change_of_visa_file'=>$file,
                'change_of_visa_status'=>$request->change_of_visa_status,
                'change_of_visa_file_name'=>$request->change_of_visa_file_name,
                'change_of_visa_tfee'=>$request->change_of_visa_tfee,
                'change_of_visa_date'=>$request->change_of_visa_date,
                'change_of_visa_tno'=>$request->change_of_visa_tno,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('medical_fitness') == 'step7')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('medical_fitness_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->medical_fitness_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users' , $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->medical_fitness_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'medical_fitness_file'=>$file,
                'medical_fitness_status'=>$request->medical_fitness_status,
                'medical_fitness_file_name'=>$request->medical_fitness_file_name,
                'medical_fitness_tfee'=>$request->medical_fitness_tfee,
                'medical_fitness_date'=>$request->medical_fitness_date,
                'medical_fitness_tno'=>$request->medical_fitness_tno,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('tawjeeh_class') == 'step8')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('tawjeeh_file'))
            {
                $destination = 'public/admin/assets/img/users' . $new_visa->tawjeeh_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('tawjeeh_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->tawjeeh_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'tawjeeh_file'=>$file,
                'tawjeeh_status'=>$request->tawjeeh_status,
                'tawjeeh_payment'=>$request->tawjeeh_payment,
                'tawjeeh_trans_fee'=>$request->tawjeeh_trans_fee,
                'tawjeeh_date'=>$request->tawjeeh_date,
                'tawjeeh_trans_no'=>$request->tawjeeh_trans_no,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('contract_subm') == 'step9')
        {
            // return "ok";
            $file = NULl;
            if($request->hasFile('contract_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->contract_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('contract_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->contract_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'contract_file'=>$file,
                'contract_status'=>$request->contract_status,
                'contract_file_name'=>$request->contract_file_name,
                'contract_tran_no'=>$request->contract_tran_no,
                'contract_date'=>$request->contract_date,
                'contract_tran_fee'=>$request->contract_tran_fee,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('health_insurance') == 'step10')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('health_insur_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->health_insur_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('health_insur_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->health_insur_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'health_insur_file'=>$file,
                'health_insur_status'=>$request->health_insur_status,
                'health_insur_file_name'=>$request->health_insur_file_name,
                'health_insur_tran_fee'=>$request->health_insur_tran_fee,
                'health_insur_date'=>$request->health_insur_date,
                'health_insur_tran_no'=>$request->health_insur_tran_no,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('work_permit') == 'step11')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('work_permit_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->work_permit_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('work_permit_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users' , $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->work_permit_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'work_permit_file'=>$file,
                'work_permit_status'=>$request->work_permit_status,
                'work_permit_file_name'=>$request->work_permit_file_name,
                'work_permit_tran_fee'=>$request->work_permit_tran_fee,
                'work_permit_date'=>$request->work_permit_date,
                'work_permit_tran_no'=>$request->work_permit_tran_no,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('emirates_residency_app') == 'step12')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('work_permit_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->work_permit_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('work_permit_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users' ,$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->work_permit_file;
            }
            $rs_file = NULl;
            if($request->hasFile('residency_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->residency_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $rs_file = $request->file('residency_file');
                $extension = $rs_file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $rs_file->move('public/admin/assets/img/users', $filename);
                $rs_file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $rs_file = $new_visa->residency_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'emirates_file'=>$file,
                'emirates_status'=>$request->emirates_status,
                'emirates_file_name'=>$request->emirates_file_name,
                'emirates_tran_fee'=>$request->emirates_tran_fee,
                'emirates_date'=>$request->emirates_date,
                'emirates_tran_no'=>$request->emirates_tran_no,
                'residency_file'=>$rs_file,
                'residency_status'=>$request->residency_status,
                'residency_file_name'=>$request->residency_file_name,
                'residency_tran_fee'=>$request->residency_tran_fee,
                'residency_date'=>$request->residency_date,
                'residency_tran_no'=>$request->residency_tran_no,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }

        elseif($request->input('biometric') == 'step13')
        {
            // return $request;
            $file = NULl;
            if($request->hasFile('biometric_file'))
            {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $new_visa->biometric_file;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('public/admin/assets/img/users' , $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $new_visa->biometric_file;
            }
             $new_visa->update([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'biometric_file'=>$file,
                'biometric_status'=>$request->biometric_status,
                'employee_biometric'=>$request->employee_biometric,
                'biometric_tranc_fee'=>$request->biometric_tranc_fee,
                'biometric_date'=>$request->biometric_date,
                'biometric_tranc_no'=>$request->biometric_tranc_no,
            ]);
            if($request->biometric_status == "Approved")
            {
                return redirect()->back()->with('success','This process is completed Successfully.');
            }
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        else
        {
            return redirect()->back();

        }
    }
}
