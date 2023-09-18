<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\UserLoginPassword;
use App\Mail\CompanyEmailUpdated;
use App\Models\Company;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\storage;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('usercompany')->whereempType('company')->orderBy('id', 'desc')->get();
        return view('admin.user.index', compact('users'));
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
        $countries = Country::all();
        return view('admin.user.add', compact('data', 'countries'));
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
            'nationality' => 'required',
            'religion' => 'required',
            'company_id' => 'required',
        ],
        [
            'company_id.required' => 'The company field is required.',
        ]);
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
        ],[
            'email.unique' => ' email has already been taken as Company'
        ]);
        $data = $request->only(['name', 'email', 'phone', 'dob', 'nationality', 'religion', 'company_id']);

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
        // dd($message);
        $user = User::create($data);

        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['password'] = $password;

        try {
            Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('user.index')->with('success', 'Created Successfully');
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
        $data = User::with('usercompany')->find($id);
        $data['usercompany'] = Company::select('id', 'name')->get();
        $data['countries'] = Country::all();
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
            'nationality' => 'required',
            'religion' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
                Rule::unique('companies')->ignore($id),
            ],
        ]);
        $user = User::find($id);
        if ($request->hasfile('image')) {
            $destination = 'public/admin/assets/img/users' . $user->image;
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
            'dob' => $request->input('dob'),
            'nationality' => $request->input('nationality'),
            'religion' => $request->input('religion'),
            'company_id' => $request->input('company_id'),
            'image' => $image,
        ];
        if ($request->email !== $user->email) {
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
            $updateData['email'] = $user->email;
        }
        $user->update($updateData);
        return redirect()->route('user.index')->with('success', 'Updated Successfully');
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
