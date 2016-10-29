<?php get_header() ?>

    <?= $value ?>

    <?php while (have_posts()): the_post(); ?>
	        <p><?php the_title() ?></p>
	    <?php endwhile; ?>

<?php get_footer() ?>