<?php

namespace {{ theme.namespace }}\Setup;

/*
|--------------------------------------------------------------------------
| Custom Shortcodes
|--------------------------------------------------------------------------
|
| This file is for registering your shortcodes. Shortcodes allows to facade
| a code logic behind readable piece of text. Below you have an example
| which facilitates outputing markup with template() helper function.
|
*/

use function {{ theme.namespace }}\template;

/**
 * Renders a [button] shortcode.

 * @param  array $atts
 * @param  string $content
 * @return string
 */
function render_button_shortcode($atts, $content)
{
    $attributes = shortcode_atts([
        'href' => '#'
    ], $atts);

    ob_start();

    template('shortcodes/button', compact('attributes', 'content'));

    return ob_get_clean();
}
add_shortcode('button', '{{ theme.namespace }}\Setup\render_button_shortcode');