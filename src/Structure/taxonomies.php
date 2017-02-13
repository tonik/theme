<?php

namespace {{ theme.namespace }}\Structure;

use function {{ theme.namespace }}\config;

/*
|-----------------------------------------------------------
| Theme Custom Taxonomies
|-----------------------------------------------------------
|
| This file is for registering your theme custom taxonomies.
| Taxonomies help to classify posts and custom post types.
|
*/

add_action('init', function () {
    // register_taxonomy('genre', 'book', [
    //     'label' => __("Book's grenes", config('textdomain')),
    // ]);
});
