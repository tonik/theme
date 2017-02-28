<?php

namespace {{ theme.namespace }}\Setup;

/*
|-----------------------------------------------------------
| Theme Custom Services
|-----------------------------------------------------------
|
| This file is for registering your third-parity services
| or custom logic within theme container, so they can
| be easily used for a theme template files later.
|
*/

use function {{ theme.namespace }}\theme;

/**
 * Binds example service to the theme container.
 *
 * @return void
 */
function example_service_binding()
{
    theme()->bind('example_service', function () {
        return "service";
    });
}
add_action('init', '{{ theme.namespace }}\Setup\example_service_binding');