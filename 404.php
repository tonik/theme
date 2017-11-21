<?php

namespace Tonik\Theme\NotFound;

/*
|------------------------------------------------------------------
| 404 Controller
|------------------------------------------------------------------
|
| The template controller for displaying 404 error pages.
| It is displayed when website content was not found.
|
*/

use function Tonik\Theme\App\template;

/**
 * Renders 404 page header.
 *
 * @see resources/templates/index.tpl.php
 */
function render_header()
{
    template('partials/header', [
        'title' => __('Not Found'),
        'lead' => __('The page you are looking for no longer exists.'),
    ]);
}
add_action('theme/index/header', 'Tonik\Theme\NotFound\render_header');

/**
 * Renders 404 page.
 *
 * @see resources/templates/index.tpl.php
 */
template('index');
