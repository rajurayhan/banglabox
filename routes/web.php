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
Route::get('/article/{id}/{slug}', 'ArticleController@singleArticle')->name('singleArticle'); // Slugable with a Identifire Variable.

    // Category 
Route::get('/category/{slug}', 'ArticleController@categoryArticles')->name('categoryArticles'); // Slugable with a Identifire Variable.

    // Subscribe
Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');

    // Pages
Route::get('/about', 'HomeController@about')->name('about'); 

Route::get('/contact', 'HomeController@contact')->name('contact'); 
Route::get('/contact-us', 'HomeController@contactUs')->name('contactUs'); 
// Route::get('/', 'HomeController@privacy')->name('privacy');
// Route::get('/', 'HomeController@copyright')->name('copyright');

Route::get('/search', 'HomeController@search')->name('search'); 

Route::get('unsubscribe/{token}', 'HomeController@unsubscribe')->name('unsubscribe');

 
Route::get('/login', 'AuthenticateController@login')->name('login'); 
Route::post('/login-user', 'AuthenticateController@postLogin')->name('postLogin'); 


/** Back End Routs  **/


Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'AuthenticateController@logOut')->name('logOut');

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

        // Category 
    Route::get('admin/category', 'CategoryController@allCategory')->name('allCategory');

    Route::post('admin/category/post', 'CategoryController@postCategory')->name('postCategory');
    Route::post('admin/category/update/', 'CategoryController@updateCategory')->name('updateCategory');
    Route::post('admin/category/delete/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');

    Route::get('ajax/category/info/', 'CategoryController@getCategoryInfo')->name('getCategoryInfo'); // Ajax (Edit Purpose)

        // Articles 
    Route::get('admin/articles', 'ArticleController@allArticles')->name('allArticles');

    Route::get('admin/articles/data', 'ArticleController@anyData')->name('anyData'); // Get Serverside Data

    Route::get('admin/article/new', 'ArticleController@newArticle')->name('newArticle');
    Route::post('admin/article/post', 'ArticleController@postArticle')->name('postArticle');

    Route::get('admin/article/edit/{id}', 'ArticleController@editArticle')->name('editArticle');
    Route::post('admin/article/update/{id}', 'ArticleController@updateArticle')->name('updateArticle');
    Route::post('admin/article/delete/{id}', 'ArticleController@deleteArticle')->name('deleteArticle');

        //Settings 
    Route::get('admin/settings', 'AdminController@settings')->name('settings');
    Route::post('admin/settings/update', 'AdminController@postSettings')->name('postSettings');

        // Users 
    Route::get('admin/users', 'UserController@userList')->name('userList');

    Route::post('admin/user/post', 'UserController@postUser')->name('postUser');
    Route::post('admin/user/update/', 'UserController@updateUser')->name('updateUser');
    Route::post('admin/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');

    Route::get('ajax/user/info/', 'UserController@getUserInfo')->name('getUserInfo'); // Ajax (Edit Purpose)

        // Newsletter 

    Route::get('admin/newsletter', 'AdminController@newsLetter')->name('newsLetter');
    Route::get('admin/newsletter/send', 'AdminController@sendNewsletter')->name('sendNewsletter');

});

