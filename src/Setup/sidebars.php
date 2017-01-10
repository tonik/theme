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

add_action('widgets_init', function () {
    register_sidebar([
        'name' => __('Sidebar', '{{ theme.textdomain }}'),
        'description' => __('Website sidebar.', '{{ theme.textdomain }}'),
    ]);
});
