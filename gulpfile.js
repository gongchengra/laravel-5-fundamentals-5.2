var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss').coffee('coffee.module');
    //    mix.sass('app.scss', 'resources/css');
    mix.styles([
        'vendor/bootstrap.min.css',
        'app.css',
        'vendor/select2.min.css',
    ], 'public/output/final.css', 'public/css');
    mix.version('public/output/final.css');
    mix.scripts([
        'jquery-1.12.4.min.js',
        'bootstrap.min.js',
        'select2.min.js',
    ],'', 'public/js');
    //    mix.phpUnit();
});
