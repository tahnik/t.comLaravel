<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('home')->with('articles', $article);
    }
    public function create(){
        return view('createArticle');
    }
    public function store(Request $request){
        if($request->file('image')->isValid()) {
            $article = Article::create([
                'title' => $request->title,
                'body'  => $request->body,
                'datePublished' => $request->datePublished
            ]);
            $file = $request->file('image');
            $ext = $request->file('image')->getMimeType();
            $file->move('blog_images', $article->id . '.' . $file->getClientOriginalExtension());

        }
        return redirect('/home');
    }
}
