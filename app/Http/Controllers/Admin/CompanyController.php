<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Faker\Provider\ar_EG\Company;
use App\Mail\CompanyEmailUpdated;
use App\Mail\UserLoginPassword;
use App\Mail\CompanyDelete;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\storage;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::with('documents')->orderBy('id', 'DESC')->get();
        return view('admin.company.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.add');
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
            'email' => 'required|unique:companies,email|email',
            'phone' => 'required',

            // 'password'=>'required|confirmed',
            // 'password_confirmation'=>'required'
        ]);
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ], [
            'email.unique' => ' email has already been taken as Employee',
        ]);
        $data = $request->only(['name', 'email', 'phone', 'establishment_no', 'license_no', 'mohre_no']);
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
        $data['password'] = hash::make($password);

        $user = Company::create($data);
        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['password'] = $password;

        try {
            Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('company.index')->with('success', 'Created Successfully');
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
        //dd('usman');
        // $users['company_id'] = $id;
        $users = User::where('company_id', $id)->orderby('id', 'DESC')->get();
        $company = 'company';
        return view('admin.user.index', compact('users', 'company'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
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
            'email' => [
                'required',
                'email',
                Rule::unique('companies')->ignore($id),
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $company = Company::find($id);
        if ($request->hasfile('image')) {
            $destination = 'public/admin/assets/img/users/' . $company->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $image = 'public/admin/assets/img/users/' . $filename;
        } else {
            $image = 'public/admin/assets/img/users/1675332882.jpg';
        }

        $updateData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'establishment_no' => $request->input('establishment_no'),
            'license_no' => $request->input('license_no'),
            'mohre_no' => $request->input('mohre_no'),
            'image' => $image,
        ];

        if ($request->email !== $company->email) {
            // Generate a new password
            $password = random_int(10000000, 99999999);
            $updateData['password'] = Hash::make($password);
            $message['email'] = $request->email;
            $message['name'] = $request->name;
            $message['password'] = $password;

            try {
                Mail::to($request->email)->send(new CompanyEmailUpdated($message));
            } catch (\Throwable $th) {
                return back()->with(['status' => false, 'message' => $th->getMessage()]);
            }
        } else {
            $updateData['email'] = $company->email;
        }

        $company->update($updateData);

        return redirect()->route('company.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $company = Company::find($id);
    $company->admin_delete = '1';
    $company->save();

    $message['name'] = $company->name;
    $message['email'] = $company->email;

    try {
        Mail::to($company->email)->send(new CompanyDelete($message));
        return redirect()->back()->with('success', 'Deletion request sent to the company successfully');
    } catch (\Throwable $th) {
        return back()->with(['status' => false, 'message' => $th->getMessage()]);
    }
}

}
