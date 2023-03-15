<?php

namespace App\Http\Controllers\User;

use App\Models\Admin;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authId = Auth::guard('web')->id();
        $data = Inquiry::whereUserId($authId)->orderBy('id','desc')->get();
        return view('user.inquiry.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.inquiry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ], [
            'question.required' => 'The Inquiry feild is required',
        ]);
        $authId = Auth::guard('web')->id();
        Inquiry::create(['question' => $request->question, 'user_id' => $authId]);

        $data['question'] = $request->question;
        $admin = Admin::first();
        try {
             Mail::to($admin->email)->send(new \App\Mail\Inquiry($data));
            // Mail::to('aliashraf20026@gmail.com')->send(new \App\Mail\Inquiry($data));
        } catch (\Throwable $th) {
           return 'afads';
        }

        return redirect()->route('user.inquiry.index')->with('success','Inquiry Send Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inquiry::destroy($id);
        return redirect()->route('user.inquiry.index')->with('success','Successfully Deleted');
    }
}
