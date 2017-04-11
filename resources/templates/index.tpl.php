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

        article {
            max-width: 300px;
        }
    </style>

    <?php do_action('theme/index/header') ?>

    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>

                <?php do_action('theme/index/post/thumbnail') ?>

            <?php endwhile ?>
        <?php else : ?>

            <?php do_action('theme/index/post/none') ?>

        <?php endif ?>
    </main>
<?php get_footer() ?>
