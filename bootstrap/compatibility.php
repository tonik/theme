<?php

/*
|--------------------------------------------------------------------------
| Searches for `tonik/gin` package
|--------------------------------------------------------------------------
|
| This section checks if `tonik/gin` package is present. It is
| required to correct functioning. When package is missing
| display error messages on the front and admin.
|
*/

// Include detect plugin function.
if (! function_exists('is_plugin_active')) {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
}

if (! (
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
    if (! tonikgin_is_admin_login_or_register_page()) {
        wp_die(__("Important! This theme requires <a href='//github.com/tonik/gin'><strong>tonik/gin</strong></a> package. Please, make sure it's installed and active."));
    }

    /**
     * Outputs error message markup about missing package.
     *
     * @return void
     */
    function tonikgin_not_found_notice()
    {
    ?>
        <div class="error notice">
            <p>
                <?php _e("We could not find <a href='//github.com/tonik/gin'><strong>tonik/gin</strong></a> package. You have to install it before using this theme."); ?>
            </p>
        </div>
    <?php
    }

    // Hook to the admin notices and display error message.
    add_action('admin_notices', 'tonikgin_not_found_notice');

    // We have a problems. Return negative status.
    return false;
}

// Everything is ok. Return positive status.
return true;