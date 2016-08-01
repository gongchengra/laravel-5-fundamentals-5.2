<?php

namespace App\Http\Controllers;

use Request;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests;
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
        $articles = Article::latest('published_at')->get();
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

    public function store()
    {
        $input = Request::all();
        $input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('articles');
    }
}
