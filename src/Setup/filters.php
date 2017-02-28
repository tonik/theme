<?php

namespace {{ theme.namespace }}\Setup;

/*
|-----------------------------------------------------------
| Theme Filters
|-----------------------------------------------------------
|
| This file purpose is to include your theme various
| filters hooks, which changes output or behaviour
| of diffrent parts of WordPress functions.
|
*/

/**
 * Shortens posts excerpts to 60 character length.
 *
 * @return integer
 */
function modify_excerpt_length()
{
    return 60;
}
add_filter('excerpt_length', '{{ theme.namespace }}\Setup\modify_excerpt_length');
