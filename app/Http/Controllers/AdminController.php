<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Settings;
use App\Subscriber;
use App\Video;

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
            $path = ('img/' . $filename);
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

    public function videos()
    {
        $videoObj     = new Video();
        $videos       = $videoObj->orderBy('id', 'DESC')->get();

        return view('backend.videos.videos', compact('videos'));
        // return $videos;
    }

    public function postVideo(Request $request)
    {
        $videoObj     = new Video();

        $videoObj->url          = $request->url;
        $videoObj->title        = $request->title;
        $videoObj->status  = 1;
        $videoObj->save();

        return redirect()->back()->with('message', 'Video Added Successfully!');
    }

    public function updateVideo(Request $request)
    {
        $videoObj     = new Video();
        $video        = $videoObj->findorfail($request->vidID);

        $video->url          = $request->url;
        $video->title        = $request->title;
        $video->save();

        return redirect()->back()->with('message', 'Video Updated Successfully!');
    }

    public function deleteVideo($id)
    {
        $videoObj     = new Video();
        $video        = $videoObj->findorfail($id);
        $video->delete();

        return redirect()->back()->with('message', 'Video Deleted Successfully!');
    }

    public function getVideo(Request $request)
    {
        $videoObj     = new Video();
        $video        = $videoObj->find($request->id);

        return response()->json($video);

    }
}
