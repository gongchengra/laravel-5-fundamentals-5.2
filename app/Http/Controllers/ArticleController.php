<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    /**
     * Get all articles
     *
     * @return void
     */
    public function index()
    {
//        return \Auth::user()->name;
        $articles = Article::latest('published_at')->published()->get();
//        $articles = Article::latest('published_at')->unpublished()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
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

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
