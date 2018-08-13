<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    // public function about(){
    //     return view('frontend.pages.about');
    // }

    // public function contact(){
    //     return view('frontend.pages.contact');
    // }

    // public function privacy(){
    //     return view('frontend.pages.privacy');
    // }

    // public function copyright(){
    //     return view('frontend.pages.copyright');
    // }
}
