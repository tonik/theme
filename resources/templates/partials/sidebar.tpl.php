<aside>
    <?php if (is_active_sidebar('sidebar')) : ?>
        <ul class="vertical menu">
            <?php dynamic_sidebar('sidebar') ?>
        </ul>
    <?php else: ?>
        <h5>Sidebar</h5>
        <h6 class="subheader">Your sidebar is empty.</h6>
    <?php endif; ?>
</aside>