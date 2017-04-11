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

/**
 * Binds genres of book service
 * to the theme container.
 *
 * @return void
 */
function bind_genres_of_book_service()
{
    /**
     * Binds service for retrieving
     * genre of the specific book.
     *
     * @param int $id  The `id` of the `book` type post
     * @return \WP_term[]
     */
    theme()->bind('book/genres', function ($id) {
        return wp_get_post_terms($id, 'book_grene');
    });
}
add_action('init', 'App\Theme\Setup\bind_genres_of_book_service');