<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CompanyRegistered;
use App\Mail\ResetPasswordUser;
use App\Models\AboutUs;
use App\Models\Company;
use App\Models\Faq;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;
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
        if ($request->role == 'company') {
            /** register the company */
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'phone' => 'required',
                'role' => 'required',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
                'password' => 'required',
                'confirm-password' => 'same:password',
            ]);
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ],[
                'email.unique' => ' email has already been taken as Employee'
            ]);

            $company = new Company();
            $company->name = $request->name;
            $company->email = $request->email;
            $company->phone = $request->phone;
            $company->password = bcrypt($request->password);
            $company->image = 'public/admin/assets/img/users/1675332882.jpg';
            $company->save();

        } else {
            /** register the Self Employee */
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'phone' => 'required',
                'role' => 'required',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => 'required',
                'confirm-password' => 'same:password',
            ]);
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            ],[
                'email.unique' => ' email has already been taken as Company'
            ]);

            $company = new User();
            $company->name = $request->name;
            $company->email = $request->email;
            $company->phone = $request->phone;
            $company->emp_type = 'self';
            $company->password = bcrypt($request->password);
            $company->image = 'public/admin/assets/img/users/1675332882.jpg';
            $company->save();
        }

        /**After registered send confirmation  mail */
        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            Mail::to($request->email)->send(new CompanyRegistered($message));
            return redirect()->route('login')->with('success', "Registered Successfully");
        } catch (\Throwable $th) {
            return back()->with(['status' => false, 'error' => $th->getMessage()]);
        }

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Auth::guard('web')->logout();
            // return redirect()->url('company/dashboard')->with('success', "You've Login Successfully");
            return redirect()->to('company/dashboard')->with('success', "You've Login Successfully");

        }
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Auth::guard('company')->logout();
            // return redirect()->url('user/dashboard')->with('success', "You've Login Successfully");
            $user = User::where('email',$request->email)->first();
            if($user->emp_type == 'company')
            {
                return redirect()->route('employee.dashboard')->with('success', "You've Login Successfully");
            }
            elseif($user->emp_type == 'self')
            {
                return redirect()->route('individual.dashboard')->with('success', "You've Login Successfully");
            }
            // return redirect()->to('user/dashboard')->with('success', "You've Login Successfully");

        }
        return redirect()->back()->with('error', "Your Email Or Password Invalid!");
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
            return redirect()->route('otp')->with('success', 'We have sended you an OTP on email to retrieve your password');
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
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirm = $request->input('confirmPassword');

        if ($request->guard == 'web') {
            User::where('email', $email)->update(['password' => Hash::make($password)]);
        } elseif ($request->guard == 'company') {
            Company::where('email', $email)->update(['password' => Hash::make($password)]);
        }
        DB::table('password_resets')->where('email', $email)->delete();

        return redirect()->route('login')->with('success', 'Updated Successfully');
    }

    public function homePage()
    {
        return view('auth.home');
    }

    // login form pages
    public function faqs()
    {
        $faqs = Faq::all();
        return view('pages.faqs',compact('faqs'));
    }
    public function privacy()
    {
        $privacy = PrivacyPolicy::all();
        return view('pages.privacy',compact('privacy'));
    }
    public function term()
    {
        $term = TermCondition::all();
        return view('pages.termCondition',compact('term'));
    }
    public function about()
    {
        $about = AboutUs::all();
        return view('pages.about',compact('about'));
    }
    public function contact()
    {
        return view('pages.contact');
    }

}
