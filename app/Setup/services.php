<?php

namespace App\Theme\Setup;

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

use function App\Theme\theme;
use Tonik\Gin\Foundation\Theme;
use WP_Query;

/**
 * Service handler for retrieving posts of specific post type.
 *
 * @return void
 */
function bind_books_service()
{
    /**
     * Binds service for retrieving posts of specific post type.
     *
     * @param \Tonik\Gin\Foundation\Theme $theme  Instance of the service container
     * @param array $parameters  Parameters passed on service resolving
     *
     * @return \WP_Post[]
     */
    theme()->bind('books', function (Theme $theme, $parameters) {
        return new WP_Query([
            'post_type' => 'book',
        ]);
    });
}
add_action('init', 'App\Theme\Setup\bind_books_service');
