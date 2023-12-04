<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndividualService;

class ServicesResponseController extends Controller
{
    public function get_services_requests()
    {
        $service_requests = IndividualService::with('user')->orderBy('created_at', 'DESC')->get();
        // return $service_requests;
        $request_count = IndividualService::where('seen_by_admin','0')->count();
        if($request_count > 0)
        {
            IndividualService::where('seen_by_admin','0')->update([
                'seen_by_admin'=>1,
            ]);
        }
        return view('admin.services.index',compact('service_requests'));
    }
    public function response_to_request(Request $request, $id)
    {
        // return $request;
        $response_req = IndividualService::find($id);

        if($request->response == 'Request For Document Upload')
        {
            $response_req->update([
                'response'=>$request->response,
            ]);
            return redirect()->route('get-services-requests')->with('status','Response send to individual successfully.');
        }
        else
        {
            $response_req->update([
                'response'=>$request->response,
                'status'=>$request->response,
            ]);
            return redirect()->back()->with('status','Response send to individual successfully.');

        }
    }
}
