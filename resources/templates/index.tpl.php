<?php get_header() ?>

<?php do_action('theme/index/header') ?>

<section class="section">
    <div class="wrapper">
        <div class="content">
            <?php if (have_posts()) : ?>
                <h4>Posts</h4>

                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <?php do_action('theme/index/post/thumbnail') ?>
                    <?php endwhile ?>
                </div>
            <?php else : ?>
                <?php do_action('theme/index/content/none') ?>
            <?php endif ?>
        </div>

        <?php if (apply_filters('theme/index/sidebar/visibility', true)): ?>
            <?php do_action('theme/index/sidebar') ?>
        <?php endif ?>
    </div>
</section>

<?php get_footer() ?>
