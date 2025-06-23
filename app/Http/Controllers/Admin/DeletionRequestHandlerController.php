<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\DeleteRequest;
use App\Mail\DeleteAccountMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class DeletionRequestHandlerController extends Controller
{
    public function view()
    {
        $data = DeleteRequest::latest()->get();
        foreach($data as $req)
        {
            $req->update(['seen_by_admin'=>'1']);
        }
        return view('admin.deleteRequests.index',compact('data'));
    }
    public function action(Request $request)
    {
        try
        {
            $status = $request->status;
            $id = $request->id;
            $delete_request = DeleteRequest::find($id);

            if ($status == 'approve')
            {

                if ($delete_request->company_id != NULL && $delete_request->user_id == NULL)
                {
                    $company = Company::where('id', $delete_request->company_id)->first();

                    if ($company)
                    {
                        // Perform the delete operation (assuming you missed this part)
                        $company->delete();
                        $delete_request->update([
                            'status'=>'approved'
                        ]);
                        return response()->json([
                            'status' => 'success',
                            'message' => 'Company deleted successfully',
                        ]);

                    }
                    else
                    {
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'Company not found',
                        ]);
                    }
                }
                elseif ($delete_request->user_id != NULL && $delete_request->company_id == NULL)
                {
                    $user = User::where('id', $delete_request->user_id)->first();

                    if ($user)
                    {
                        // Perform the delete operation (assuming you missed this part)
                        $user->delete();
                        $delete_request->update([
                            'status'=>'approved'
                        ]);
                        return response()->json([
                            'status' => 'success',
                            'message' => 'User deleted successfully',
                        ]);
                    }
                    else
                    {
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'User not found',
                        ]);
                    }
                }
            }
            elseif($status == 'rejected')
            {
                if ($delete_request->company_id != NULL && $delete_request->user_id == NULL)
                {
                    $company = Company::where('id', $delete_request->company_id)->first();

                    if ($company)
                    {
                        // Mail::to($company->email)->send(new DeleteAccountMail());
                        $delete_request->delete();
                        return response()->json([
                            'status' => 'success',
                            'message' => 'request rejected',
                        ]);
                    }
                    else
                    {
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'Company not found',
                        ]);
                    }
                }
                elseif ($delete_request->user_id != NULL && $delete_request->company_id == NULL)
                {
                    $user = User::where('id', $delete_request->user_id)->first();

                    if ($user)
                    {
                        // Mail::to($user->email)->send(new DeleteAccountMail());
                        $delete_request->delete();
                        return response()->json([
                            'status' => 'success',
                            'message' => 'request rejected',
                        ]);
                    }
                    else
                    {
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'User not found',
                        ]);
                    }
                }


            }
        }
        catch (\Exception $e)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

}
