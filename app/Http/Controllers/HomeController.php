<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{

//view all articles
    public function home()

    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('index', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function index(Article $article)
    {
        return view('article', compact('article'));
    }
}
