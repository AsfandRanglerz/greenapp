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
        $service_request = IndividualService::whereUser_id($authId)->orderBy('updated_at', 'DESC')->orderBy('created_at', 'DESC')->get();;
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

    public function edit_request($id){

        $request_get = IndividualService::find($id);
        // return $request_get;
        return view('user.services.edit',compact('request_get'));

    }

    public function request_update(Request $request ,$id)
    {
        $validator = Validator::make($request->all(), [
            "file.*" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $service_request = IndividualService::find($id);

        $file = NULL;
        if ($request->hasfile('file')) {
            $destination = 'public/admin/assets/img/users' . $service_request->file;
            // return $destination;
            if (File::exists($destination)) {
                // return "ok";
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $file = 'public/admin/assets/img/users/' . $filename;
            // return $file;
        }

        $service_request->update([
            'file'=>$file,
            'seen_by_admin'=>0,
        ]);
        return redirect()->route('user.get-services.index')->with('success', 'Request Updated Successfully.');


    }

    public function delete_request($id)
    {
         IndividualService::destroy($id);
         return redirect()->route('user.get-services.index')->with('success','Request deleted successfully.');
    }
}
