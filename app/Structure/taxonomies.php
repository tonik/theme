<?php

namespace Tonik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Custom Taxonomies
|-----------------------------------------------------------
|
| This file is for registering your theme custom taxonomies.
| Taxonomies help to classify posts and custom post types.
|
*/

use function Tonik\Theme\App\config;

/**
 * Registers `book_genre` custom taxonomy.
 *
 * @return void
 */
function register_book_genre_taxonomy()
{
    register_taxonomy('book_genre', 'book', [
        'rewrite' => [
            'slug' => 'books/genre',
            'with_front' => true,
            'hierarchical' => true,
        ],
        'hierarchical' => true,
        'public' => true,
        'labels' => [
            'name' => _x('Genres', 'taxonomy general name', config('textdomain')),
            'singular_name' => _x('Genre', 'taxonomy singular name', config('textdomain')),
            'search_items' => __('Search Genres', config('textdomain')),
            'all_items' => __('All Genres', config('textdomain')),
            'parent_item' => __('Parent Genre', config('textdomain')),
            'parent_item_colon' => __('Parent Genre:', config('textdomain')),
            'edit_item' => __('Edit Genre', config('textdomain')),
            'update_item' => __('Update Genre', config('textdomain')),
            'add_new_item' => __('Add New Genre', config('textdomain')),
            'new_item_name' => __('New Genre Name', config('textdomain')),
            'menu_name' => __('Genre', config('textdomain')),
        ],
    ]);
}
add_action('init', 'Tonik\Theme\App\Structure\register_book_genre_taxonomy');
