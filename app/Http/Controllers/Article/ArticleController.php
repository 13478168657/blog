<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleClassify;;
class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $articles = Article::where('classify_id',$id)->paginate(10);
        return view('articles.list',['article'=>$articles]);
    }
    public function detail(Request $request,$id){
        $article = Article::where('id',$id)->first();
        return view('articles.detail',['article'=>$article]);
    }
    public function add(Request $request){
        return view('news.newsAdd');
    }
}
