<?php

namespace {{ theme.namespace }}\Setup;

use function {{ theme.namespace }}\template;

/**
 * Adds shortcode.
 *
 * @param array $atts  the shortcode attributes
 * @param string $content  the shortcode content
 *
 * @return string  the shortcode markup
 */
add_shortcode('button', function ($atts, $content) {
    ob_start();

    $attributes = shortcode_atts([
        'href' => '#'
    ], $atts);

    template('shortcodes/button', compact('attributes', 'content'));

    return ob_get_clean();
});