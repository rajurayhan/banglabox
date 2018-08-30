<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use App\Article;
use App\Category;
use App\Subscriber;
use App\Settings;

use App\Mail\ContuctUs;
use Mail;

class HomeController extends Controller
{
    public function home(Request $request){
        $articleObj         = new Article();
        $articles           = $articleObj->paginate(6);

        $headline           = $articleObj->where('is_headline', 1)->first();
        $featured           = Article::where('is_headline', 0)->where('is_featured', 1)->orderByRaw('RAND()')->take(3)->get();

        $latestPosts        = $articleObj->orderBy('id', 'desc')->take(6)->get();
        
        if($request->ajax()){
            $view = view('frontend.article.data',compact('articles'))->render();
            return response()->json(['html'=>$view]);
        }

        $randoms  = Article::orderByRaw('RAND()')->take(3)->get();

        return view('frontend.home', compact('articles', 'randoms', 'latestPosts', 'headline', 'featured'));
        // return $headline;
    }

    public function about(){
        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        // return view('frontend.pages.about', compact('settings'));
        return view('frontend.pages.about');
    }

    public function contact(){
        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        // return view('frontend.pages.contact', compact('settings'));
        return view('frontend.pages.contact');
    }

    public function contactUs(Request $request)
    {
        $email         = 'send2raju.bd@gmail.com';

        Mail::to($email)
        ->cc(['devraju.bd@gmail.com'])
        ->send(new ContuctUs());

        return response()->json('Message Sent Successfully! We will find you shortly.');
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

    public function search(Request $request)
    {        
      
        $query                  = $request->term;
        $articleObj             = new Article();

        $articles               = $articleObj->where('title', 'like', "%{$query}%")
                                             ->orWhere('description', 'like', "%{$query}%")
                                             ->orWhere('excerpt', 'like', "%{$query}%")
                                             ->orWhere('slug', 'like', "%{$query}%")
                                             ->orWhere('tags', 'like', "%{$query}%")
                                             ->paginate(6);

        if($request->ajax()){
            $view = view('frontend.article.data',compact('articles'))->render();
            return response()->json(['html'=>$view]);
        }

        // return $articles;
        return view('frontend.article.search', compact('articles', 'query'));
    }

    public function gteSettings()
    {
        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        return $settings;
    }

    public function getFooterArticles()
    {
        $articleObj             = new Article();
        $articles               = $articleObj->where('status', 1)
                                             ->orderBy('read_count', 'desc')
                                             ->take(2)
                                             ->get();
        return $articles;
    }

    
}
