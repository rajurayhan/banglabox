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
            $subObj->token  = $this->RandomString();
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
                                             ->get();

        // if($request->ajax()){
        //     $view = view('frontend.article.data',compact('articles'))->render();
        //     return response()->json(['html'=>$view]);
        // }

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

    public function RandomString($length = 15) {
        $randstr    = '';
        srand((double) microtime(TRUE) * 1000000);
        //our array add all letters and numbers if you wish
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
            'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
            '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
            'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    
        for ($rand = 0; $rand <= $length; $rand++) {
            $random = rand(0, count($chars) - 1);
            $randstr .= $chars[$random];
        }
        return $randstr;
    }

    public function unsubscribe($token)
    {
        $subsCriberObj      = new Subscriber();
        $subscriber         = $subsCriberObj->where('token', $token)->first();

        if($subscriber){
            if($subscriber->status == 1){
                $subscriber->status     = 0;
                $subscriber->save();

                $msg    = 'You have Unsubscribed from BanglaBox - Weekly Digest.';
            }
            else{
                $msg    = 'You are already Unsubscribed from BanglaBox - Weekly Digest.';
            }
        }
        else{
            $msg        = 'Sorry! Your have never subscribed to BanglaBox.';
        }

        return $msg;
    }

    
}
