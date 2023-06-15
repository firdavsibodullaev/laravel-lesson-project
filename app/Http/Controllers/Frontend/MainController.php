<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $category_id = request('category');
        
        if ($category_id) {
            $articles = Article::where('category_id','=', $category_id)->get();
        } else {
            $articles = Article::get();
        }

        return view('frontend.index', [
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('frontend.show', [
            'article' => $article
        ]);
    }
}
