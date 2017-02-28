<?php

namespace {{ theme.namespace }}\Setup;

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
 * Example action callback.
 *
 * @return void
 */
function example_action()
{
    //
}
add_action('wp_footer', '{{ theme.namespace }}\Setup\example_action');
