<?php

use function App\Theme\config;

?>

<section>
    <header>
        <h2><?= __('Nothing Found', config('textdomain')) ?></h2>
    </header>

    <div><?php get_search_form() ?></div>
</section>