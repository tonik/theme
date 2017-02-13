<?php

namespace {{ theme.namespace }}\Structure;

use function {{ theme.namespace }}\config;

/*
|-----------------------------------------------------------
| Theme Custom Post Types
|-----------------------------------------------------------
|
| This file is for registering your theme post types.
| Custom post types allow users to easily create
| and manage various types of content.
|
*/

add_action('init', function () {
    // register_post_type('book', [
    //     'label' => __('Book', config('textdomain')),
    //     'description' => __('Collection of books.', config('textdomain')),
    // ]);
});
