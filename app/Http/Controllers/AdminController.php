<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Settings;
use App\Subscriber;

use Image;
use App\Mail\NewsLetter;
use Mail;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function settings()
    {
        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        return view('backend.pages.settings', compact('settings'));
    }

    public function postSettings(Request $request)
    {
        $settingsObj    = new Settings();
        $settings       = $settingsObj->first();

        $settings->website_title    = $request->website_title;
        $settings->address          = $request->address;
        $settings->contact          = $request->contact;
        $settings->email            = $request->email;
        $settings->about            = $request->about;
        $settings->facebook         = $request->facebook;
        $settings->twitter          = $request->twitter;
        $settings->instagram        = $request->instagram;
        $settings->google_plus      = $request->google_plus;
        $settings->youtube          = $request->youtube;

        $image = Input::file('logo');
        if(Input::hasFile('logo')){
            $filename  = 'logo.' . $image->getClientOriginalExtension();
            $path = public_path('img/' . $filename);
            Image::make($image->getRealPath())->resize(90, 40)->save($path);

            $settings->logo     = $filename;
        }

        $settings->save();

        return redirect()->back()->with('message', 'Settings Updated Successfully!');
        
    }

    public function newsLetter()
    {
        $subsObj         = new Subscriber();
        $subscribers     = $subsObj->orderBy('id', 'desc')->get();
        
        return view('backend.pages.newsletter', compact('subscribers'));
        // return view('backend.mail.newslettertpl');
    }

    public function sendNewsletter()
    {
        $subscriberObj      = new Subscriber();
        $subscribers        = $subscriberObj->where('status', 1)->get();

        foreach($subscribers as $subscriber){
            Mail::to($subscriber->email)
                ->send(new NewsLetter($subscriber->token));
        }

        return response()->json('Newsletter Sent Successfully! ');
    }
}
