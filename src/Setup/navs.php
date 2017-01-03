<?php

namespace {{ theme.namespace }}\Setup;

/**
 * Register navigation areas, where custom menus can be assigned.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary', '{{ theme.textdomain }}'),
    ]);
});
