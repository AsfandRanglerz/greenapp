<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NewVisaProcess;
use Illuminate\Support\Facades\Mail;

class NewVisaProcessController extends Controller
{
    public function index()
    {
        return view('admin.visaprocess.index');
    }
}
