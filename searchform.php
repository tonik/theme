<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Search Form Controller
|------------------------------------------------------------------
|
| The template controller for displaying search form markup.
| It is displayed when website posts was not found.
|
*/

use function App\Theme\template;

/**
 * Renders search form.
 *
 * @uses resources/templates/partials/searchform.tpl.php
 */
template('partials/searchform');