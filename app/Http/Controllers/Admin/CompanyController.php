<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyDocument;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserLoginPassword;



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
        //dd($data);
        return view('admin.company.index',compact(['data']));
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
            'establishment_no'=>'required',
            'license_no' => 'required',
            'mohre_no' => 'required',
            // 'password'=>'required|confirmed',
            // 'password_confirmation'=>'required'
        ]);
        $data = $request->only(['name', 'email', 'phone','establishment_no','license_no','mohre_no']);
        $password = random_int(10000000, 99999999);
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
           $file->move('public/admin/assets/img/users',$filename);
           $data['image'] = 'public/admin/assets/img/users/' . $filename;
         }
         else{
            $data['image'] = 'public/admin/assets/img/users/1675332882.jpg';
         }
        $data['password'] = hash::make($password);

        $user = Company::create($data);
        $message['email'] = $request->email;
        $message['password']=$password;

        try {
            Mail::to($request->email)->send(new UserLoginPassword($message));
            return redirect()->route('company.index')->with(['status' => true, 'message' => 'Created Successfully']);
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
        {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'establishment_no'=>'required',
                'license_no' => 'required',
                'mohre_no' => 'required',

            ]);
            $company = Company::find($id);
            $company->name = $request->input('name');
            $company->phone = $request->input('phone');
            $company->establishment_no = $request->input('establishment_no');
            $company->license_no = $request->input('license_no');
            $company->mohre_no = $request->input('mohre_no');
            if($request->hasfile('image')){
                $destination='public/admin/assets/img/users'.$company->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('public/admin/assets/img/users',$filename);
            $company->image='public/admin/assets/img/users/' . $filename;
            }
            $company->update();
            return redirect()->route('company.index')->with(['status' => true, 'message' => 'Updated Successfully']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        return redirect()->back()->with(['status' => true, 'message' => 'Deleted Successfully']);
    }
}
