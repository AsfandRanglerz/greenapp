<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UserLoginPassword;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SelfUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereempType('self')->orderBy('id', 'desc')->get();
        return view('admin.self-user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.self-user.add', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        $data = $request->only(['name', 'email', 'phone', 'dob', 'nationality', 'religion', 'gender', 'father_name', 'mother_name', 'passport_number', 'unified_number', 'emirate_id_number', 'work_permit_number', 'person_code']);

        $password = random_int(10000000, 99999999);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('public/admin/assets/img/users', $filename);
            $data['image'] = 'public/admin/assets/img/users/' . $filename;
        } else {
            $data['image'] = 'public/admin/assets/img/users/1675332882.jpg';
        }

        $data['password'] = Hash::make($password);
        $data['emp_type'] = 'self';
        User::create($data);

        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['password'] = $password;

        try {
            // Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('selfemployee.index')->with('success', 'Created Successfully');
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
        $data = User::find($id);
        $data['countries'] = Country::all();
        return view('admin.self-user.edit', compact(['data']));
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
            'gender' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->nationality = $request->input('nationality');
        $user->religion = $request->input('religion');
        $user->father_name = $request->input('father_name');
        $user->mother_name = $request->input('mother_name');
        $user->passport_number = $request->input('passport_number');
        $user->unified_number = $request->input('unified_number');
        $user->emirate_id_number = $request->input('emirate_id_number');
        $user->work_permit_number = $request->input('work_permit_number');
        $user->person_code = $request->input('person_code');

        if ($request->hasfile('image')) {
            $destination = 'public/admin/assets/img/users' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $user->image = 'public/admin/assets/img/users/' . $filename;
        }
        $user->update();
        return redirect()->route('selfemployee.index')->with('success', 'Updated Successfully');
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
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}