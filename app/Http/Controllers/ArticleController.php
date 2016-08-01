<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
//use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Get all articles
     *
     * @return void
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
//        $articles = Article::latest('published_at')->unpublished()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        return redirect('articles');
    }

    /*
    public function store(Request $request)
    {
        $this->validate($request, ['title'=>'required', 'body' => 'required']);
        Article::create($request->all());
        return redirect('articles');
    }
     */
}
