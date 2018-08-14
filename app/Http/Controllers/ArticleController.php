<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use App\Article;

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
        return view('backend.article.add');
    }
}
