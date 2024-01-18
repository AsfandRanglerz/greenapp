<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\NotifyToAdmin;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;
use App\Models\IndividualGoldenVisa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class IndividualVisaProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "ok";
        $authId = Auth::guard('web')->id();
        $visa_data = IndividualGoldenVisa::where('individual_id',$authId)->first();
        return view('user.visaprocess.index',compact('visa_data'));
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

    }
    public function send_request(Request $request ,$id)
    {
        $individual = User::find($id);
        $process_name = $request->input('process_name');
        $request_type = $request->input('sub_type');
        // return [$process_name,$request_type];
        $exist_request = VisaProcessRequest::where('employee_id',$id)
        ->where('process_name',$process_name)
        ->where('request_for',$request_type)
        ->first();
        // return $exist_request;
        if(!$exist_request)
        {
            $individual_request = VisaProcessRequest::create([
                'employee_id'=>$id,
                'process_name'=>$process_name,
                'request_for'=>$request_type,
            ]);
            return redirect()->back()->with('success','Request send to admin successfully.');
        }
        else
        {
            return redirect()->back()->with('success','This request is already in process.');
        }

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
        $individual = User::find($id);
        $visa_data = IndividualGoldenVisa::where('individual_id',$id)->first();
        if($request->input('entry_visa') == 'entry_visa')
        {
            // return $request;
            $over_stay = NULL;
            if ($request->hasFile('enter_visa_osf_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_data->over_stay_fines_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $over_stay = $request->file('enter_visa_osf_file');
                $extension = $over_stay->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $over_stay->move('public/admin/assets/img/users', $filename);
                $over_stay = 'public/admin/assets/img/users/' . $filename;
            } else {
                $over_stay = $visa_data->over_stay_fines_file;
            }
            if ($request->enter_visa_country == 'no') {
                $over_stay = NULL;
            }
            $visa_data->update([
                'enter_visa_osf_file' => $over_stay,
                'enter_visa_over_sf' => $request->enter_visa_over_sf,
                'enter_visa_country' => $request->enter_visa_country,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his Entry Visa step of Golden Visa Process.',
                'route' => route('individual-visa-process-start', ['individual_id' => $id ,'request_id' => 0]),
            ]);
            return redirect()->back()->with('success','Data added successfully.');
        }
        elseif($request->input('medical') == 'medical')
        {
            $file = NULl;
            if ($request->hasFile('medical_fitness_file')) {
                $destination = 'public/admin/assets/img/users' . $visa_data->medical_fitness_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $visa_data->medical_fitness_file;
            }
            $visa_data->update([
                'medical_fitness_file' => $file,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his Medical Fitness step of Golden Visa Process.',
                'route' => route('individual-visa-process-start', ['individual_id' => $id ,'request_id' => 0]),
            ]);
            return redirect()->back()->with('success','Data added successfully.');
        }
        elseif ($request->input('biometric') == 'biometric'){
            // return $request;
            $status = NULL;
            $file = NULL;
            if ($request->hasFile('biometric_file')) {
                // return "ok";
                $destination = 'public/admin/assets/img/users' . $visa_data->biometric_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            } else {
                $file = $visa_data->biometric_file;
            }
            $visa_data->update([

                'biometric_file' => $file,
                'employee_biometric' => $request->employee_biometric,
            ]);
            $notify_admin = NotifyToAdmin::create([
                'title' => 'Visa Notification',
                'message' => 'The individual ' . $individual->name . ' take action on his Biometric step of Golden Visa Process.',
                'route' => route('individual-visa-process-start', ['individual_id' => $id ,'request_id' => 0]),
            ]);
            return redirect()->back()->with('success','Data added successfully.');

        }
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
}
