<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\VisaProcessRequest;
use App\Http\Controllers\Controller;

class NewVisaProcessController extends Controller
{
    public function index()
    {
        $visa_requests = VisaProcessRequest::with('company','user')->get();
        // return $visa_requests->company->name;
        return view('admin.visaprocess.index',compact('visa_requests'));
    }

    public function show($id)
    {
        // return 'ok';
        return view('admin.visaprocess.newvisa');
    }
}
