<?php

namespace {{ theme.namespace }}\Setup;

/**
 * Shortens posts excerpts to 30 character length.
 *
 * @return integer
 */
add_filter('excerpt_length', function () {
    return 30;
});
