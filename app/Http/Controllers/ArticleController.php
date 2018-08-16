<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function singleArticle($value='')
    {
        return view('frontend.article.single');
    }


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
        Image::make(Input::file('featured_image'))->resize(300, 200)->save('foo.jpg');
        return 'Saved';

    }
}
