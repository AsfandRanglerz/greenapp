<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\ProcessStarted;
use Illuminate\Http\Request;
use App\Models\NewVisaProcess;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;
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
                $file = 'public/admin/assets/img/users' . $filename;
            }
            else
            {
                $file = $new_visa->signed_mb_st_file;
            }
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
                $file->move('public/admin/assets/img/users'.$filename);
                $file = 'public/admin/assets/img/users' . $filename;
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
                $file->move('public/admin/assets/img/users'.$filename);
                $file = 'public/admin/assets/img/users' . $filename;
            }
            else
            {
                $file = $new_visa->dubai_insurance_file;
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
                $file->move('public/admin/assets/img/users' . $filename);
                $file = 'public/admin/assets/img/users' . $filename;
                // return $file;

            }
            else
            {
                $file = $new_visa->entry_visa_file;
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
                $over_stay->move('public/admin/assets/img/users'.$filename);
                $over_stay = 'public/admin/assets/img/users'.$filename;
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
                $file->move('public/admin/assets/img/users'.$filename);
                $file = 'public/admin/assets/img/users' . $filename;
            }
            else
            {
                $file = $new_visa->dubai_insurance_file;
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
            return "ok";
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
                $file->move('public/admin/assets/img/users'.$filename);
                $file = 'public/admin/assets/img/users' . $filename;
            }
            else
            {
                $file = $new_visa->dubai_insurance_file;
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

    }
}
