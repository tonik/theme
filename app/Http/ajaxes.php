<?php

namespace Tonik\Theme\App\Http;

/*
|-----------------------------------------------------------
| Theme AJAX Actions
|-----------------------------------------------------------
|
| This file is for registering your theme AJAX actions,
| which can be hit with HTTP requests in order to make
| smooth and dynamic JavaScript components.
|
*/

/**
 * My AJAX action callback.
 *
 * @return void
 */
function action_callback()
{
    // Validate nonce token.
    check_ajax_referer('my_action_nonce', 'nonce');

    // Action logic...

    die();
}
add_action('wp_ajax_my_action', 'Tonik\Theme\App\Http\action_callback');
add_action('wp_ajax_nopriv_my_action', 'Tonik\Theme\App\Http\action_callback');
