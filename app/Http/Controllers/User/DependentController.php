<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\IndividualDependent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class DependentController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('web')->id();
        $dependents = IndividualDependent::where('user_id',$user_id)->orderBy('id','DESC')->get();
        // return $dependents;
        return view('user.dependents.index',compact('dependents'));
    }
    public function show_visa_process()
    {
        return view('user.dependents.visaprocess.index');
    }
    public function create()
    {
        return view('user.dependents.create');
    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'dependent_type' => 'required',
            'name' => 'required',
            // 'doc_type' => 'required',
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dependent_type = $request->input('dependent_type');
        $names = $request->input('name');
        $doc_type = $request->input('doc_type');
        $doc_name = $request->input('doc_name');
        $issue_date = $request->input('issue_date');
        $expiry_date = $request->input('expiry_date');
        $files = $request->file('file');
        $user_id = $id;

        for ($i = 0; $i < count($dependent_type); $i++) {
            $dependent = new IndividualDependent;
            $dependent->dependent_type = $dependent_type[$i];
            $dependent->name = $names[$i];
            $dependent->user_id = $user_id;
            $dependent->doc_type = $doc_type[$i];
            $dependent->doc_name = $doc_name[$i];
            $dependent->issue_date = $issue_date[$i];
            $dependent->expiry_date = $expiry_date[$i];
            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $dependent->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $dependent->save();
        }

        return redirect()->route('user.get-dependent')->with('success', 'Dependents added successfully.');
    }


    public function edit($id)
    {
        $dependent = IndividualDependent::find($id);
        // return $dependent;
        return view('user.dependents.edit',compact('dependent'));
    }

    public function update()
    {
        return view('user.dependents.create');
    }



    public function delete($id)
    {
        // return "running";
        IndividualDependent::destroy($id);
        return redirect()->route('user.get-dependent')->with('success','Dependent Deleted Successfully');

    }


}
