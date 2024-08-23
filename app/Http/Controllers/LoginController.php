<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('login');
    }

    public function loginuser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $id = $user->id;
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('message', '<div class="siteAlert">Invalid login details</div>');
        } else {
            return redirect()->route('home', $id);
        }

    }
}
