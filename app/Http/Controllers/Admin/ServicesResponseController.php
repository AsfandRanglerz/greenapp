<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ServicesRequest;
use App\Models\IndividualService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;


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
            return redirect()->route('get-services-requests')->with('success','Response send to individual successfully.');
        }
        else if($request->response == 'Completed')
        {
            // return $request;
            $file = NULL;
            if ($request->hasFile('file')) {
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $path = $files->move('public/admin/assets/img/users', $file_name);
            $file = 'public/admin/assets/img/users/' . $file_name;
            // return 'ok';
            }
            // return "not ok";
            $response_req->update([
                'response'=>$request->response,
                'status'=>$request->response,
                'admin_file'=>$file,
            ]);
            $user_id = IndividualService::with('user')->where('id',$id)->value('user_id');
            $user_email = User::where('id',$user_id)->value('email');
            // return $user_email;
            Mail::to($user_email)->send(new ServicesRequest);
            return redirect()->route('get-services-requests')->with('success','Response send to individual successfully.');
        }
        else
        {
            $file = NULL;
            if ($request->hasFile('file')) {
                $files = $request->file('file');
                $extension = $files->getClientOriginalExtension();
                $file_name = time() . '.' . $extension;
                $path = $files->move('public/admin/assets/img/users', $file_name);
                $file = 'public/admin/assets/img/users/' . $file_name;
                // return 'ok';
            }
            // return "not ok";

            $response_req->update([
                'response'=>$request->response,
                'status'=>$request->response,
                'admin_file'=>$file,
                'reason'=>$request->reason,
            ]);
            return redirect()->route('get-services-requests')->with('success','Response send to individual successfully.');

        }
    }
}
