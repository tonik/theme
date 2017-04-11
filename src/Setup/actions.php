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
 * Renders post thumbnails by its formats.
 *
 * @see do_action('theme/index/post/thumbnail')
 * @uses resources/templates/partials/post/thumbnail-{{format}}.tpl.php
 */
function render_post_content()
{
    template('partials/post/thumbnail', [get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'App\Theme\Setup\render_post_content');

/**
 * Renders empty post thumbnail
 * where there is no posts.
 *
 * @see do_action('theme/index/post/none')
 * @uses resources/templates/partials/post/thumbnail-none.tpl.php
 */
function render_empty_post_content()
{
    template('partials/post/thumbnail', ['none']);
}
add_action('theme/index/post/none', 'App\Theme\Setup\render_empty_post_content');

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
add_action('theme/index/header/after', 'App\Theme\Setup\render_documentation_button');
