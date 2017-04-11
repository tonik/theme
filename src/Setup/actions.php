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

use function App\Theme\template;

/**
 * Renders post contents by its formats.
 *
 * @see do_action('theme/index/post/content')
 * @uses resources/templates/partials/post/content-{{format}}.tpl.php
 */
function render_post_content()
{
    template(['partials/post/content', get_post_format()]);
}
add_action('theme/index/post/content', 'App\Theme\Setup\render_post_content');

/**
 * Renders empty post content where there is no posts.
 *
 * @see do_action('theme/index/post/none')
 * @uses resources/templates/partials/post/content-none.tpl.php
 */
function render_empty_post_content()
{
    template(['partials/post/content', 'none']);
}
add_action('theme/index/post/content/none', 'App\Theme\Setup\render_empty_post_content');

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
add_action('theme/header/end', 'App\Theme\Setup\render_documentation_button');
