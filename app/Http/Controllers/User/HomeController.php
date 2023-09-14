<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Note;
use App\Models\UserDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $authId = Auth::guard('web')->id();
       $data['user'] =  User::find($authId);
        $data['document'] = UserDocument::whereUser_id($authId)->count();
        return view('user.dashboard', $data);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success', "You've Logout Successfully");
    }
    public function note_update(Request $request)
{
    $authId = Auth::guard('web')->id();
    $note = Note::where('user_id', $authId)->first();

    if ($note) {
        $note->update([
            'note' => $request->input('note'),
        ]);
    } else {
        Note::create([
            'note' => $request->input('note'),
            'user_id' => $authId,
        ]);
    }
    return redirect()->route('user.dashboard')->with('success', "Updated Successfully");
}
}
