<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function singleArticle($value='')
    {
        return view('frontend.article.single');
    }
}
