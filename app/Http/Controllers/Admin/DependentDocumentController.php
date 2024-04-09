<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DependentDocumentController extends Controller
{
    public function index($id)
    {
        $documents = UserDocument::where('dependent_id',$id)->get();
        return view('admin.self-user.dependents.documents.index',compact('documents','id'));
    }
    public function create($id)
    {
        return view('admin.self-user.dependents.documents.add',compact('id'));
    }
    public function store(Request $request , $id)
    {
        // return $request;
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
        //dd($doc_names);
        $files = $request->file('file');
        for ($i = 0; $i < count($doc_type); $i++) {
            $document = new UserDocument;
            $document->doc_type = $doc_type[$i];
            $document->doc_name = $doc_name[$i];
            $document->issue_date = $issue_date[$i];
            $document->expiry_date = $expiry_date[$i];
            $document->dependent_id = $id;
            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            // dd($document);
            $document->save();
        }
        return redirect()->route('dependent-document-section',$id)->with('success','Document Added Successfully');
    }
    public function edit($id)
    {
        $document = UserDocument::find($id);
        return view('admin.self-user.dependents.documents.edit',compact('document'));
    }
    public function update(Request $request , $id)
    {
        // return $request;
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
        }
        else {
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
        return redirect()->route('dependent-document-section',$document->dependent_id)->with('success','Document Updated Successfully');
    }
    public function delete($id)
    {
        UserDocument::destroy($id);
        return back()->with('success','Document Deleted Successfully');
    }
    public function download($id)
    {
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }
}
