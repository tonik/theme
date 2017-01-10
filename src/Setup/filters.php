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

// Shortens posts excerpts to 30 character length.
add_filter('excerpt_length', function () {
    return 30;
});
