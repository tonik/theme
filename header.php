<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Template controller for outputting layout's opening markup.
|
*/

use function App\Theme\template;

/**
 * Renders layout's header.
 *
 * @uses resources/templates/layout/header.tpl.php
 */
template('layout/header');