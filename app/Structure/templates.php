<?php

namespace Tonik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Templates Actions
|-----------------------------------------------------------
|
| This file purpose is to include your templates rendering
| actions hooks, which allows you to render specific
| partials at specific places of your theme.
|
*/

use function Tonik\Theme\App\template;

/**
 * Renders post thumbnail by its formats.
 *
 * @see do_action('theme/index/post/thumbnail')
 * @uses resources/templates/partials/post/thumbnail-{format}.tpl.php
 */
function render_post_thumbnail()
{
    template(['partials/post/thumbnail', get_post_format()]);
}
add_action('theme/index/post/thumbnail', 'Tonik\Theme\App\Structure\render_post_thumbnail');

/**
 * Renders post contents by its formats.
 *
 * @see do_action('theme/index/post/content')
 * @uses resources/templates/partials/post/content-{format}.tpl.php
 */
function render_post_content()
{
    template(['partials/post/content', get_post_format()]);
}
add_action('theme/single/content', 'Tonik\Theme\App\Structure\render_post_content');

/**
 * Renders empty post content where there is no posts.
 *
 * @see do_action('theme/index/content/none')
 * @uses resources/templates/partials/index/content-none.tpl.php
 */
function render_empty_content()
{
    template(['partials/index/content', 'none']);
}
add_action('theme/index/content/none', 'Tonik\Theme\App\Structure\render_empty_content');

/**
 * Renders sidebar content.
 *
 * @see do_action('theme/index/sidebar')
 * @see do_action('theme/single/sidebar')
 * @uses resources/templates/partials/sidebar.tpl.php
 */
function render_sidebar()
{
    get_sidebar();
}
add_action('theme/index/sidebar', 'Tonik\Theme\App\Structure\render_sidebar');
add_action('theme/single/sidebar', 'Tonik\Theme\App\Structure\render_sidebar');

/**
 * Renders [button] shortcode after homepage content.
 *
 * @see do_action('theme/header/end')
 * @uses resources/templates/shortcodes/button.tpl.php
 */
function render_documentation_button()
{
    echo do_shortcode("[button href='https://github.com/tonik/tonik']Checkout documentation →[/button]");
}
add_action('theme/header/end', 'Tonik\Theme\App\Structure\render_documentation_button');
