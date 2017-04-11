<?php

namespace App\Theme\Setup;

/*
|-----------------------------------------------------------
| Theme Actions
|-----------------------------------------------------------
|
| This file purpose is to include your theme custom
| actions hooks, which allows to process various
| logic is specifed parts of your system.
|
*/

/**
 * Renders [button] shortcode after homepage content.
 *
 * @see do_action('theme/index/content/after')
 * @uses resources/templates/shortcodes/button.tpl.php
 */
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/theme']Checkout documentation →[/button]");
}
add_action('theme/index/content/after', 'App\Theme\Setup\render_documentation_button');
