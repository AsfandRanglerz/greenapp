<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    public function index()
    {
        return view('admin.subadmin.index');
    }

    public function create()
    {
        return view('admin.subadmin.create');

    }


    public function store(Request $request)
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
