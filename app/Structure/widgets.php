<?php

namespace Tonik\Theme\App\Structure;

/*
|-----------------------------------------------------------
| Theme Custom Widgets
|-----------------------------------------------------------
|
| This file is for registering your theme widgets, so
| they can be assigned to sidebar areas in admin
| panel by website administrator or user.
|
*/

/**
 * Registers custom widgets.
 *
 * @return void
 */
function register_widgets()
{
    // register_widget('\My\Widget\Class');
}
add_action('widgets_init', 'Tonik\Theme\App\Structure\register_widgets');
