<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;
class ArticlesController extends Controller
{
    public function homePage()
    {
        // $articles = DB::table('articles')->get();
        $articles = Article::all();
        return view('main/index',['articles' => $articles]);
    }

    public function aboutPage()
    {
        return view('main/about');
    }
}
