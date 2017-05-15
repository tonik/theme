<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Index Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function App\Theme\template;

/**
 * Renders index page header.
 *
 * @see do_action('theme/index/header')
 * @uses resources/templates/partials/header.tpl.php
 */
function render_header()
{
    template('partials/header', [
        'title' => __('Tonik — WordPress Starter Theme'),
        'lead' => __('Tonik is a WordPress Starter Theme which aims to modernize, organize and enhance some aspects of WordPress theme development. Take a look at what is waiting for you.'),
    ]);
}
add_action('theme/index/header', 'App\Theme\render_header');

/**
 * Renders index page.
 *
 * @uses resources/templates/index.tpl.php
 */
template('index');