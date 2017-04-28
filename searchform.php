<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Search Form Controller
|------------------------------------------------------------------
|
| The template controller for displaying search form markup.
| This is displayed when website content was not found.
|
*/

use function App\Theme\template;

/**
 * Renders search form.
 *
 * @uses resources/templates/partials/searchform.tpl.php
 */
template('partials/searchform');