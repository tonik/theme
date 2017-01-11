<?php

/*
|------------------------------------------------------------------
| Index
|------------------------------------------------------------------
|
| Think about your Theme Template Files as some sort of Controllers
| from MVC design pattern. They should link database queries and
| application logic with your theme views and template files.
|
*/

$post = get_post(1);

{{ theme.namespace }}\template('index', [
    'title' => $post->post_title,
    'content' => $post->post_content,
    'button' => [
        'link' => 'https://github.com/tonik/theme',
        'title' => 'Checkout documentation →'
    ]
]);