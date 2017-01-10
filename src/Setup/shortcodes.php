<?php

namespace {{ theme.namespace }}\Setup;

use function {{ theme.namespace }}\template;

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

add_shortcode('custom-shortcode', function ($atts, $content) {
    $attributes = shortcode_atts([
        'class' => 'my-class'
    ], $atts);

    ob_start();

    template('shortcodes/custom-shortcode', compact('attributes', 'content'));

    return ob_get_clean();
});