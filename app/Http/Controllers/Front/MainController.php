<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function get() 
    {

        $carousel = Article::orderBy("published_at", "desc")->limit(4)->get();

        $actual = Article::orderBy("published_at", "desc")->where("is_actual", "=", true)->get();
        
        $latest = Article::orderBy("published_at", "desc")->limit(10)->get();

        return view('front.index', [
            'carousel' => $carousel,
            "actual" => $actual,
            "latest" => $latest
        ]);
    }
}
