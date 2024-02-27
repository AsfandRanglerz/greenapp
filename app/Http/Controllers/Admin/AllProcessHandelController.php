<?php

namespace App\Http\Controllers\Admin;

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
use App\Models\IndividualGoldenVisa;
use App\Models\PartTimeAndTemporary;
use App\Models\ModificationVisaEmiratesId;

class AllProcessHandelController extends Controller
{
    public function view_excel_file(Request $request ,$request_id,$company_id,$employee_id)
    {
        $process = VisaProcessRequest::find($request_id);
        // return $process;
        if($process)
        {
            if($process->process_name == 'new visa') {
                // return "ok";
                $new_visa = NewVisaProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','new_visa'));
                // $table = 'NewVisaProcess';
                // return Excel::download(new MultiTableExport($table, $employee_id), "{$table}_data_{$employee_id}.xlsx");
            }
            elseif ($process->process_name == 'renewal process')
            {
                $renewal_process = RenewalProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','renewal_process'));
                // $table = 'RenewalProcess';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'work permit' && $process->sub_type == 'sponsored by some one')
            {

                $spo_by_some = SponsaredBySomeOne::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','spo_by_some'));

                // $table = 'SponsaredBySomeOne';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'work permit' && $process->sub_type == 'part time')
            {

                $part_time = PartTimeAndTemporary::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','part_time'));
                // $table = 'PartTimeAndTemporary';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }

            elseif ($process->process_name == 'work permit' && $process->sub_type == 'uae and gcc')
            {

                $uae_gcc = UaeAndGccNational::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','uae_gcc'));

                // $table = 'UaeAndGccNational';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'work permit' && $process->sub_type == 'modify contract')
            {

                $modify_contract = ModifyContract::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','modify_contract'));
                // $table = 'ModifyContract';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'modification of visa')
            {

                $modification_visa = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('company_id', $company_id)->where('process_name', 'modification of visa')->first();
                // return view('admin.visaprocess.excel',compact('company_id','employee_id','modification_visa'));

                // $table = 'ModificationVisaEmiratesId';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
            }
            elseif ($process->process_name == 'modification of emirates Id')
            {
                $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('company_id', $company_id)->where('process_name', 'modification of emirates Id')->first();
                // $table = 'ModificationVisaEmiratesId';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'visa cancellation')
            {
                $visa_cancellation =  VisaCancelation::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','visa_cancellation'));
                // $table = 'VisaCancelation';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
            }
            elseif ($process->process_name == 'permit cancellation')
            {
                $permit_cancellation =  PermitCancellation::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','permit_cancellation'));
                // $table = 'PermitCancellation';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
            }


        }
        else
        {
            if($request->name == 'new visa') {
                // return "ok";
                $new_visa = NewVisaProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','new_visa'));
            }
            elseif ($request->name == 'renewal process')
            {
                // return "renewal process";
                $renewal_process = RenewalProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','renewal_process'));

            }
            elseif ($request->name == 'sponsored by some one')
            {
                $spo_by_some = SponsaredBySomeOne::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','spo_by_some'));
            }
            elseif ($request->name == 'part time')
            {

                $part_time = PartTimeAndTemporary::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','part_time'));

            }

            elseif ($request->name == 'uae and gcc')
            {

                $uae_gcc = UaeAndGccNational::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','uae_gcc'));


            }
            elseif ($request->name == 'modify contract')
            {

                $modify_contract = ModifyContract::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','modify_contract'));

            }
            elseif ($request->name == 'modification of visa')
            {

                $modification_visa = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('company_id', $company_id)->where('process_name', 'modification of visa')->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','modification_visa'));

            }
            elseif ($request->name == 'modification of emirates Id')
            {
                $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('company_id', $company_id)->where('process_name', 'modification of emirates Id')->first();

            }
            elseif ($request->name == 'visa cancellation')
            {
                $visa_cancellation =  VisaCancelation::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','visa_cancellation'));
            }
            elseif ($request->name == 'permit cancellation')
            {
                $permit_cancellation =  PermitCancellation::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
                return view('admin.visaprocess.excel',compact('company_id','employee_id','permit_cancellation'));
            }


        }
    }

    public function view_excel_file_dependent(Request $request , $request_id , $employee_id, $dependent_id)
    {

        $process = VisaProcessRequest::find($request_id);
        // return $process;
        if($process)
        {
            if($process->process_name == 'new visa') {
                // return "ok";
                $new_visa = NewVisaProcess::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','new_visa'));
                // $table = 'NewVisaProcess';
                // return Excel::download(new MultiTableExport($table, $employee_id), "{$table}_data_{$employee_id}.xlsx");
            }
            elseif ($process->process_name == 'renewal process')
            {
                $renewal_process = RenewalProcess::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','renewal_process'));
                // $table = 'RenewalProcess';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'modification of visa')
            {

                $modification_visa = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of visa')->first();
                // return view('admin.visaprocess.dependentexcel',compact('employee_id','employee_id','modification_visa'));

                // $table = 'ModificationVisaEmiratesId';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
            }
            elseif ($process->process_name == 'modification of emirates Id')
            {
                $modification_emirates = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->where('process_name', 'modification of emirates Id')->first();
                // $table = 'ModificationVisaEmiratesId';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

            }
            elseif ($process->process_name == 'visa cancellation')
            {
                $visa_cancellation =  VisaCancelation::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','visa_cancellation'));
                // $table = 'VisaCancelation';
                // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
            }
        }
        else
        {
            // return "ok depnednt on complete sectoin.";
            if($request->name == 'new visa') {

                $new_visa = NewVisaProcess::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','new_visa'));
            }
            elseif ($request->name == 'renewal process')
            {
                // return "renewal process";
                $renewal_process = RenewalProcess::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','renewal_process'));

            }
            elseif ($request->name == 'visa cancellation')
            {
                // return "ok";
                $visa_cancellation =  VisaCancelation::where('employee_id', $employee_id)->where('dependent_id', $dependent_id)->first();
                return view('admin.visaprocess.dependentexcel',compact('employee_id','dependent_id','visa_cancellation'));
            }



        }
    }
      public function view_excel_file_individual(Request $request , $request_id,$individual_id)
    {
        $process = VisaProcessRequest::find($request_id);
        if($process)
        {
            $golden_visa = IndividualGoldenVisa::where('individual_id',$individual_id)->first();
            // return  $golden_visa;
            return view('admin.visaprocess.individualexcel',compact('individual_id','golden_visa'));
        }
        else
        {

            if($request->name == 'golden_visa')
            {
                $golden_visa = IndividualGoldenVisa::where('individual_id',$individual_id)->first();
                // return $golden_visa;
                return view('admin.visaprocess.individualexcel',compact('individual_id','golden_visa'));
            }
        }

    }

    public function complete_processes()
    {
        $data['new_visa'] = NewVisaProcess::with('user','company','dependent')->where('status','completed')->orderBy('created_at', 'desc')->get();
        // return $data['new_visa'];
        $data['renewal_process'] = RenewalProcess::with('user','company','dependent')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['spo_by_some'] = SponsaredBySomeOne::with('user','company')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['part_time'] = PartTimeAndTemporary::with('user','company')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['uae_gcc'] = UaeAndGccNational::with('user','company')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['modify_contract'] = ModifyContract::with('user','company')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['modification_emirates'] = ModificationVisaEmiratesId::with('user','company','dependent')->where('process_name', 'modification of emirates Id')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['modification_visa'] = ModificationVisaEmiratesId::with('user','company','dependent')->where('process_name', 'modification of visa')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $data['visa_cancellation'] =  VisaCancelation::with('user','company','dependent')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $permit =  PermitCancellation::with('user','company')->where('status','completed')->orderBy('created_at', 'desc')->get();
        $individual_golden =  IndividualGoldenVisa::with('user')->where('status','completed')->orderBy('created_at', 'desc')->get();
        // return $data['modification_visa'];
        return view('admin.completeprocesses.completeprocess',compact('data','permit','individual_golden'));
    }

    public function admin_start_processes()
    {
        $data['new_visa'] = NewVisaProcess::with('user','company','dependent')->where('start_by','admin')->get();
        // return $data['new_visa'];
        $data['renewal_process'] = RenewalProcess::with('user','company','dependent')->where('start_by','admin')->get();
        $data['spo_by_some'] = SponsaredBySomeOne::with('user','company')->where('start_by','admin')->get();
        $data['part_time'] = PartTimeAndTemporary::with('user','company')->where('start_by','admin')->get();
        $data['uae_gcc'] = UaeAndGccNational::with('user','company')->where('start_by','admin')->get();
        $data['modify_contract'] = ModifyContract::with('user','company')->where('start_by','admin')->get();
        $data['modification_emirates'] = ModificationVisaEmiratesId::with('user','company','dependent')->where('process_name', 'modification of emirates Id')->where('start_by','admin')->get();
        $data['modification_visa'] = ModificationVisaEmiratesId::with('user','company','dependent')->where('process_name', 'modification of visa')->where('start_by','admin')->get();
        $data['visa_cancellation'] =  VisaCancelation::with('user','company','dependent')->where('start_by','admin')->get();
        $permit =  PermitCancellation::with('user','company')->where('start_by','admin')->get();
        $individual_golden =  IndividualGoldenVisa::with('user')->where('start_by','admin')->get();
        return view('admin.startprocesses.startprocesses',compact('data','permit','individual_golden'));
    }
}
