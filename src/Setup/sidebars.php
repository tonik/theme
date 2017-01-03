<?php

namespace {{ theme.namespace }}\Setup;

/**
 * Register sidebars areas, where widgets can be assigned.
 *
 * @return void
 */
add_action('widgets_init', function () {
    register_sidebar([
        'name' => __('Sidebar', '{{ theme.textdomain }}'),
        'description' => __('Website sidebar.', '{{ theme.textdomain }}'),
    ]);
});
