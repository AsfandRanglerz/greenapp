<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('web')->id();
        $documents = UserDocument::whereUser_id($authId)->latest()->get();
        return view('user.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
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
            if (Auth::guard('web')->user()->emp_type == 'company') {
                $document->comment = $comment[$i];
            }
            $document->user_id = Auth::guard('web')->id();

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $document->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $document->save();
        }
        return redirect()->route('user.document.index')->with('success', 'Created Successfully');
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
        return view('user.document.edit', compact('document'));

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
            'doc_type' => 'required',

        ]);

        $document = UserDocument::find($id);
        $document->doc_type = $request->input('doc_type');
        if (Auth::guard('web')->user()->emp_type == 'company') {
            $document->comment = $request->input('comment');
        }
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
        return redirect()->route('user.document.index')->with('success', 'Updated Successfully');

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
        return redirect()->route('user.document.index')->with('success', 'Successfully Deleted');
    }

    public function download($id)
    {
        // return $id;
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }

}
