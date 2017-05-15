<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| 404 Controller
|------------------------------------------------------------------
|
| The template controller for displaying 404 error pages.
| It is displayed when website content was not found.
|
*/

use function App\Theme\template;

/**
 * Renders 404 page header.
 *
 * @see do_action('theme/index/header')
 * @uses resources/templates/partials/header.tpl.php
 */
function render_header()
{
    template('partials/header', [
        'title' => __('Not Found'),
        'lead' => __('The page you are looking for no longer exists.'),
    ]);
}
add_action('theme/index/header', 'App\Theme\render_header');

/**
 * Renders 404 page.
 *
 * @uses resources/templates/index.tpl.php
 */
template('index');