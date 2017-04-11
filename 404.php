<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| 404
|------------------------------------------------------------------
|
| The template controller for displaying 404 error pages.
| This is displayed when website content was not found.
|
*/

use function App\Theme\template;

/**
 * Renders 404 page.
 *
 * @uses resources/templates/index.tpl.php
 */
template('index', [
    'title' => __('Not Found'),
    'content' => __('The page you are looking for no longer exists.'),
]);