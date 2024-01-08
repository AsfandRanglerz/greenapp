<?php

namespace App\Http\Controllers\Company;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\ModifyContract;
use App\Models\NewVisaProcess;
use App\Models\RenewalProcess;
use App\Models\VisaCancelation;
use App\Models\UaeAndGccNational;
use App\Models\PermitCancellation;
use App\Models\SponsaredBySomeOne;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;
use App\Models\PartTimeAndTemporary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\ModificationVisaEmiratesId;

class EmployeeVisaProcessController extends Controller
{
    public function index($id)
    {
        // return 'ok';
        $authId = Auth::guard('company')->id();
        $employee = User::find($id);
        $new_visa_data = NewVisaProcess::where('company_id',$authId)->where('employee_id',$id)->first();
        $renewal_process_data = RenewalProcess::where('company_id',$authId)->where('employee_id',$id)->first();
        $spo_by_some = SponsaredBySomeOne::where('company_id',$authId)->where('employee_id',$id)->first();
        $part_time = PartTimeAndTemporary::where('company_id',$authId)->where('employee_id',$id)->first();
        $uae_national = UaeAndGccNational::where('company_id',$authId)->where('employee_id',$id)->first();
        $modify_contract = ModifyContract::where('company_id',$authId)->where('employee_id',$id)->first();
        $modification_visa = ModificationVisaEmiratesId::where('employee_id',$id)->where('company_id',$authId)->where('process_name','modification of visa')->first();
        $modification_emirates = ModificationVisaEmiratesId::where('employee_id',$id)->where('company_id',$authId)->where('process_name','modification of emirates Id')->first();
        $visa_cancellation = VisaCancelation::where('company_id',$authId)->where('employee_id',$id)->first();
        $permit_cancellation =  PermitCancellation::where('employee_id',$id)->where('company_id',$authId)->first();

        // return $renewal_process_data;
        return view('company.visaprocess.index',compact('employee','new_visa_data','renewal_process_data','spo_by_some','part_time','uae_national','modify_contract','modification_visa','modification_emirates','visa_cancellation','permit_cancellation'));
    }

    public function visa_process_request(Request $request , $id)
    {
        // return "ok";
        $authId = Auth::guard('company')->id();
        $name = $request->input('process_name');
        $sub_name = $request->input('sub_type');
        // return $name;
        $get_request =  VisaProcessRequest::where('company_id',$authId)->where('employee_id',$id)
        ->where('process_name',$name)
        ->where(function ($query) use ($sub_name) {
            $query->where('sub_type', NULL)
                  ->orWhere('sub_type', $sub_name);
        })->first();
        if($get_request)
        {
            return redirect()->route('company.employee.visa.process',$id)->with('success','This request is already in process.');
        }
        else
        {   if($request->input('process_name') == 'work permit' || $request->input('process_name') == 'visa cancelation')
            {
                $visa_process_request = VisaProcessRequest::create([
                    'company_id'=>$authId,
                    'employee_id'=>$id,
                    'process_name'=>$name,
                    'sub_type'=>$sub_name,
                    // 'process_name'=>$process_name,
                ]);
            }
            else
            {
                $visa_process_request = VisaProcessRequest::create([
                    'company_id'=>$authId,
                    'employee_id'=>$id,
                    'process_name'=>$name,
                    // 'sub_type'=>$sub_name,
                    // 'process_name'=>$process_name,
                ]);
            }
            return redirect()->route('company.employee.visa.process',$id)->with('success','Request send to admin successfully.');
        }
    }

