<?php
use function App\Theme\config;
?>

<form action="/" method="get">
    <label for="search">
        <input id="search" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?= __('Searching for...', config('textdomain')) ?>">
    </label>

    <input type="submit" value="Search">
</form>
