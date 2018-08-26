<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use EasyBanglaDate\Types\BnDateTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;



use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function singleArticle($id, $slug)
    {
        $articleObj             = new Article();
        $article                = $articleObj->find($id);

        $article->read_count    = $article->read_count + 1; 
        $article->save();
        return view('frontend.article.single', compact('article'));
        // return $article;
    }

    // public function testArticle()
    // {
    //     return view('frontend.article.single');
    // }


    // Backend Function 

    public function allArticles()
    {
        $articleObj         = new Article();
        $articles           = $articleObj->get();
        return view('backend.article.articles', compact('articles'));
    }

    public function newArticle()
    {
        $categoryObj    = new Category();
        $categories     = $categoryObj->get();

        return view('backend.article.add' , compact('categories'));
    }

    public function postArticle(Request $request)
    {
        
        // $file = Input::file('image');
        // $fileName = time() . '-' . $file->getClientOriginalName();
        // $file->move('uploads/featured', $fileName);

        $articleObj         = new Article();

        $articleObj->title              = $request->title;
        $articleObj->description        = $request->description;
        $articleObj->category_id        = $request->category_id;
        $articleObj->status             = $request->status;
        $articleObj->visibility         = $request->visibility;
        $articleObj->tags               = $request->tags;
        $articleObj->excerpt            = $request->excerpt;

        $image = Input::file('image');
			$filename  = time() . '.' . $image->getClientOriginalExtension();
			$path = public_path('uploads/featured/' . $filename);
            // Image::make($image->getRealPath())->resize(468, 249)->save($path);
            Image::make($image->getRealPath())->save($path);
        
        $articleObj->image = $filename;
        
        $articleObj->save();

        return redirect()->route('allArticles')->with('message', 'Article Added Successfully!');

        // return 'Saved';

    }

    public function editArticle($id)
    {
        $articleObj         = new Article();
        $article            = $articleObj->find($id);

        $categoryObj    = new Category();
        $categories     = $categoryObj->get();
        return view('backend.article.edit' , compact('categories', 'article'));
    }

    public function updateArticle(Request $request, $id)
    {
        $articleObj         = new Article();
        $article            = $articleObj->find($id);

        $article->title              = $request->title;
        $article->description        = $request->description;
        $article->category_id        = $request->category_id;
        $article->status             = $request->status;
        $article->visibility         = $request->visibility;
        $article->tags               = $request->tags;
        $article->excerpt            = $request->excerpt;

        $image = Input::file('image');

        if($image){
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/featured/' . $filename);
            Image::make($image->getRealPath())->resize(468, 249)->save($path);
        
            $article->image = $filename;
        }
        $article->save();

        return redirect()->back()->with('message', 'Article Updated Successfully!');
    }
}
