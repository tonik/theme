<?php

namespace {{ theme.namespace }}\Http;

use function {{ theme.namespace }}\asset_path;

/*
|-----------------------------------------------------------------
| Theme Assets
|-----------------------------------------------------------------
|
| This file is for registering your theme stylesheets and scripts.
| In here you should also deregister all unwanted assets which
| can be shiped with various third-parity plugins.
|
*/

// Manages theme stylesheets.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', asset_path('css/bootstrap.css'));

    wp_enqueue_style('theme', asset_path('css/theme.css'));
});

// Manages theme scripts.
add_action('wp_enqueue_scripts', function () {
    // wp_enqueue_script('theme-scripts', asset_path('js/all.js'));
});
