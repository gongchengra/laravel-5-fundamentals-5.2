<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function about()
    {
//        return view('pages.about')->with('name', 'Alan Cheng');
//        $name = 'Alan Gong';
//        return view('pages.about')->with('name', $name);
//        return view('pages.about')->with([
//            'first' => 'Alan',
//            'last' => 'Gong',
//        ]);
        $first = 'Alan';
        $last = 'Gong';
        return view('pages.about', compact('first', 'last'));
    }
}
