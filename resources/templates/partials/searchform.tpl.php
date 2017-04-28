<?php
use function App\Theme\config;
?>

<form action="/" method="get">
    <div class="input-group">
        <label for="search">
            <input id="search" class="input-group-field" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?= __('Searching for...', config('textdomain')) ?>">
        </label>

        <div class="input-group-button">
          <input type="submit" class="button" value="Search">
        </div>
    </div>
</form>