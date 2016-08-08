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
//        $article = new Article($request->all());
//        Auth::user()->articles()->save($article);
        Auth::user()->articles()->create($request->all());
//        \Session::flash('flash_message', 'Your article has been created.');
//        session()->flash('flash_message', 'Your article has been created.');
//        session()->flash('flash_message_important', true);
//        return redirect('articles')->with([
//            'flash_message'=>'Your article has been created.',
//            'flash_message_important'=>true,
//        ]);
//        flash('Your article has been created.')->important();
//        flash()->success('Your article has been created sucessfully.');
        flash()->overlay('Your article has been sucessfully created.', 'Good Job.');
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

        flash()->overlay('Your article has been sucessfully updated.', 'Good Job.');
        return redirect('articles');
    }
}
