<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class UserLogin extends Controller
{
    // public function sendToken(Request $request)
    // {
    //     if(Auth::guard('company'))
    //     {
    //         try {
    //             $email = $request->input('email');
    //             $newFcmToken = $request->input('fcmtoken');
    //             $company = Company::where('email', $email)->first();
    //             // return response()->json([
    //             //     'data'=> $company,$email,$newFcmToken,
    //             // ]);

    //             if ($company) {
    //                 $company->update(['fcmtoken' => $newFcmToken]);
    //                 return response()->json([
    //                     'company' => $company,
    //                     'message' => 'FCM Token updated successfully'
    //                 ], 200);
    //             } else {
    //                 return response()->json(['error' => 'No company Found'], 404);
    //             }
    //         } catch (\Exception $e) {
    //             Log::error($e);
    //             return response()->json(['error' => 'Internal Server Error'], 500);
    //         }
    //     }
    //     elseif(Auth::guard('web'))
    //     {
    //         try {
    //             $email = $request->input('email');
    //             $newFcmToken = $request->input('fcmtoken');
    //             $user = User::where('email', $email)->first();

    //             if ($user) {
    //                 $user->update(['fcmtoken' => $newFcmToken]);
    //                 return response()->json([
    //                     'user' => $user,
    //                     'message' => 'FCM Token updated successfully'
    //                 ], 200);
    //             } else {
    //                 return response()->json(['error' => 'No User Found'], 404);
    //             }
    //         } catch (\Exception $e) {
    //             Log::error($e);
    //             return response()->json(['error' => 'Internal Server Error'], 500);
    //         }
    //     }

    // }

    public function sendToken(Request $request)
    {
        try {
            $email = $request->input('email');
            $newFcmToken = $request->input('fcmtoken');

            // Check if a company exists with the given email
            $company = Company::where('email', $email)->first();
            if ($company) {
                $company->update(['fcmtoken' => $newFcmToken]);
                return response()->json([
                    'company' => $company,
                    'message' => 'FCM Token updated successfully'
                ], 200);
            }

            // Check if a user exists with the given email
            $user = User::where('email', $email)->first();
            if ($user) {
                $user->update(['fcmtoken' => $newFcmToken]);
                return response()->json([
                    'user' => $user,
                    'message' => 'FCM Token updated successfully'
                ], 200);
            }

            // If neither company nor user is found with the given email
            return response()->json(['error' => 'No User Found'], 404);

        } catch (\Exception $e) {
            Log::error($e);
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
