<?php

namespace {{ theme.namespace }}\Http;

use function {{ theme.namespace }}\asset_path;

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', asset_path('css/bootstrap.css'));

    wp_enqueue_style('theme', asset_path('css/theme.css'));
});

add_action('wp_enqueue_scripts', function () {
    // wp_enqueue_script('theme-scripts', asset_path('js/all.js'));
});
