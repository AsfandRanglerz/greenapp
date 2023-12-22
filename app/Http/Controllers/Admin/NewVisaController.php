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
            $new_visa_proc = NewVisaProcess::create([
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
             return redirect()->back()->with('success','message.');

        }
        elseif($request->input('sign_mb')== "step2")
        {
            return "create";
            $new_visa_process = NewVisaProcess::create([
                'company_id'=>$company_id,
                'employee_id'=>$user_id,
                'job_offer_file'=>$request->job_offer_file,
                'job_offer_date'=>$request->job_offer_date,
                'job_offer_status'=>$request->job_offer_status,
                'job_offer_tran_fees'=>$request->job_offer_tran_fees,
                'job_offer_preapproval_wp_t_no'=>$request->job_offer_preapproval_wp_t_no,
                'job_offer_mb_trc_no'=>$request->job_offer_mb_trc_no,
                'job_offer_tran_no'=>$request->job_offer_tran_no,
            ]);
        }
    }
}
