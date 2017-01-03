<?php

namespace {{ theme.namespace }}\Setup;

use function {{ theme.namespace }}\template;

/**
 * Adds custom shortcode.
 *
 * @param array $atts  The shortcode attributes.
 * @param string $content  The shortcode content.
 *
 * @return string  Shortcode markup.
 */
add_shortcode('custom-shortcode', function ($atts, $content) {
    ob_start();

    $attributes = shortcode_atts([
        'class' => 'my-class'
    ], $atts);

    template('shortcodes/custom-shortcode', compact('attributes', 'content'));

    return ob_get_clean();
});