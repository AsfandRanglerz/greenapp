<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\SubAdminUpdate;
use Illuminate\Http\Request;
use App\Mail\UserLoginPassword;
use App\Http\Controllers\Controller;
use App\Models\Permission_component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;

class SubAdminController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        $sub_admins = User::where('emp_type','subadmin')->orderBy('created_at','desc')->get();
        foreach ($sub_admins as $sub) {
            $permissions_subadmin = Permission_component::where('user_id', $sub->id)->get();
            $sub->permissions = $permissions_subadmin;
        }
        return view('admin.subadmin.index',compact('sub_admins','permissions'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.subadmin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required',
        ]);
        $password = encrypt($request->password);
        $message['name'] =  $request->name;
        $message['email'] =  $request->email;
        $message['password'] =  $request->password;
        $message['user'] =  'subadmin';
        $subAdmin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'emp_type'=>'subadmin',
        ]);
        Mail::to($request->email)->send(new UserLoginPassword($message));
        return redirect()->route('get-sub-admins')->with('success','Sub-Admin created successfully.');
    }

    public function add_permission(Request $request,$id)
    {
         $permissions = $request->input('permission');
         foreach($permissions as $permission_id)
         {
            $add_permissions = Permission_component::create([
                'user_id'=>$id,
                'permission_id'=>$permission_id,
            ]);
         }
         if(!$add_permissions)
         {
            return redirect()->back()->with('error', 'An error occurred while adding permissions.');
         }
         else
         {
            return redirect()->route('get-sub-admins')->with('success','Permissions assign successfully.');
         }

    }

    public function update_permission(Request $request,$id)
    {
        $user = User::where('emp_type','subadmin')->find($id);
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }
        $permissions = $request->input('permission');

          $updatedPermissions=Permission_component::where('user_id',$id)->delete();

          foreach($permissions as $permission_id)
         {
            $add_permissions = Permission_component::create([
                'user_id'=>$id,
                'permission_id'=>$permission_id,
            ]);
         }

        $user->syncPermissions($permissions);

        return redirect()->route('get-sub-admins')->with('success','Permissions updated successfully.');

    }

    public function edit($id)
    {
        $subadmin = User::where('emp_type','subadmin')->find($id);
        return view('admin.subadmin.edit',compact('subadmin'));
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
        ]);
        $user = User::where('emp_type','subadmin')->find($id);
        $password = encrypt($request->password);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);
        $message['name'] =  $request->name;
        $message['email'] =  $request->email;
        $message['password'] =  $request->password;
        $message['user'] =  'subadmin';
        Mail::to($request->email)->send(new SubAdminUpdate($message));
        return redirect()->route('get-sub-admins')->with('success','Sub-Admin updated successfully.');
    }

    public function delete($id)
    {
        $user = User::where('emp_type','subadmin')->first();
        if(!$user)
        {
            return redirect()->route('get-sub-admins')->with('success','Admin not found.');
        }
        else{
            User::destroy($id);
            return redirect()->route('get-sub-admins')->with('success','Admin deleted successfully.');
        }

    }
}
