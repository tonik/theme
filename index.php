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
 * Renders [button] shortcode after homepage content.
 *
 * @see do_action('theme/homepage/content/after')
 * @uses resources/templates/shortcodes/button.php
 */
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/theme']Checkout documentation →[/button]");
}
add_action('theme/homepage/content/after', 'App\Theme\render_documentation_button');

/**
 * Renders homepage page.
 *
 * @uses resources/templates/homepage.php
 */
template('homepage', [
    'title' => __('Tonik — WordPress Starter Theme'),
    'content' => __('Tonik is a WordPress Starter Theme which aims to modernize, organize and simplify some aspects of WordPress theme development. Take a look at what is waiting for you:'),
]);