<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        $articles = \App\Article::orderBy('id', 'desc')->get();
        return view('index')->with('articles', $articles);
    });
    Route::get('/about', function(){
        return view('about');
    });
    Route::get('/show_article/{id}', function($id){
        $article = \App\Article::find($id);
        $articles = \App\Article::orderBy('id', 'desc')->take(5)->get();
        return view('showArticle')->with([
            'article' => $article,
            'articles' => $articles
        ]);
    });
});
Route::group(['middleware' => 'web'], function () {
    Route::resource('/home', 'HomeController');
});
