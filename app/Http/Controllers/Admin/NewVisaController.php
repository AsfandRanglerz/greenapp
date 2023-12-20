<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProcessStarted;

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

    public function start_visa_process($request_id,$user_id)
    {
        $employee = User::find($user_id);
        $data['employee_name'] = $employee->name;
        $data['request_name'] = VisaProcessRequest::where('employee_id',$user_id)->value('process_name');
        $process_request= VisaProcessRequest::find($request_id);
        // return $process_request->notify;
        if($process_request->notify == 'pending')
        {
            Mail::to($employee->email)->send(new ProcessStarted($data));
            $process_request->update([
                'notify'=>'notified',
            ]);
        }
        return view('admin.visaprocess.newvisa',compact('employee'));
    }
}
