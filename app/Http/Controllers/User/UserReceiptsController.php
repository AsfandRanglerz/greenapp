<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Receipt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class UserReceiptsController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $receipts = Receipt::with('user')->where('user_id',$id)->orderBy('created_at','DESC')->get();
        return view('user.receipts.index',compact('receipts'));
    }

    public function create()
    {
        return view('user.receipts.create');
    }

    public function store(Request $request)
    {
        $rec_type = $request->input('receipt_type');
        $rec_name = $request->input('name');
        $files = $request->file('file');
        for ($i = 0; $i < count($rec_type); $i++) {
            $receipts = new Receipt;
            $receipts->receipt = $rec_type[$i];
            if($rec_name)
            {
                $receipts->name = $rec_name[$i];
            }
            $receipts->user_id = Auth::guard('web')->id();

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $receipts->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $receipts->save();
        }
        return redirect()->route('user.get-receipts')->with('success', 'Receipt created Successfully');
    }

    public function edit($id)
    {
        $receipts = Receipt::find($id);
        return view('user.receipts.edit',compact('receipts'));
    }

    public function update(Request $request , $id)
    {
        // return "running";
        // $validator = Validator::make($request->all(), [
        //     "file.*" => "required",
        //     "receipt.*" => "required",
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        $receipts = Receipt::find($id);
        // $receipts->receipt = $request->input('receipt');
        $file = NULL;
        if ($request->hasfile('file')) {
            $destination = 'public/admin/assets/img/users' . $receipts->file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $file = 'public/admin/assets/img/users/' . $filename;
            // return $file;
        }
        else
        {
            $file =  $receipts->file;
            // return $file;
        }
        if($request->receipt == "other")
        {
            $receipts->update([
                'file'=>$file,
                'receipt'=>$request->receipt,
                'name'=>$request->name,
            ]);
        }
        else
        {
            $receipts->update([
                'file'=>$file,
                'receipt'=>$request->receipt,
                'name'=>NULL,
            ]);
        }
        return redirect()->route('user.get-receipts')->with('success', 'Receipt Updated Successfully');
    }


    public function delete($id)
    {
        // return "running";
        Receipt::destroy($id);
        return redirect()->route('user.get-receipts')->with('success', 'Receipt deleted Successfully');

    }



}
