<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthenticateController extends Controller
{

    public function login()
    {
        if(Auth::check()){
            return view('backend.dashboard');
        }
        else{
            return view('backend.pages.login');
        }
    }
    public function postLogin(Request $request)
    {
        $email      = $request->email;
        $password   = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('dashboard')->with('message', 'Welcome Back!');
        }
        else{
            return redirect()->back()->withErrors('Invalid Username or Password');
        }

    }

    public function logOut()
    {
        if(Auth::check()){
            Auth::logout();
        }
        else{
            return redirect()->route('dashboard')->withErrors('You must login first');
        }

        return  redirect()->route('dashboard')->with('message', 'You have successfully logged out.');
    }
}
