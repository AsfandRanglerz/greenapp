<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserLoginPassword;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('usercompany')->orderBy('id', 'DESC')->get();
        //dd($data);
        return view('admin.user.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$data['company_id'] = $id;
        $data = Company::select('id', 'name')->get();
        return view('admin.user.add', compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('ali');
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required',
            'dob' => 'required',
            'nationality'=>'required',
            'religion'=>'required',
            'company_id'=>'required'
            // 'password'=>'required|confirmed',
            // 'password_confirmation'=>'required'
        ]);
        $password = random_int(10000000, 99999999);
        $data = $request->only(['name', 'email','phone','dob','nationality','religion','company_id']);
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
           $file->move('public/admin/assets/img/users',$filename);
           $data['image'] = $filename;
         }
        $data['password'] = Hash::make($password);
        // dd($message);
        $user = User::create($data);
        $message['email'] = $request->email;
        $message['password']=$password;

        try {
            Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('user.index')->with(['status' => true, 'message' => 'Created Successfully']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()
                ->with(['status' => false, 'message' => $th->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($data['company']);
        $data = User::with('usercompany')->find($id);
        $data['usercompany'] = Company::select('id', 'name')->get();
       // $data['company_id'] = $id;
        // dd($data);
        return view('admin.user.edit', compact(['data']));
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
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'nationality'=>'required',
            'religion'=>'required',

        ]);
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('dob');
        $user->nationality = $request->input('nationality');
        $user->religion = $request->input('religion');
        $user->company_id = $request->input('company_id');
        //dd($user);
        if($request->hasfile('image')){
            $destination='public/admin/assets/img/users'.$user->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $file = $request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('public/admin/assets/img/users',$filename);
        $user->image=$filename;
        }
        $user->update();
        return redirect()->route('user.index')->with(['status' => true, 'message' => 'Updated Successfully']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with(['status' => true, 'message' => 'Deleted Successfully']);
    }
}
