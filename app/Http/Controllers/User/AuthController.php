<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordUser;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => 'required',
            'confirm-password' => 'same:password',

        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->password = bcrypt($request->password);
        $company->save();
        return redirect()->route('login')->with(['status' => true, 'message' => "Registered Successfully"]);

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd(Auth());
        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with(['status' => true, 'message' => "You've Login Successfully"]);
        }
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with(['status' => true, 'message' => "You've Login Successfully"]);
        }
        return redirect()->back()->with(['status' => false, 'message' => "Your Email Or Password Invalid!"]);
    }

    public function logout()
    {
        if (Auth::guard('company')->check()) {
            Auth::guard('company')->logout();
        } else {
            Auth::guard('web')->logout();
        }
        return redirect()->route('login')->with('success', "You've Logout Successfully");
    }

    public function forgetPassword(Request $request)
    {
        $user = Company::where('email', $request->email)->first();
        $guard = 'company';
        if (!$user) {
            $user = User::where('email', $request->email)->first();
            $guard = 'web';
        }

        if ($user) {
            $email = DB::table('password_resets')->where('email', $request->email)->first();
            if ($email) {
                DB::table('password_resets')->where('email', $request->email)->delete();
                return back()->with('message', 'An OTP has already been sent.');
            } else {
                $token = Str::random(30);
                $otp = random_int(100000, 999999);
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'otp' => $otp,
                    'created_at' => Carbon::now(),
                    'guard' => $guard,
                ]);
                $data['otp'] = $otp;
                // dd($data);
                Mail::to($request->email)->send(new ResetPasswordUser($data));
                return redirect()->route('otp')->with(['status' => true, 'message' => 'An email with OTP has been sent successfully']);
            }
        } else {
            return back()->with('message', 'No account was found with this email address.');
        }
    }

    public function confirmToken(Request $request)
    {
        $digit1 = $request->input('digit_1');
        $digit2 = $request->input('digit_2');
        $digit3 = $request->input('digit_3');
        $digit4 = $request->input('digit_4');
        $digit5 = $request->input('digit_5');
        $digit6 = $request->input('digit_6');

        $otp = $digit1 . $digit2 . $digit3 . $digit4 . $digit5 . $digit6;
        $passwordReset = DB::table('password_resets')->where('otp', $otp)->first();
        // DB::table('password_resets')->where('token', $request->token)->delete();
        // dd($passwordReset);
        if ($passwordReset) {
            if ($passwordReset->otp == $otp) {
                $guard = $passwordReset->guard;
                // dd($guard);
                $user = null;
                if ($guard == 'web') {
                    $user = User::where('email', $passwordReset->email)->first();
                } elseif ($guard == 'company') {
                    $user = Company::where('email', $passwordReset->email)->first();
                }

                if ($user) {

                    return redirect()->route('reset-password', ['id' => $user->id, 'token' => $request->token])->with(['user' => $user]);return redirect('reset-password')->with(['user' => $user, 'token' => $request->token]);
                } else {
                    return back()->with('message', 'User not found');
                }
            } else {
                return back()->with('message', 'The OTP you entered is incorrect.');
            }
        } else {
            return back()->with('message', 'Invalid token');
        }
    }
    public function resetPassword($id)
{
    // dd('ali');
    // $data = User::find($id);
    return view('auth.reset-password',compact('id'));
    // $userId = $request->input('user');
    // $token = $request->input('token');
    // dd($token);
    // $password = $request->input('password');
    // $passwordConfirm = $request->input('confirmPassword');

    // $validator = Validator::make($request->all(), [
    //     'password' => 'required|min:6|confirmed',
    //     'confirmPassword' => 'required|min:6|same:password',
    // ]);

    // if ($validator->fails()) {
    //     return back()->withErrors($validator)->withInput();
    // }

    // $passwordReset = DB::table('password_resets')->where('token', $token)->first();
    // dd($passwordReset);

    // if ($passwordReset) {
    //     $guard = $passwordReset->guard;
    //     if ($guard == 'web') {
    //         $user = User::find($userId);
    //     } else {
    //         $user = Company::find($userId);
    //     }

    //     $user->password = Hash::make($password);
    //     $user->save();

    //     DB::table('password_resets')->where('token', $token)->delete();

    //     return redirect('/login')->with('message', 'Password changed successfully.');
    // } else {
    //     return back()->with('message', 'Invalid token');
    // }
}
public function changePassword(Request $request){
    $request->validate([

        'password' => 'required',
        'confirmPassword' => 'same:password',
    ]);
    $userId = $request->input('id');
    $password = $request->input('password');
    $passwordConfirm = $request->input('confirmPassword');

    $user = Company::where('id', $userId)->update(['password' => $password ]);

        if (!$user) {
            $user = User::where('id', $userId)->update(['password' => $passwordConfirm ]);

        return redirect()->route('login')->with(['status' => true, 'message' => 'Password Changed Successfully']);
        }
        else{
            return redirect()->back()->with(['status' => false, 'message' => 'Password Changed Successfully']);
        }


}






}


