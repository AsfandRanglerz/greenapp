<?php

namespace App\Http\Controllers\Api\Company;

use App\Models\Area;
use App\Helper\Helper;
use App\Models\License;
use App\Utils\Paginate;
use App\Models\JobPackage;
use App\Models\OfficerJobs;
use Illuminate\Http\Request;
use App\Models\ContractorJob;
use App\Models\ContractorApply;
use App\Models\OfficerQuotation;
use App\Models\ContractorQuotation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\ContractorJobWishList;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('company')->id();
        $officer = OfficerQuotation::with('company')->where([['company_id', $authId], ['status', '!=', 'Completed']])->get();
        $contractor = ContractorQuotation::with('company')->where([['company_id', $authId], ['status', '!=', 'Completed']])->get();

        if (count($officer) > 0 || count($contractor) > 0) {
            $data = array('officer' => $officer, 'contractor' => $contractor);
            return response([
                'status' => 'Ok',
                'data' => $data,
            ], 200);
        } else {
            return response([
                'status' => 'Ok',
                'message' => 'There is no record',
                'data' => null,

            ], 200);
        }
    }

    /** all areas */
    public function area()
    {
        $data = Area::all();
        return response([
            'status' => 'Ok',
            'data' => $data,
        ], 200);
    }
    /** all license types */
    public function license()
    {
        $data = License::all();
        return response([
            'status' => 'Ok',
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authId = Auth::guard('company')->id();

        /** check the available purchased jobs for job posting  */
        $totalJobs = $request->days * $request->req_officer;
        $jobs = JobPackage::where('company_id', $authId)->first();
        if ($jobs->total < $totalJobs) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Not enough jobs',
                'available' => $jobs->total,
                'required' => $totalJobs,
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'area' => 'required',
            'location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'days' => 'required',
            'shift_hour' => 'required',
            'rate' => 'required',
            'ni_req' => 'required',
            'contact' => 'required',
            'req_officer' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 400);
        }

        if ($request->post_to == "Officer") {

            $quotation = OfficerQuotation::create([
                'company_id' => $authId,
                'title' => $request->title,
                'description' => $request->description,
                'area' => $request->area,
                'location' => $request->location,
                'post_code' => $request->post_code,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'days' => $request->days,
                'shift_hour' => $request->shift_hour,
                'rate' => $request->rate,
                'payment_release' => $request->payment_release,
                'type' => $request->type,
                'ni_req' => $request->ni_req,
                'required_license' => $request->required_license,
                'shift' => $request->shift,
                'name' => $request->name,
                'contact' => $request->contact,
                'chat' => $request->chat,
                'req_officer' => $request->req_officer,
                'quote_type' => $request->quote_type,
                'post_to' => 'Officer',
            ]);
        } else {
            $quotation = ContractorQuotation::create([
                'company_id' => $authId,
                'title' => $request->title,
                'description' => $request->description,
                'area' => $request->area,
                'location' => $request->location,
                'post_code' => $request->post_code,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'days' => $request->days,
                'shift_hour' => $request->shift_hour,
                'rate' => $request->rate,
                'payment_release' => $request->payment_release,
                'type' => $request->type,
                'ni_req' => $request->ni_req,
                'required_license' => $request->required_license,
                'shift' => $request->shift,
                'name' => $request->name,
                'contact' => $request->contact,
                'chat' => $request->chat,
                'req_officer' => $request->req_officer,
                'quote_type' => $request->quote_type,
                'post_to' => 'Contractor',
            ]);
            if (!isset($request->main_job_id)) {
                ContractorQuotation::find($quotation->id)->update(['main_job_id' => $quotation->id]);
            }
        }
        /**hold company jobs */
        $totalJobs = $request->days * $request->req_officer;
        $jobs = JobPackage::where('company_id', $authId)->first();
        $jobs->total = $jobs->total - $totalJobs;
        $jobs->hold = $totalJobs;
        $jobs->save();

        if ($quotation) {
            return response([
                'status' => 'Ok',
                'message' => 'Successfully Created!',
                'data' => $quotation,
            ], 201);
        } else {
            return response([
                'status' => 'faild',
                'message' => 'something wrong',
                'data' => [],
            ], 404);
        }
    }

    /* Show the form for editing the specified resource. */
    public function edit(Request $request)
    {
        if ($request->post_to == "Officer") {
            $quotation = OfficerQuotation::find($request->id);
        } else {
            $quotation = ContractorQuotation::find($request->id);
        }

        if ($quotation) {
            return response([
                'status' => 'Ok',
                'data' => $quotation,
            ], 200);
        } else {
            return response([
                'status' => 'faild',
                'message' => 'There is no record',
                'data' => [],
            ], 404);
        }
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
        $authId = Auth::guard('company')->id();
        if ($request->post_to == "Officer") {
            $quotation = OfficerQuotation::with('company')->find($id);
        } else {
            $quotation = ContractorQuotation::with('company')->find($id);
        }

        if ($quotation) {
            $quotation->update([
                'company_id' => $authId,
                'title' => $request->title,
                'description' => $request->description,
                'area' => $request->area,
                'location' => $request->location,
                'post_code' => $request->post_code,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                // 'days' => $request->days,
                'shift_hour' => $request->shift_hour,
                'rate' => $request->rate,
                'payment_release' => $request->payment_release,
                'type' => $request->type,
                'ni_req' => $request->ni_req,
                'required_license' => $request->required_license,
                'shift' => $request->shift,
                'name' => $request->name,
                'contact' => $request->contact,
                'chat' => $request->chat,
                // 'req_officer' => $request->req_officer,
            ]);

            return response([
                'status' => 'Ok',
                'message' => 'Successfully Updated!',
                'data' => $quotation,
            ], 201);
        } else {
            return response([
                'status' => 'faild',
                'message' => 'something went wrong',
                'data' => [],
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->post_to == "Officer") {
            $quotation = OfficerQuotation::destroy($request->id);
        } else {
            $quotation = ContractorQuotation::destroy($request->id);
        }

        if ($quotation) {
            return response([
                'status' => 'Ok',
                'message' => 'Successfully Deleted!',
                'data' => $quotation,
            ], 200);
        } else {
            return response([
                'status' => 'faild',
                'message' => 'something went wrong',
                'data' => [],
            ], 404);
        }
    }

    /* get All quotation for Contractors */
    public function allQuotation(Request $request)
    {
        $authId = Auth::guard('company')->id();
        $quotations = ContractorQuotation::with('company')->where([['company_id', '!=', $authId], ['status', 'Open']])->get();

        $arr = [];
        foreach ($quotations as $quotation) {
            if (ContractorJob::where([['contractor_id', $authId], ['contractor_quotation_id', $quotation->id]])->doesntExist()) {
                if ($quotation->quote_type == 'Sub-Contractor' && ContractorJob::where('contractor_quotation_id', $quotation->id)->exists()) {
                } else {
                    array_push($arr, $quotation);
                }
            }
        }

        $quotation = Paginate::paginate($arr, $request->page);

        if (count($quotation) > 0) {
            return response([
                'status' => 'Ok',
                'data' => $quotation,
            ], 200);
        } else {
            return response([
                'status' => 'Ok',
                'message' => 'There is no record',
                'data' => [],
            ], 200);
        }
    }

    /* get All filtered quotations for Officer */
    public function allQuotationSearch(Request $request)
    {
        $authId = Auth::guard('company')->id();
        $filters = $request->only(['shift', 'type', 'ni_req']);
        $betweenFilters = [
            'rate' => [
                'start' => $request->rate_start,
                'end' => $request->rate_end,
            ],
        ];
        $quotations = ContractorQuotation::with('company')->where([['title', 'like', '%' . $request->title . '%'], ['company_id', '!=', $authId], ['status', 'Open']])->where($filters)->when($betweenFilters, function ($query) use ($betweenFilters) {
            foreach ($betweenFilters as $column => $range) {
                if (isset($range['start']) && isset($range['end'])) {
                    $query->whereBetween($column, [$range['start'], $range['end']]);
                }
            }
        })->orderBy('id', 'desc')->get();

        /** check that contractor already applied and hired or not */
        $arr = [];
        foreach ($quotations as $quotation) {
            if (ContractorJob::where([['contractor_id', $authId], ['contractor_quotation_id', $quotation->id]])->doesntExist()) {
                if ($quotation->quote_type == 'Sub-Contractor' && ContractorJob::where('contractor_quotation_id', $quotation->id)->exists()) {
                } else {
                    array_push($arr, $quotation);
                }
            }
        }

        $quotation = Paginate::paginate($arr, $request->page);

        if (count($quotation) > 0) {
            return response([
                'status' => 'Ok',
                'total' => count($quotation),
                'data' => $quotation,
            ], 200);
        } else {
            return response([
                'status' => 'Ok',
                'message' => 'There is no record',
                'data' => [],
            ], 200);
        }
    }

    /** A single quotation detail with favorite and apply detail*/
    // public function quotationDetail(Request $request)
    // {
    //     $authId = Auth::guard('company')->id();
    //     if ($request->post_to == 'Contractor') {
    //         $quotation = ContractorQuotation::with('company')->find($request->id);

    //         $apply = ContractorApply::where([['contractor_id', $authId], ['quotation_id', $request->id]])->first();
    //         $favorite = ContractorJobWishList::where([['contractor_id', $authId], ['quotation_id', $request->id]])->first();
    //         isset($apply) ? $apply = "Yes" : $apply = "No";
    //         isset($favorite) ? $favorite = "Yes" : $favorite = "No";
    //         /**check that job has been reposted or not */
    //         ContractorQuotation::where([['main_job_id', $quotation->main_job_id], ['company_id', $authId]])->doesntExist() && OfficerQuotation::where([['contractor_quotation_id', $quotation->main_job_id], ['company_id', $authId]])->doesntExist() ? $posted = 'No' : $posted = 'Yes';
    //         ContractorJob::where('contractor_quotation_id', $quotation->id)->first() ? $ContractorHired = 'Yes' : $ContractorHired = 'No';

    //         if($ContractorHired = 'Yes'){
    //             $quotationIds = OfficerQuotation::where('contractor_quotation_id', $quotation->main_job_id)->pluck('id');
    //             $totalHiredOfficer = OfficerJobs::whereIn('officer_quotation_id', $quotationIds)->count();
    //         }else{
    //             $totalHiredOfficer = 0;
    //         }

    //         $data = array('applied' => $apply, 'favorite' => $favorite, 'ContractorHired' => $ContractorHired, 'totalHiredOfficer'=> $totalHiredOfficer, 'reposted' => $posted, 'quotation' => $quotation);
    //     } else {

    //         $quotation = OfficerQuotation::with('company')->find($request->id);
    //         /**count hired officer */
    //         $quotationIds = OfficerQuotation::where('contractor_quotation_id', $quotation->contractor_quotation_id)->pluck('id');
    //         $totalHiredOfficer = OfficerJobs::whereIn('officer_quotation_id', $quotationIds)->count();

    //         $data = array('applied' => null, 'favorite' => null, 'ContractorHired' => null, 'totalHiredOfficer'=> $totalHiredOfficer, 'reposted' => null, 'quotation' => $quotation);
    //     }

    //     return response([
    //         'status' => 'Ok',
    //         'data' => $data,
    //     ], 200);

    // }

    public function quotationDetail(Request $request)
    {
        $authId = Auth::guard('company')->id();
        if ($request->post_to == 'Contractor') {
            $quotation = ContractorQuotation::with('company')->find($request->id);

            $apply = ContractorApply::where([['contractor_id', $authId], ['quotation_id', $request->id]])->first();
            $favorite = ContractorJobWishList::where([['contractor_id', $authId], ['quotation_id', $request->id]])->first();
            isset($apply) ? $apply = "Yes" : $apply = "No";
            isset($favorite) ? $favorite = "Yes" : $favorite = "No";
            /**check that job has been reposted or not */
            ContractorQuotation::where([['main_job_id', $quotation->main_job_id], ['company_id', $authId]])->doesntExist() && OfficerQuotation::where([['contractor_quotation_id', $quotation->main_job_id], ['company_id', $authId]])->doesntExist() ? $posted = 'No' : $posted = 'Yes';
            ContractorJob::where('contractor_quotation_id', $quotation->id)->first() ? $ContractorHired = 'Yes' : $ContractorHired = 'No';

            if ($ContractorHired = 'Yes') {
                $quotationIds = OfficerQuotation::where('contractor_quotation_id', $quotation->main_job_id)->pluck('id');
                $totalHiredOfficer = OfficerJobs::whereIn('officer_quotation_id', $quotationIds)->count();
            } else {
                $totalHiredOfficer = 0;
            }

            $data = array('applied' => $apply, 'favorite' => $favorite, 'ContractorHired' => $ContractorHired, 'totalHiredOfficer' => $totalHiredOfficer, 'reposted' => $posted, 'quotation' => $quotation);
        } else {

            $quotation = OfficerQuotation::with('company')->find($request->id);
            /**count hired officer */
            // $quotationIds = OfficerQuotation::where('contractor_quotation_id', $quotation->contractor_quotation_id)->pluck('id');
            $totalHiredOfficer = OfficerJobs::where('officer_quotation_id', $request->id)->count();

            $data = array('applied' => null, 'favorite' => null, 'ContractorHired' => null, 'totalHiredOfficer' => $totalHiredOfficer, 'reposted' => null, 'quotation' => $quotation);
        }

        return response([
            'status' => 'Ok',
            'data' => $data,
        ], 200);
    }

    /** Contractor apply on jobs */
    public function apply($id)
    {
        $authId = Auth::guard('company')->id();
        if (ContractorApply::where([['contractor_id', $authId], ['quotation_id', $id]])->doesntExist()) {
            ContractorApply::create([
                'contractor_id' => $authId,
                'quotation_id' => $id,
            ]);

            /**Notification to Company */
            $quotation = ContractorQuotation::find($id);
            $company_id = $quotation->company_id;
            $contractor_id = $authId;
            $officer_id = null;
            $officer_job_id = null;
            $contractor_job_id = $quotation->id;
            $title = "Application";
            $body = Auth::guard('company')->user()->first_name . " Apply on your posted job";
            $receiver = "Company";
            $type = "Contractor Application";
            $attendance_id = Null;
            Helper::notification($company_id, $contractor_id, $officer_id, $contractor_job_id, $officer_job_id, $title, $body, $receiver, $type,$attendance_id);

            return response()->json(['status' => 'Ok', 'message' => 'Successfully Applied'], 200);
        } else {
            ContractorApply::where([['contractor_id', $authId], ['quotation_id', $id]])->delete();
            return response()->json(['status' => 'Ok', 'message' => 'Your Application Request has been Cancelled'], 200);
        }
    }

    /**get All Contractor Applicant as a Company that apply on single job */
    public function contractorApplicant($id)
    {
        $data['quotation'] = ContractorQuotation::with('company', 'applicant')->find($id);

        foreach ($data['quotation']->applicant as $quote) {
            unset($quote->pivot);
        }

        return response()->json(['status' => 'Ok', 'data' => $data], 200);
    }

    /**get All Officer Applicant as a Company that apply on single job */
    public function officerApplicant($id)
    {
        $data['quotation'] = OfficerQuotation::with('company', 'applicant.document')->find($id);

        foreach ($data['quotation']->applicant as $quote) {
            unset($quote->pivot);
        }

        return response()->json(['status' => 'Ok', 'data' => $data], 200);
    }

    /**get All pending Applicantion where apply as a contractor*/
    public function appliedQuotation()
    {
        $authId = Auth::guard('company')->id();
        $quoteIds = ContractorApply::where([['contractor_id', $authId], ['status', 'Pending']])->pluck('quotation_id');
        if (count($quoteIds) > 0) {
            $jobs = ContractorQuotation::with('company')->whereIn('id', $quoteIds)->get();

            foreach ($jobs as $job) {
                $data = ContractorApply::where([['contractor_id', $authId], ['quotation_id', $job->id]])->first();
                $job->setAttribute('status', $data->status);
            }
            return response()->json(['status' => 'OK', 'jobs' => $jobs], 200);
        } else {
            return response()->json(['status' => 'OK', 'jobs' => [], 'message' => 'There is no record'], 200);
        }
    }
    /**get All rejected Applicantion where apply as a contractor*/
    public function rejectedApplication()
    {
        $authId = Auth::guard('company')->id();
        $quoteIds = ContractorApply::where([['contractor_id', $authId], ['status', 'Declined']])->pluck('quotation_id');
        if (count($quoteIds) > 0) {
            $jobs = ContractorQuotation::with('company')->whereIn('id', $quoteIds)->get();

            foreach ($jobs as $job) {
                $data = ContractorApply::where([['contractor_id', $authId], ['quotation_id', $job->id]])->first();
                $job->setAttribute('status', $data->status);
            }
            return response()->json(['status' => 'OK', 'jobs' => $jobs], 200);
        } else {
            return response()->json(['status' => 'OK', 'jobs' => [], 'message' => 'There is no record'], 200);
        }
    }
    public function payment_reminder($id)
    {
        $authId = Auth::guard('company')->id();
        $ContractorJob = ContractorJob::where([['contractor_id', $authId], ['contractor_quotation_id', $id]])->first();
        if (!$ContractorJob) {
            return response()->json([
                'status' => 'Not Found',
                'message' => 'Contractor job not found for the given ID.',
            ], 404);
        }
        if ($ContractorJob->payment_reminder == '1') {
            return response()->json([
                'status' => 'OK',
                'message' => "Already sent. You can send it Tomorrow",
            ], 400);
        } else {
            /**Notification to Company */
            $ContractorJob->payment_reminder = '1';
            $ContractorJob->save();
            $quotation = ContractorQuotation::find($id);
            // return $quotation;
            $company_id = $quotation->company_id;
            $contractor_id = $authId;
            $officer_id = null;
            $officer_job_id = null;
            $contractor_job_id = $id;
            $title = "Payment Reminder";
            $body = 'You have a pending payment of the company "' . Auth::guard('company')->user()->first_name . '" for the job "' . $quotation->title . '"';
            $receiver = "Company";
            $type = "Payment Reminder";
            $attendance_id = Null;
            Helper::notification($company_id, $contractor_id, $officer_id, $contractor_job_id, $officer_job_id, $title, $body, $receiver, $type,$attendance_id);
            return response()->json([
                'status' => 'OK',
                'message' => "Successfully your payment reminder has been sent to the company",
            ], 200);
        }
    }
}
