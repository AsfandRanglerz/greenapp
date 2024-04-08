<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Http\Requests\Document;
use App\Models\IndividualDependent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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

    public function document_index($id)
    {
        $documents = UserDocument::where('dependent_id',$id)->orderBy('created_at','DESC')->get();
        return view('user.dependents.documents.index',compact('documents','id'));
    }
    public function document_create(Request $request , $id)
    {
        return view('user.dependents.documents.create',compact('id'));
    }
    public function document_store(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            "doc_type.*" => "required|string",
            "file.*" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $doc_type = $request->input('doc_type');
        $doc_name = $request->input('doc_name');
        $receipt = $request->input('receipt');
        $issue_date = $request->input('issue_date');
        $expiry_date = $request->input('expiry_date');
        $comment = $request->input('comment');
        $files = $request->file('file');
        for ($i = 0; $i < count($doc_type); $i++) {
            $document = new UserDocument;
            $document->doc_type = $doc_type[$i];
            $document->doc_name = $doc_name[$i];
            if (isset($receipt[$i])) {
                $document->receipt = $receipt[$i];
            }
            $document->issue_date = $issue_date[$i];
            $document->expiry_date = $expiry_date[$i];
            // if (Auth::guard('web')->user()->emp_type == 'company') {
            //     $document->comment = $comment[$i];
            // }
            $document->dependent_id = $id;

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $document->save();
        }
        return redirect()->route('user.dependent-document-index',$id)->with('success', 'Created Successfully');
        // return view('user.dependents.documents.create',compact('id'));
    }
    public function document_edit($id)
    {
        $document = UserDocument::find($id);
        return view('user.dependents.documents.edit', compact('document'));
    }
    public function document_delete($id)
    {
        UserDocument::destroy($id);
        return redirect()->back()->with('success', 'Document Deleted Successfully');
    }
    public function document_dependent_update(Request $request , $id)
    {
        // return "ok";
        $request->validate([
            'doc_type' => 'required',
        ]);

        $document = UserDocument::find($id);
        $document->doc_type = $request->input('doc_type');
        if ($request->doc_type == "Other") {
            $document->issue_date = null;
            $document->expiry_date = null;
            $document->receipt = null;
            $document->doc_name = $request->input('doc_name');
        } elseif ($request->doc_type == "Receipts") {
            $document->issue_date = null;
            $document->expiry_date = null;
            $document->doc_name = null;
            $document->receipt = $request->input('receipt');
        } else {
            $document->issue_date = $request->input('issue_date');
            $document->expiry_date = $request->input('expiry_date');
            $document->doc_name = null;
        }

        if ($request->hasfile('file')) {
            $destination = 'public/admin/assets/img/users' . $document->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $document->file = 'public/admin/assets/img/users/' . $filename;
        }

        $document->update();
        // return $id;
        return redirect()->route('user.dependent-document-index',$document->dependent_id)->with('success', 'Document Updated Successfully');

    }
    public function document_dependent_download($id)
    {
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }


}
