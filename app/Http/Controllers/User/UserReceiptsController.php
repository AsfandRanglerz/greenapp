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

        $receipts = Receipt::with('user')->orderBy('created_at','DESC')->get();
        return view('user.receipts.index',compact('receipts'));
    }

    public function create()
    {
        return view('user.receipts.create');
    }

    public function store(Request $request)
    {
        $rec_type = $request->input('receipt_type');
        $files = $request->file('file');
        for ($i = 0; $i < count($rec_type); $i++) {
            $receipts = new Receipt;
            $receipts->receipt = $rec_type[$i];

            $receipts->user_id = Auth::guard('web')->id();

            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $receipts->file = 'public/admin/assets/img/users/' . $file_name;
            }
            $receipts->save();
        }
        return redirect()->route('user.get-receipts')->with('success', 'Recept created Successfully');
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
            // return $destination;
            if (File::exists($destination)) {
                // return "ok";
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/admin/assets/img/users', $filename);
            $file = 'public/admin/assets/img/users/' . $filename;
            // return $file;
        }

        $receipts->update([
            'file'=>$file,
            'receipt'=>$request->receipt,
        ]);
        // return 'ok';
        return redirect()->route('user.get-receipts')->with('success', 'Recept created Successfully');

    }

}
