<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\FooRepository;

class FooController extends Controller
{
    /*
    private $repository;
    public function __construct(FooRepository $repository) {
        $this->repository = $repository;
    }
    public function foo() {
        //        return 'foo';
        //
        //        $repository = new \App\Repositories\FooRepository();
        //        return $repository->get();
        //
        return $this->repository->get();
    }
     */
    public function foo(FooRepository $repository) {
        return $repository->get();
    }
}
