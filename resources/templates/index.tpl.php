<?php get_header() ?>
    <?php do_action('theme/index/header') ?>

    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>

                <?php do_action('theme/index/post/content') ?>

            <?php endwhile ?>
        <?php else : ?>

            <?php do_action('theme/index/post/content/none') ?>

        <?php endif ?>
    </main>
<?php get_footer() ?>
