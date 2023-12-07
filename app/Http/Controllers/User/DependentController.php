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

    public function create()
    {
        return view('user.dependents.create');
    }

    public function store(Request $request,$id)
    {
        // return "running".$id;
        $validator = Validator::make($request->all(), [
            'dependent_type'=>'required',
            'request_type'=>'required',
            'file'=>'required',
        ]);
        // return $request;
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
                $dependent_type = $request->input('dependent_type');
                $request_type = $request->input('request_type');
                $files = $request->file('file');
                $file_issue = $request->input('issue_date');
                $file_expiry = $request->input('expiry_date');
                $user_id = $id;
                 for ($i = 0; $i < count($dependent_type); $i++) {
                $dependent = new IndividualDependent;
                $dependent->dependent_type = $dependent_type[$i];
                $dependent->request_type = $request_type[$i];
                $dependent->issue_date = $file_issue[$i];
                $dependent->expiry_date = $file_expiry[$i];
                $dependent->user_id = $user_id;
                if ($request->hasFile('file.' . $i)) {
                    $extension = $files[$i]->getClientOriginalExtension();
                    $file_name = time() . $i . '.' . $extension;
                    $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                    $dependent->file = 'public/admin/assets/img/users/' . $file_name;
                }
                $dependent->save();
                // return $dependent;

            }

            // return $dependent;
            return redirect()->route('user.get-dependent')->with('success','Dependent added successfully.');
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
        return redirect()->route('user.get-dependent')->with('success','Dependent deleted successfully.');

    }


}
