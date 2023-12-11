<?php

namespace App\Http\Controllers;

use App\Models\Articale; 
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function blog() {
        $articles = Articale::all(); 
        return view('home', [
            'articles' => $articles,
        ]);
    }

    public function show($id)
    {
        $article = Articale::findOrFail($id);
        return view('article-details', ['article' => $article]);
    }
    
}