    public function new_visa_data(Request $request , $id)
    {
        $data = NewVisaProcess::find($id);
        // return $data;
        if($request->input('sign_mb')== "step1")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('signed_mb_st_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_st_file;
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
                $file = $data->signed_mb_st_file;
            }
            // return $file;
            $data->update([
                'signed_mb_st_file'=>$file,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('entry_visa')== "step2")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('enter_visa_osf_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->enter_visa_osf_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('enter_visa_osf_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->enter_visa_osf_file;
            }
            // return $file;
            $data->update([
                'enter_visa_osf_file'=>$file,
                'enter_visa_over_sf'=>$request->enter_visa_over_sf,
                'enter_visa_country'=>$request->enter_visa_country,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('medical_fitness')== "step3")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('medical_fitness_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->medical_fitness_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->medical_fitness_file;
            }
            // return $file;
            $data->update([
                'medical_fitness_file'=>$file,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('tawjeeh_classes')== "step4")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('tawjeeh_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->tawjeeh_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('tawjeeh_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->tawjeeh_file;
            }
            // return $file;
            $data->update([
                'tawjeeh_file'=>$file,
                'tawjeeh_payment'=>$request->tawjeeh_payment,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('bio_metric')== "step5")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('biometric_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->biometric_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->biometric_file;
            }
            // return $file;
            $data->update([
                'biometric_file'=>$file,
                'employee_biometric'=>$request->employee_biometric,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting_for_approval') == "waiting_for_approval")
        {
             // return "create";
             $file = NULL;
             if($request->hasFile('waiting_fappro_reason_file'))
             {
                 $destination = 'public/admin/assets/img/users' . $data->waiting_fappro_reason_file;
                 if(File::exists($destination))
                 {
                     File::delete($destination);
                 }
                 $file = $request->file('waiting_fappro_reason_file');
                 $extension = $file->getClientOriginalExtension();
                 $filename = time() . '.' . $extension;
                 $file->move('public/admin/assets/img/users',$filename);
                 $file = 'public/admin/assets/img/users/' . $filename;
             }
             else
             {
                 $file = $data->waiting_fappro_reason_file;
             }
             // return $file;
             $data->update([
                 'waiting_fappro_reason_file'=>$file,
             ]);
             return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function renewal_process(Request $request , $id)
    {
        $data = RenewalProcess::find($id);
        if($request->input('medical_fitness')== "step1")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('medical_fitness_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->medical_fitness_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('medical_fitness_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->medical_fitness_file;
            }
            // return $file;
            $data->update([
                'medical_fitness_file'=>$file,
                'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('signed_mb')== "step2")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('signed_mb_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->signed_mb_file;
            }
            // return $file;
            $data->update([
                'signed_mb_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('tawjeeh_class')== "step3")
        {
            // return "create";
            $file = NULL;
            if($request->hasFile('tawjeeh_tranc_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->tawjeeh_tranc_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('tawjeeh_tranc_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->tawjeeh_tranc_file;
            }
            // return $file;
            $data->update([
                'tawjeeh_tranc_file'=>$file,
                'tawjeeh_tranc_payment'=>$request->tawjeeh_tranc_payment,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('bio_metric')== "step4")
        {
            // return $request;
            $file = NULL;
            if($request->hasFile('emp_biometric_file'))
            {
                $destination = 'public/admin/assets/img/users' . $data->emp_biometric_file;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('emp_biometric_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users',$filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                $file = $data->emp_biometric_file;
            }
            // return $file;
            $data->update([
                'emp_biometric_file'=>$file,
                'emp_biometric'=>$request->emp_biometric,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    // work permit (sponsored by some section)
    public function sponsored_by(Request $request, $id)
    {
        $data = SponsaredBySomeOne::find($id);
        // return $data;

        if($request->input('signed_mb')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                // return $data->signed_mb_st_file;
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_st_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_mb_st_file;
            }
            // return $file;
            $data->update([
                'signed_mb_st_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function part_time(Request $request, $id)
    {
        $data = PartTimeAndTemporary::find($id);
        // return $data;

        if($request->input('signed_mb')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                // return $data->signed_mb_st_file;
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_st_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_mb_st_file;
            }
            // return $file;
            $data->update([
                'signed_mb_st_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function uae_gcc(Request $request, $id)
    {
        $data = UaeAndGccNational::find($id);
        if($request->input('signed_mb')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                // return $data->signed_mb_st_file;
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_st_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_mb_st_file;
            }
            // return $file;
            $data->update([
                'signed_mb_st_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }


    public function modify_contract(Request $request, $id)
    {
        $data = ModifyContract::find($id);
        if($request->input('signed_mb')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_mb_st_file')) {
                // return $data->signed_mb_st_file;
                $destination = 'public/admin/assets/img/users' . $data->signed_mb_st_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_mb_st_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_mb_st_file;
            }
            // return $file;
            $data->update([
                'signed_mb_st_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function visa_modification(Request $request, $id)
    {
        $data = ModificationVisaEmiratesId::find($id);
        if($request->input('waiting')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('application_reject_reason_file')) {
                // return $data->application_reject_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->application_reject_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('application_reject_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->application_reject_reason_file;
            }
            // return $file;
            $data->update([
                'application_reject_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function emirates_modification(Request $request, $id)
    {
        $data = ModificationVisaEmiratesId::find($id);
        if($request->input('waiting')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('application_reject_reason_file')) {
                // return $data->application_reject_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->application_reject_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('application_reject_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->application_reject_reason_file;
            }
            // return $file;
            $data->update([
                'application_reject_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function visa_cancellation(Request $request, $id)
    {
        $data = VisaCancelation::find($id);
        if($request->input('signed_cancellation')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_cancellation_form')) {
                // return $data->signed_cancellation_form;
                $destination = 'public/admin/assets/img/users' . $data->signed_cancellation_form;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_cancellation_form');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_cancellation_form;
            }
            // return $file;
            $data->update([
                'signed_cancellation_form'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

    public function permit_cancellation(Request $request, $id)
    {
        $data = PermitCancellation::find($id);
        // return $id;
        if($request->input('signed_cancellation')== "step1")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('signed_cancellation_form')) {
                // return $data->signed_cancellation_form;
                $destination = 'public/admin/assets/img/users' . $data->signed_cancellation_form;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('signed_cancellation_form');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->signed_cancellation_form;
            }
            // return $file;
            $data->update([
                'signed_cancellation_form'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
        elseif($request->input('waiting')== "step2")
        {
            // return "create";
            $file = NULL;
            if ($request->hasfile('waiting_for_approval_reason_file')) {
                // return $data->waiting_for_approval_reason_file;
                $destination = 'public/admin/assets/img/users' . $data->waiting_for_approval_reason_file;
                // return $destination;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('waiting_for_approval_reason_file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
                $file = 'public/admin/assets/img/users/' . $filename;
            }
            else
            {
                // return "ok";
                $file =  $data->waiting_for_approval_reason_file;
            }
            // return $file;
            $data->update([
                'waiting_for_approval_reason_file'=>$file,
                // 'medical_fitness_st'=>$request->medical_fitness_st,
            ]);
            return redirect()->back()->with('success','Data Added Successfully.');
        }
    }

}
