<?php get_header() ?>

<section class="section">
    <div class="wrapper">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php do_action('theme/single/content') ?>
                <?php endwhile ?>
            <?php endif ?>
        </div>

        <?php if (apply_filters('theme/single/sidebar/visibility', true)): ?>
            <?php do_action('theme/single/sidebar') ?>
        <?php endif ?>
    </div>
</section>

<?php get_footer() ?>
