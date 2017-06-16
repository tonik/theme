<?php

namespace App\Theme\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function App\Theme\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
        'primary' => __('Primary', config('textdomain')),
    ]);
}
add_action('after_setup_theme', 'App\Theme\Structure\register_navigation_areas');
