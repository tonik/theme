<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function App\Theme\template;

/**
 * Renders layout's footer.
 *
 * @uses resources/templates/layout/footer.tpl.php
 */
template('layout/footer');