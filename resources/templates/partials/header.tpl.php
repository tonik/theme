<header class="header">
    <h2><?= $title ?></h2>
    <p><?= $lead ?></p>

    <?php
        /**
         * Functions hooked into `theme/header/end` action.
         *
         * @hooked Tonik\Theme\App\Structure\render_documentation_button - 10
         */
        do_action('theme/header/end')
    ?>
</header>
