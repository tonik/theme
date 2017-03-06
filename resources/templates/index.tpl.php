<?php get_header() ?>
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <article>
        <h1><?= $title ?></h1>

        <?php do_action('theme/homepage/content/before') ?>

        <p><?= $content ?></p>

        <?php do_action('theme/homepage/content/after') ?>
    </article>
<?php get_footer() ?>
