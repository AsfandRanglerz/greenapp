<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
// use App\Mail\UserLoginPassword;
use App\Mail\CompanyLoginPassword;
use App\Mail\EmployeeEmailUpdated;
use App\Models\Country;
use App\Models\User;
use App\Models\Company;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

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

        return view('company.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('company.employee.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'phone' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
        ],[
            'email.unique' => ' email has already been taken as Company'
        ]);

        $password = random_int(10000000, 99999999);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('admin/assets/img/users/'), $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        }else{
            $image = 'public/admin/assets/img/users/1675332882.jpg';
        }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($password),
            'dob' => $request->dob,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'passport_number' => $request->passport_number,
            'unified_number' => $request->unified_number,
            'emirate_id_number' => $request->emirate_id_number,
            'work_permit_number' => $request->work_permit_number,
            'person_code' => $request->person_code,
            'position' => $request->position,
            'pob' => $request->pob,
            'join_date' => $request->join_date,
            'marital_status' => $request->marital_status,
            'residence_no' => $request->residence_no,
            'insurance_no' => $request->insurance_no,
            'salary_detail' => $request->salary_detail,
            'salary' => $request->salary,
            'company_id' => Auth::guard('company')->id(),
            'image' => $image,
            'emp_type' =>'company',

        ]);
        $company = Company::find(Auth::guard('company')->id());

        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['company_name'] = $company->name;
        $message['password'] = $password;

        try {
            Mail::to($request->email)->send(new CompanyLoginPassword($message));
            return redirect()->route('company.employee.index')
                ->with('success', 'Created Successfully');
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
        return view('company.employee-document.index', compact('user', 'documents', 'empId'));
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
        return view('company.employee.edit', compact(['data']));
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
    // return $request;
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'dob' => 'required',
        'nationality' => 'required',
        'religion' => 'required',
        'email' => [
            'required',
            'email',
            Rule::unique('users')->ignore($id),
            Rule::unique('companies')->ignore($id),
        ],
    ]);

    $employee = User::find($id);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('admin/assets/img/users/'), $filename);
        $image = 'public/admin/assets/img/users/' . $filename;
    } else {
        $image = $employee->image;
    }

    $updateData = [
        'name' => $request->name,
        'phone' => $request->phone,
        'dob' => $request->dob,
        'nationality' => $request->nationality,
        'religion' => $request->religion,
        'gender' => $request->gender,
        'father_name' => $request->father_name,
        'mother_name' => $request->mother_name,
        'passport_number' => $request->passport_number,
        'unified_number' => $request->unified_number,
        'emirate_id_number' => $request->emirate_id_number,
        'work_permit_number' => $request->work_permit_number,
        'person_code' => $request->person_code,
        'position' => $request->position,
        'pob' => $request->pob,
        'join_date' => $request->join_date,
        'marital_status' => $request->marital_status,
        'residence_no' => $request->residence_no,
        'insurance_no' => $request->insurance_no,
        'salary_detail' => $request->salary_detail,
        'salary' => $request->salary,
        'company_id' => Auth::guard('company')->id(),
        // 'company_name' => Auth::guard('company')->name(),
        'image' => $image,
    ];

    $company = Company::find(Auth::guard('company')->id());

    // Check if the email address has changed
    if ($request->email !== $employee->email) {
        // Generate a new password
        $password = random_int(10000000, 99999999);
        $updateData['password'] = Hash::make($password);
        $updateData['email'] = $request->email;

        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['company_name'] = $company->name;
        $message['password'] = $password;

        try {
            Mail::to($request->email)->send(new EmployeeEmailUpdated($message));
        } catch (\Throwable $th) {
            return back()->with(['status' => false, 'error' => $th->getMessage()]);
        }
    } else {
        $updateData['email'] = $employee->email;
    }

    $employee->update($updateData);

    return redirect()->route('company.employee.index')->with('success', 'Updated Successfully');
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
        return redirect()->route('company.employee.index')->with('success', 'Deleted Successfully');
    }

    public function view(Request $request){
        $data = User::find($request->id);
        $employees = view('company.employee.modal', compact('data'))->render();
        return response()->json($employees);
    }
}
