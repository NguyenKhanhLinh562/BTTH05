<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllArticle(){
        $articles = Article::all();
        return view('home', compact('articles'));
    }
}
