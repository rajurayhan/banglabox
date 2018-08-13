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