<?php

namespace {{ theme.namespace }}\Setup;

use function {{ theme.namespace }}\config;

/*
|-----------------------------------------------------------
| Theme Sidebars
|-----------------------------------------------------------
|
| This file is for registering your theme sidebars,
| Creates widgetized areas, which an administrator
| of the site can customize and assign widgets.
|
*/

add_action('widgets_init', function () {
    register_sidebar([
        'name' => __('Sidebar', config('textdomain')),
        'description' => __('Website sidebar.', config('textdomain')),
    ]);
});
