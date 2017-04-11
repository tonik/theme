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
 * Renders index page.
 *
 * @uses resources/templates/index.tpl.php
 */
template('index', [
    'title' => __('Tonik — WordPress Starter Theme'),
    'content' => __('Tonik is a WordPress Starter Theme which aims to modernize, organize and simplify some aspects of WordPress theme development. Take a look at what is waiting for you:'),
]);