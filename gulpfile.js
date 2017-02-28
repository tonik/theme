var elixir = require('laravel-elixir');

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
        .sass('theme.scss');

    mix
        .webpack('bootstrap.js')
        .webpack('theme.js');
});