<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['user'] = User::find($id);
        $data['documents'] = UserDocument::where('user_id', $id)->orderby('id', 'DESC')->get();
        return view('admin.user.document.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::find($id);
        return view('admin.user.document.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
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
            if(isset($receipt[$i]))
            {
                $document->receipt = $receipt[$i];
            }
            $document->issue_date = $issue_date[$i];
            $document->expiry_date = $expiry_date[$i];
            if (isset($comment[$i])) {
                $document->comment = $comment[$i];
            }
            $document->user_id = $id;

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            // dd($document);
            $document->save();
        }
        return redirect()->route('user-document.index', $id)->with('success', 'Added Successfully');
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
        $document = UserDocument::find($id);
        return view('admin.user.document.edit', compact(['document']));
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
            'doc_type' => 'required',
        ]);

        $document = UserDocument::find($id);
        $document->doc_type = $request->input('doc_type');
        if (isset($request->comment)) {
            $document->comment = $request->input('comment');
        }
        if ($request->doc_type == "Other") {
            $document->issue_date = null;
            $document->expiry_date = null;
            $document->receipt = null;
            $document->doc_name = $request->input('doc_name');
        }
        elseif($request->doc_type =="Receipts"){
            $document->issue_date = null;
            $document->expiry_date = null;
            $document->doc_name = null;
            $document->receipt = $request->input('receipt');
        }else {
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
        return redirect()->route('user-document.index', $document->user_id)->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserDocument::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
