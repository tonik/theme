var elixir = require('laravel-elixir');

require('laravel-elixir-imagemin');

/*
 |--------------------------------------------------------------------------
 | Elixir Assets Management
 |--------------------------------------------------------------------------
 |
 | Laravel Elixir provides a clean, fluent API for defining
 | basic Gulp tasks for your application. Elixir supports
 | several common CSS and JavaScript pre-processors.
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .imagemin()
        .copy('resources/fonts', 'public/fonts')
        .webpack('bootstrap.js')
        .webpack('app.js');
});