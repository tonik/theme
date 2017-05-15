<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Header Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's opening markup. Template
| rendered here should include `wp_head()` function call.
|
*/

use function App\Theme\template;

/**
 * Renders layout's header.
 *
 * @uses resources/templates/layout/header.tpl.php
 */
template('layout/header');