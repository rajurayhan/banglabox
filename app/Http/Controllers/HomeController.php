<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use App\Article;
use App\Category;
use App\Subscriber;

class HomeController extends Controller
{
    public function home(Request $request){
        $articleObj         = new Article();
        $articles           = $articleObj->paginate(6);

        $latestPosts        = $articleObj->orderBy('id', 'desc')->take(6)->get();

        if($request->ajax()){
            $view = view('frontend.article.data',compact('articles'))->render();
            return response()->json(['html'=>$view]);
        }

        $randoms  = Article::orderByRaw('RAND()')->take(3)->get();

        return view('frontend.home', compact('articles', 'randoms', 'latestPosts'));
        // return $latestPosts;
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function contactUs(Request $request)
    {
        return 'Contact Us';
    }

    // public function privacy(){
    //     return view('frontend.pages.privacy');
    // }

    // public function copyright(){
    //     return view('frontend.pages.copyright');
    // }

    public function subscribe(Request $request)
    {
        $subObj    = new Subscriber();

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $subObj->email  = $request->email;
            $subObj->save();

            return redirect()->back()->with('message', 'You have sucessfully Subscribed!');
        }
    }
}
