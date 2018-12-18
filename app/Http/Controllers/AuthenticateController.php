<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AuthenticateController extends Controller
{

    public function login()
    {
        if(Auth::check()){
            return view('backend.dashboard');
        }
        else{
            $attempts = session()->get('loginAttempts');
            if($attempts==NULL || $attempts<=2){
                return view('backend.pages.login');
            }
            else{
                return redirect()->route('home')->withErrors('Login Blocked from this Device for 120 minutes.');
            }
        }
    }
    public function postLogin(Request $request)
    {
        $email      = $request->email;
        $password   = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            session()->forget('loginAttempts');
            return redirect()->intended('dashboard')->with('message', 'Welcome Back!');
        }
        else{
            $attempts = session()->get('loginAttempts');
            if($attempts==NULL){
                $attempts = 1;
            }
            else{
                $attempts+=1;
            }
            session()->put('loginAttempts', $attempts);
            $left   = 3- $attempts;
            return redirect()->back()->withErrors('Invalid Username or Password. Attempt(s) Left: '.$left);
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
