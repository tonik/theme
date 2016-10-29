<?php

namespace {{ theme.namespace }}\Http;

function action_callback()
{
    check_ajax_referer('my_action_nonce', 'nonce');

    // Action logic...

    die();
}

add_action('wp_ajax_my_action', 'action_callback');
add_action('wp_ajax_nopriv_my_action', 'action_callback');
