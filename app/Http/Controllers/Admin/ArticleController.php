<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('published_at', 'desc')->get();

        return view('admin.article.index', [
            'articles' => $articles
        ]);
    }

    public function show($id) 
    {
        $article = Article::find($id);

        return view('admin.article.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.article.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        
        $image_path = $file->store('articles', ['disk' => 'public']);
        
        $article = new Article();
        $article->title = $request->title;
        $article->short_description = $request->short_description;
        $article->category_id = $request->category_id;
        $article->published_at = $request->published_at;
        $article->is_actual = $request->boolean('is_actual');
        $article->edition_choice = $request->boolean('edition_choice');
        $article->is_carousel = $request->boolean('is_carousel');
        $article->body = $request->body;
        $article->image = $image_path;
        $article->user_id = auth()->id();
        $article->save();

        return redirect()->route('admin.article.index');
    }
}
