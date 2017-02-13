<?php

namespace {{ theme.namespace }}\Setup;

use function {{ theme.namespace }}\config;

/*
|----------------------------------------------------------------
| Theme Navigations
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

add_action('after_setup_theme', function () {
    // register_nav_menus([
    //     'primary' => __('Primary', config('textdomain')),
    // ]);
});
