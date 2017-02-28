<?php

namespace {{ theme.namespace }}\Setup;

/*
|-----------------------------------------------------------
| Custom Thumbnails Sizes
|-----------------------------------------------------------
|
| This file is for registering your custom
| image sizes, for posts thumbnails.
|
*/

/**
 * Adds new thumbnails image sizes.
 *
 * @return void
 */
function add_image_sizes()
{
    // add_image_size('custom-thumbnail', 800, 600, true);
}
add_action('after_setup_theme', '{{ theme.namespace }}\Setup\add_image_sizes');
