<?php

namespace {{ theme.namespace }}\Setup;

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

use function {{ theme.namespace }}\config;

/**
 * Registers the widget areas.
 *
 * @return void
 */
function register_widget_areas()
{
    register_sidebar([
        'name' => __('Sidebar', config('textdomain')),
        'description' => __('Website sidebar', config('textdomain')),
    ]);
}
add_action('widgets_init', '{{ theme.namespace }}\Setup\register_widget_areas');
