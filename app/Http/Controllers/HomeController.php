<?php

namespace App\Http\Controllers;
use App\Category;
use App\Article;
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
        $this->middleware(['auth'], ['except' => ['index']]);;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $article = Article::all();
        $category = Category::all();

        return view('home', ['article' => $article, 'category' => $category]);
    }

    public function home()
    {
        $article = Article::all();
        $category = Category::all();
        return view('home', ['article' => $article, 'category' => $category]);
    }
}
