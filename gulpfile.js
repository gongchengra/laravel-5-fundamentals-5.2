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
    mix.sass('app.scss', 'resources/assets/css/app.css')
    .coffee('coffee.module','resources/assets/js/coffee.js');
    mix.styles([
        'bootstrap.min.css',
        'select2.min.css',
        'app.css',
    ]);
    mix.scripts([
        'jquery-1.12.4.min.js',
        'bootstrap.min.js',
        'select2.min.js',
        'coffee.js'
    ]);
    mix.version(['public/css/all.css', 'public/js/all.js']);
    //    mix.phpUnit();
});
