<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Theme Root Paths
    |--------------------------------------------------------------------------
    |
    | This values determines the "root" paths of your theme. By default,
    | they use WordPress `get_template_directory` functions and
    | probably you don't need make any changes in here.
    |
    */
    'paths' => [
        'directory' => get_template_directory(),
        'uri' => get_template_directory_uri(),
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Directory Structure Paths
    |--------------------------------------------------------------------------
    |
    | This array of directories will be used within core for locating
    | and loading theme files, assets and templates. They must be
    | given as relative to the `root` theme directory.
    |
    */
    'directories' => [
        'templates' => 'resources/templates',
        'assets' => 'resources/assets',
        'public' => 'public',
        'src' => 'src',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Theme Components
    |--------------------------------------------------------------------------
    |
    | The components listed below will be automatically loaded on the
    | theme bootstrap by `functions.php` file. Feel free to add your
    | own files to this array which you would like to autoload.
    |
    */
    'autoload' => [
        'helpers.php',
        'posttypes.php',
        'taxonomies.php',
        'Setup/filters.php',
        'Setup/supports.php',
        'Setup/navs.php',
        'Setup/widgets.php',
        'Http/assets.php',
        'Http/ajaxes.php',
    ],
];
