<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\IndividualService;
use Illuminate\Support\Facades\Validator;

class IndividualServicesController extends Controller
{
    public function services_index()
    {
        $authId = Auth::guard('web')->id();
        $service_request = IndividualService::whereUser_id($authId)->latest()->get();
        $request_count = IndividualService::whereNotNull('response')->where('seen_by_user', '0')->count();
        if ($request_count > 0) {
            IndividualService::whereNotNull('response')->where('seen_by_user', '0')->update([
                'seen_by_user' => 1,
            ]);
        }
        return view('user.services.index',compact('service_request'));
    }

    public function request_for_service()
    {
        return view('user.services.create');
    }

    public function store_request(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            "req_type.*" => "required|string",
            "comment.*" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = NULL;

        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $extension = $files->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $path = $files->move('public/admin/assets/img/users', $file_name);
            $file = 'public/admin/assets/img/users/' . $file_name;
        }
        $user_id = Auth::guard('web')->id();
        $service_request = IndividualService::create([
            'user_id'=>$user_id,
            'req_type'=>$request->req_type,
            'comment'=>$request->comment,
            'file'=>$file,
        ]);
        return redirect()->route('user.get-services.index')->with('success', 'Request Sended Successfully.');

    }

    public function delete_request($id)
    {
         IndividualService::destroy($id);
         return redirect()->route('user.get-services.index')->with('success','Request deleted successfully.');
    }
}
