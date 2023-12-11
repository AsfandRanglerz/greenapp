<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Receipt;

class ReceiptsController extends Controller
{
    public function user_receipts()
    {
        // return "running";
        return view('admin.user.receipt.index');
    }
}
