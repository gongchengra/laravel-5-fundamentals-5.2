<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/', 'WelcomeController@index');
Route::get('contact', 'PagesController@contact');
Route::get('contact', ['middleware' => 'demo', 'uses' => 'PagesController@contact']);
//Route::get('about', 'PagesController@about');
//Route::get('about', ['middleware' => 'auth', 'uses' => 'PagesController@about']);
Route::get('about', ['middleware' => 'auth', function(){
    return 'A protected page by auth method';
}]);

//Route::get('articles', 'ArticleController@index');
//Route::get('articles/create', 'ArticleController@create');
//Route::get('articles/{id}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::get('articles/{id}/edit', 'ArticleController@edit');

Route::resource('articles', 'ArticleController');

//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);

Route::auth();

//Route::get('/home', 'HomeController@index');
Route::get('/', 'ArticleController@index');

Route::get('foo', ['middleware' => 'manager', function(){
    return 'This page can only be viewed as managers';
}]);

/*
class Baz{}
class Bar{
    public $baz;
    public function __construct(Baz $baz) {
        $this->baz = $baz;
    }
}
App::bind('Bar', function(){
    return new Bar(new Baz);
});
interface BarInterface{}
class foo implements BarInterface{}
//App::bind('BarInterface', function(){
//    return new foo;
//});
//App::bind('BarInterface', 'foo');
//Route::get('bar', function(BarInterface $bar){
//    dd($bar);
//});
//App::bind('BarInterface', 'foo');
app()->bind('BarInterface', 'foo');
Route::get('bar', function(){
//    $bar = App::make('BarInterface');
//    $bar = app()->make('BarInterface');
//    $bar = app()['BarInterface'];
    $bar = app('BarInterface');
    dd($bar);
});
 */
Route::get('foo', 'FooController@foo');
