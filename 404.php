<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| 404
|------------------------------------------------------------------
|
| Think about your Theme Template Files as some sort of Controllers
| from MVC design pattern. They should link database queries and
| application logic with your theme views and template files.
|
*/

use function App\Theme\template;

/**
 * Renders 404 page.
 *
 * @uses resources/templates/homepage.php
 */
template('homepage', [
    'title' => 'Not Found',
    'content' => 'The page you are looking for no longer exists.',
    'button' => [
        'link' => 'https://github.com/tonik/theme',
        'title' => 'Checkout documentation →'
    ]
]);