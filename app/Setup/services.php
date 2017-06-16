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

/**
 * Binding handler for book's genres service.
 *
 * @return void
 */
function bind_books_genres_service()
{
    /**
     * Binds service for retrieving genres of the specific book.
     *
     * @param \Tonik\Gin\Foundation\Theme $theme  Instance of the service container
     * @param array $parameters  Parameters passed on service resolving
     *
     * @return \WP_term[]
     */
    theme()->bind('book/genres', function (Theme $theme, $parameters) {
        return wp_get_post_terms($parameters['id'], 'book_grene');
    });
}
add_action('init', 'App\Theme\Setup\bind_books_genres_service');
