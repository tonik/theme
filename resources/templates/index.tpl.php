<?php get_header() ?>
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
