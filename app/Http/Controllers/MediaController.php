<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Image;
use App\Media;

class MediaController extends Controller
{
    public function media()
    {
        $mediaObj   = new Media();
        $medias     = $mediaObj->orderBy('id', 'DESC')->get();

        return view('backend.media.media', compact('medias'));
    }

    public function postMedia(Request $request)
    {
        $mediaObj   = new Media();
        $name       = $request->name;

        $image = Input::file('image');
			$filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = ('uploads/inarticle/' . $filename);
            Image::make($image->getRealPath())->save($path);
        
        $mediaObj->name     = $name;
        $mediaObj->path     = $path;

        $mediaObj->save();

        return redirect()->back()->with('message', 'Image Uploaded Successfully!');
        
    }

    public function deleteMedia($id)
    {
        $mediaObj   = new Media();
        $media      = $mediaObj->findorfail($id);
        $path       = $media->path;

        if(file_exists($path)){
            File::delete($path);
        }

        $media->delete();

        return redirect()->back()->with('message', 'Image deleted successfully!');
    }
}
