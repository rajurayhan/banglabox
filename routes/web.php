<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });

/** Front End Routs  **/
Route::get('/', 'HomeController@home')->name('home');

    //Article Routes
Route::get('/article', 'ArticleController@singleArticle')->name('singleArticle'); // Slugable with a Identifire Variable.

    // Category 

    // Pages
// Route::get('/', 'HomeController@about')->name('about'); 
// Route::get('/', 'HomeController@contact')->name('contact'); 
// Route::get('/', 'HomeController@privacy')->name('privacy');
// Route::get('/', 'HomeController@copyright')->name('copyright');


/** Back End Routs  **/
Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    // Category 
Route::get('admin/category', 'CategoryController@allCategory')->name('allCategory');

Route::post('admin/category/post', 'CategoryController@postCategory')->name('postCategory');
Route::post('admin/category/update/', 'CategoryController@updateCategory')->name('updateCategory');
Route::post('admin/category/delete/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');

Route::get('ajax/category/info/', 'CategoryController@getCategoryInfo')->name('getCategoryInfo'); // Ajax (Edit Purpose)

    // Articles 
Route::get('admin/articles', 'ArticleController@allArticles')->name('allArticles');

Route::get('admin/article/new', 'ArticleController@newArticle')->name('newArticle');
Route::post('admin/article/post', 'ArticleController@postArticle')->name('postArticle');

// Route::get('admin/article/edit/{id}', 'ArticleController@editArticle')->name('editArticle');
// Route::post('admin/article/update/{id}', 'ArticleController@updatetArticle')->name('updateArticle');
