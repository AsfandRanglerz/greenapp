<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ResetPasswordUser;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        $company->image = 'public/admin/assets/img/users/1675332882.jpg';
        $company->save();
        return redirect()->route('login')->with('success' , "Registered Successfully");

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd(Auth());
        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success' , "You've Login Successfully");
        }
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success' , "You've Login Successfully");
        }
        return redirect()->back()->with('error' , "Your Email Or Password Invalid!");
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
        $request->validate([

            'email' => 'required',
        ]);

        $user = Company::where('email', $request->email)->first();
        $guard = 'company';
        if (!$user) {
            $user = User::where('email', $request->email)->first();
            $guard = 'web';
        }

        if ($user) {
            $email = DB::table('password_resets')->where('email', $request->email)->first();
            if ($email) {
                $otp = random_int(100000, 999999);
                DB::table('password_resets')->where('email', $request->email)->update(['otp' => $otp]);
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
            }
            $data['otp'] = $otp;
            Mail::to($request->email)->send(new ResetPasswordUser($data));
            return redirect()->route('otp')->with( 'success' , 'We have emailed your forget  password otp!');
        } else {
            return back()->with('error', "We can't find a user with that email address");
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

        if ($passwordReset) {

            $data['guard'] = $passwordReset->guard;
            $data['email'] = $passwordReset->email;

            return view('auth.reset-password', $data);
        } else {
            return back()->with('error', 'This forget password token is invalid');
        }
    }

    public function changePassword(Request $request)
    {
        $request->validate([

            'password' => 'required',
            'confirmPassword' => 'same:password',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirm = $request->input('confirmPassword');

        if ($request->guard == 'web') {
            User::where('email', $email)->update(['password' => Hash::make($password)]);
        } elseif ($request->guard == 'company') {
            Company::where('email', $email)->update(['password' => Hash::make($password)]);
        }
        DB::table('password_resets')->where('email', $email)->delete();

        return redirect()->route('login')->with('success' , 'Password updated successfully');
    }

}
