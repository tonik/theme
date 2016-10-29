<?php

/*
|--------------------------------------------------------------------------
| Searches for `Tonik & Gin` plugin
|--------------------------------------------------------------------------
|
| This section checks if `Tonik & Gin` plugin is present. It is
| required to correct functioning. When plugin is missing
| display error messages on the front and admin.
|
 */

// Include detect plugin.
if ( ! function_exists('is_plugin_active')) {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
}

if ( ! (
    is_plugin_active('tonik-gin/tonik-gin.php')
    || class_exists('Tonik\Gin\Foundation\Theme')
))
{
    /**
     * Checks if we on the admin, login or register page.
     *
     * @return boolean
     */
    function tonikgin_is_admin_login_or_register_page()
    {
        global $pagenow;

        return is_admin() || in_array($pagenow, ['wp-login.php', 'wp-register.php']);
    }

    // Die and display alert information, if we are
    // not on the admin, login or register page.
    if ( ! tonikgin_is_admin_login_or_register_page()) {
        wp_die(__("Unfortunately, this theme requires <strong>Tonik&Gin</strong> plugin. Please, make sure it's installed and activated.", '{{ theme.textdomain }}'));
    }

    /**
     * Outputs error message markup about missing plugin.
     *
     * @return void
     */
    function tonikgin_not_found_notice()
    {
    ?>
        <div class="error notice">
            <p>
                <?php _e('We could not find <strong>Tonik&Gin plugin</strong>. Install and activate', '{{ theme.textdomain }}'); ?>
            </p>
        </div>
    <?php
    }

    // Hook to the admin notices and display error message.
    add_action('admin_notices', 'tonikgin_not_found_notice');

    return;
}
