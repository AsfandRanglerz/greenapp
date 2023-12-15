<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Receipt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ReceiptsController extends Controller
{
    public function index()
    {
        $users =User::with('receipts')->has('receipts')->whereIn('emp_type', ['self', 'company'])->get();
        return view('admin.user.receipt.index',compact('users'));
    }

    public function receipts_index($id)
    {
        // return 'running';
            $receipts = Receipt::where('user_id',$id)->orderBy('created_at','DESC')->get();
            $rec = Receipt::where('user_id',$id)->orderBy('created_at','DESC')->first();
            if($rec)
            {
                return view('admin.user.receipt.view',compact('receipts','id'));
            }
            else
            {
                return redirect()->route('receipt-user-index')->with('success', 'No receipt exist');
            }
    }

    public function create($id)
    {
        return view('admin.user.receipt.create',compact('id'));
    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "receipt.*" => "required|string",
            "file.*" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $receipt = $request->input('receipt');
        $files = $request->file('file');
        for ($i = 0; $i < count($receipt); $i++) {
            $receipts = new Receipt;
            $receipts->receipt = $receipt[$i];
            $receipts->user_id = $id;
            if ($request->hasFile('file.' . $i)) {
                $extension = $files[$i]->getClientOriginalExtension();
                $file_name = time() . $i . '.' . $extension;
                $path = $files[$i]->move('public/admin/assets/img/users', $file_name);
                $receipts->file = 'public/admin/assets/img/users/' . $file_name;
            }
        }
            $receipts->save();
        return redirect()->route('user-receipts',$id)->with('success', 'Added Successfully');
    }

    public function edit($id,$receipt_id)
    {
        $receipt = Receipt::find($receipt_id);
        // return $receipt;
        return view('admin.user.receipt.edit',compact('receipt','id'));

    }

    public function update(Request $request ,$id,$receipt_id)
    {
        $receipts = Receipt::find($receipt_id);
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
        $receipts->update([
            'file'=>$file,
            'receipt'=>$request->receipt,
        ]);
        return redirect()->route('user-receipts',$id)->with('success', 'Recept created Successfully');

    }

    public function delete($id,$receipt_id)
    {
        // return "running";
        Receipt::destroy($receipt_id);
        $receipts = Receipt::where('user_id',$id)->orderBy('created_at','DESC')->first();
        if($receipts)
        {
            return redirect()->route('user-receipts',$id)->with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect()->route('receipt-user-index')->with('success', 'Deleted Successfully');
        }

    }

    // public function download($id)
    // {
    //     return "ok";
    // }

    public function download($id)
    {
        // return $id;
        $path = public_path('admin/assets/img/users/' . $id);
        return response()->download($path);
    }

}
