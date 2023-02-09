<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Country;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserLoginPassword;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('company')->id();
        $employees = User::whereCompany_id($authId)->latest()->get();

        return view('user.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('user.employee.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required',
            'dob' => 'required',
            'nationality'=>'required',
            'religion'=>'required',
            // 'password'=>'required|confirmed',
            // 'password_confirmation'=>'required'
        ]);
        $image = 'public/admin/assets/img/users/1675332882.jpg';
        // dd($image);
        $password = random_int(10000000, 99999999);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($password),
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'company_id' => Auth::guard('company')->id(),
            'image' => $image,

        ]);
        // dd($user);

        $message['email'] = $request->email;
        $message['password'] = $password;

        try {
            Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('employee.index')
            ->with('success' , 'Created Successfully');
        } catch (\Throwable $th) {
            return back()
                ->with(['status' => false, 'error' => $th->getMessage()]);
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
        $user = User::find($id);
        $documents = UserDocument::whereUser_id($id)->latest()->get();
        $empId = $id;

        //  dd($user);
        return view('user.employee-document.index', compact('user', 'documents', 'empId'));
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
        //$data['usercompany'] = Company::select('id', 'name')->get();
        // $data['company_id'] = $id;
        return view('user.employee.edit', compact(['data']));
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
        $employee = User::find($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        } else {
            $image = $employee->image;
        }

        $employee->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'company_id' => Auth::guard('company')->id(),
        ] + ['image' => $image]);

        return redirect()->route('employee.index')->with('success' , 'Updated Successfully');
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
        return redirect()->route('employee.index')->with('success' , 'Deleted Successfully');
    }
}
