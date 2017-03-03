<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Homepage
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme templates files.
|
*/

use function App\Theme\template;

/**
 * Renders homepage page.
 *
 * @uses resources/templates/homepage.php
 */
$post = get_post(1);

template('homepage', [
    'title' => $post->post_title,
    'content' => $post->post_content,
    'button' => [
        'link' => 'https://github.com/tonik/theme',
        'title' => 'Checkout documentation →'
    ]
]);