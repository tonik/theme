<?php get_header() ?>
    <div class="row">
        <div class="column">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php do_action('theme/single/content') ?>
                <?php endwhile ?>
            <?php endif ?>
        </div>

        <?php if (apply_filters('theme/single/sidebar/visibility', true)): ?>
            <div class="small-12 medium-3 column">
                <?php do_action('theme/single/sidebar') ?>
            </div>
        <?php endif ?>
    </div>
<?php get_footer() ?>