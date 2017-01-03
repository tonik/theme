<?php

namespace {{ theme.namespace }}\Setup;

add_action('after_setup_theme', function () {
    /**
     * Add support for custom logo. Allow for setting
     * logo for theme via WordPress customizer.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
     */
    add_theme_support('custom-logo');

    /**
     * Add support for head <title> tag. By adding `title-tag` support, we
     * declare that this theme does not use a hard-coded <title> tag in
     * the document head, and expect WordPress to provide it for us.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable support for Post Thumbnails on posts and pages. Note that you
     * can optionally pass a second argument, $args, with an array of
     * the Post Types for which you want to enable this feature.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
     */
    add_theme_support('post-thumbnails');

    /**
     * Switch default core markup for search forms, comment forms, comment
     * lists, gallery, and captions to output valid HTML5 markup.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
});
