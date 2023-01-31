<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function faq(){
        return view('user.security.faqs');
    }


    public function aboutUs(){
        return view('user.security.about-us');
    }

    public function privacyPolicy(){
        return view('user.security.privacy-policy');
    }

    
    public function termCondition(){
        return view('user.security.terms-conditions');
    }
}
