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
use App\Models\PartTimeAndTemporary;
use App\Models\ModificationVisaEmiratesId;

class AllProcessHandelController extends Controller
{
    public function view_excel_file($request_id,$company_id,$employee_id)
    {

        $process = VisaProcessRequest::find($request_id);
        // return $process;
        if($process->process_name == 'new visa') {
            // return "ok";
            $new_visa = NewVisaProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('new_visa'));
            // $table = 'NewVisaProcess';
            // return Excel::download(new MultiTableExport($table, $employee_id), "{$table}_data_{$employee_id}.xlsx");
        }
        elseif ($process->process_name == 'renewal process')
        {
            $renewal_process = RenewalProcess::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('renewal_process'));
            // $table = 'RenewalProcess';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

        }
        elseif ($process->process_name == 'work permit' && $process->sub_type == 'sponsored by some one')
        {

            $spo_by_some = SponsaredBySomeOne::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('spo_by_some'));

            // $table = 'SponsaredBySomeOne';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

        }
        elseif ($process->process_name == 'work permit' && $process->sub_type == 'part time')
        {

            $part_time = PartTimeAndTemporary::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('part_time'));
            // $table = 'PartTimeAndTemporary';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

        }

        elseif ($process->process_name == 'work permit' && $process->sub_type == 'uae and gcc')
        {

            $uae_gcc = UaeAndGccNational::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('uae_gcc'));

            // $table = 'UaeAndGccNational';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

        }
        elseif ($process->process_name == 'work permit' && $process->sub_type == 'modify contract')
        {

            $modify_contract = ModifyContract::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('modify_contract'));
            // $table = 'ModifyContract';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");

        }
        elseif ($process->process_name == 'modification of visa')
        {

            $modification_visa = ModificationVisaEmiratesId::where('employee_id', $employee_id)->where('company_id', $company_id)->where('process_name', 'modification of visa')->first();
            // return view('admin.visaprocess.excel',compact('modification_visa'));

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
            return view('admin.visaprocess.excel',compact('visa_cancellation'));
            // $table = 'VisaCancelation';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
        }
        elseif ($process->process_name == 'permit cancellation')
        {
            $permit_cancellation =  PermitCancellation::where('employee_id', $employee_id)->where('company_id', $company_id)->first();
            return view('admin.visaprocess.excel',compact('permit_cancellation'));
            // $table = 'PermitCancellation';
            // return Excel::download(new MultiTableExport($table, $employee_id,), "{$table}_data_{$employee_id}.xlsx");
        }


    }

    public function complete_processes()
    {
        $data['new_visa'] = NewVisaProcess::where('status','completed')->get();
        $data['renewal_process'] = RenewalProcess::where('status','completed')->get();
        $data['spo_by_some'] = SponsaredBySomeOne::where('status','completed')->get();
        $data['part_time'] = PartTimeAndTemporary::where('status','completed')->get();
        $data['uae_gcc'] = UaeAndGccNational::where('status','completed')->get();
        $data['modify_contract'] = ModifyContract::where('status','completed')->get();
        $data['modification_visa'] = ModificationVisaEmiratesId::where('process_name', 'modification of emirates Id')->where('status','completed')->get();
        $data['modification_emirates'] = ModificationVisaEmiratesId::where('process_name', 'modification of visa')->where('status','completed')->get();
        $data['visa_cancellation'] =  VisaCancelation::where('status','completed')->get();
        $data['permit_cancellation'] =  PermitCancellation::where('status','completed')->get();
        return view('admin.completeprocesses.completeprocess',compact('data'));

    }
}
