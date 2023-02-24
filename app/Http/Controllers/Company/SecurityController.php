<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function faq(){
        $data = Faq::get();
        return view('company.security.faqs',compact('data'));
    }


    public function aboutUs(){
        $data = AboutUs::first();
        return view('company.security.about-us',compact('data'));
    }
    
    public function privacyPolicy(){
        $data = PrivacyPolicy::first();
        return view('company.security.privacy-policy',compact('data'));
    }
    
    
    public function termCondition(){
        $data = TermCondition::first();
        return view('company.security.terms-conditions',compact('data'));
    }
}
