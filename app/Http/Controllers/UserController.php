<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
    public function __construct(User $users)
    {
        $this->users = $users;
    }


    public function loginKareem()
    {
        Auth::loginUsingId(1);
    }

    public function loginMohamed()
    {
        Auth::loginUsingId(2);
    }

}
