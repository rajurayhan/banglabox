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
use DB;



use App\Article;
use App\Category;

class ArticleController extends Controller
{

    public function __construct()
    {
        
    }
    
    public function singleArticle($id, $slug, Request $request)
    {
        $articleObj             = new Article();
        $article                = $articleObj->where('status', 1)->findorfail($id);

        $relatedArticles        = $articleObj->where('category_id', $article->category_id)->where('status', 1)->where('id', '!=', $article->id)->orderBy('id', 'DESC')->paginate(4);

        if($request->ajax()){
            $view = view('frontend.article.related',compact('relatedArticles'))->render();
            return response()->json(['html'=>$view]);
        }

        $article->read_count    = $article->read_count + 1; 
        $article->save();        

        $previous   = $articleObj->where('id', '<', $article->id)->where('status', 1)->orderBy('id','desc')->first();
        $next       = $articleObj->where('id', '>', $article->id)->where('status', 1)->orderBy('id')->first();

        return view('frontend.article.single', compact('article', 'relatedArticles', 'next', 'previous'));
        // return $article;
    }

    public function categoryArticles($slug, Request $request)
    {
        $categoryObj    = new Category();
        $category       = $categoryObj->where('slug', $slug)->first();
        

        $articleObj             = new Article();
        // $articles               = $articleObj->where('category_id', $category->id)->get();

        $articles               = $articleObj->where('category_id', $category->id)->where('status', 1)->orderBy('id', 'desc')->paginate(6);

        if($request->ajax()){
            $view = view('frontend.article.data',compact('articles'))->render();
            return response()->json(['html'=>$view]);
        }

        // return $category;
        return view('frontend.article.category', compact('articles', 'category'));
    }

    public function popularArticles()
    {
        $articleObj             = new Article();
        $articles               = $articleObj->where('status', 1)
                                             ->orderBy('read_count', 'desc')
                                             ->take(5)
                                             ->get();
        return $articles;
    }


    // Backend Function 

    public function allArticles()
    {
        $articleObj         = new Article();
        $articles           = $articleObj->orderBy('id', 'desc')->get();
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
            $path = ('uploads/featured/' . $filename);
            Image::make($image->getRealPath())->save($path);
        
            $articleObj->image = $filename;

        if ($request->has('featured')) {
            $articleObj->is_featured = 1;
        }

        if ($request->has('headline')) {
            $articleObj->is_headline = 1;

            $oldHeadline = $articleObj->where('is_headline', 1)->first();
            if($oldHeadline){
                $oldHeadline->is_headline = 0;
                $oldHeadline->save();
            }
        }
        
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
            $path = ('uploads/featured/' . $filename);
            Image::make($image->getRealPath())->save($path);
        
            $article->image = $filename;
        }
        $featured  = $request->featured;
        $article->is_featured = $featured;
        if (!$featured) {
            $article->is_featured = 0;
        }
        $headline  = $request->headline;
        if ($headline) {
            $oldHeadline = $articleObj->where('is_headline', 1)->first();
            if($oldHeadline){
                if($oldHeadline->id!=$id){
                    $oldHeadline->is_headline = 0;
                    $oldHeadline->save();
                }
            }
        }
        else{
            $headline = 0;
        }
        $article->is_headline = $headline;

        $article->save();

        return redirect()->back()->with('message', 'Article Updated Successfully!');


        // $headline  = $request->headline;
        // if($headline){
        //     $headline = 'Headline Selected';
        // }
        // else{
        //     $headline = 'Headline Not Selected';
        // }
        // return $headline;
    }

    public function deleteArticle($id)
    {
        $articleObj         = new Article();
        $article            = $articleObj->find($id);

        $isHeadline         = $article->is_headline;
        
        $article->is_headline   = 0;
        $article->save();
        $article->delete();

        $msg        = 'Article Deleted Successfully.';

        if($isHeadline){
            $lastArticle    = $articleObj->orderBy('created_at', 'desc')->first();
            // $lastArticle = DB::table('articles')->latest()->first();
            if($lastArticle){
                $lastArticle->is_headline   = 1; 
                $lastArticle->save();

                $msg        = 'Article Deleted Successfully. Headline Changed.';
            }
        }

        return redirect()->back()->with('message', $msg);
    }

    public function imageResize()
    {
        $articleObj  = new Article();
        $articles    = $articleObj->get();
        $notFound = 0;
        $Existing  = 0;
        foreach ($articles as $article) {
            $image  = ('uploads/featured/' . $article->image);
            $fileName = $article->image;
            if(file_exists($image)){
                $Existing++;
                $img    = Image::make($image);
                $img->fit(600,360, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save('uploads/featured/'.$fileName);
            }
            else{
                $notFound++;
            }
        }

        return 'Done: '.$Existing.'!  Not found: '.$notFound;
    }
}
