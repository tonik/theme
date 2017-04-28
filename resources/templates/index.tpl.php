<?php get_header() ?>
    <div class="row">
        <div class="column">
            <?php do_action('theme/index/header') ?>
        </div>
    </div>

    <div class="row">
        <div class="column">
            <?php if (have_posts()) : ?>
                <h5>Posts</h5>

                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <div class="row">
                            <div class="column">
                                <?php do_action('theme/index/post/thumbnail') ?>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            <?php else : ?>
                <?php do_action('theme/index/content/none') ?>
            <?php endif ?>
        </div>

        <?php if (apply_filters('theme/index/sidebar/visibility', true)): ?>
            <div class="small-12 medium-3 column">
                <?php do_action('theme/index/sidebar') ?>
            </div>
        <?php endif ?>
    </div>
<?php get_footer() ?>
