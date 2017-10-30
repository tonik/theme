<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <ul>
            <?php dynamic_sidebar('sidebar'); ?>
        </ul>
    <?php else: ?>
        <h5>Sidebar</h5>

        <h6>Your sidebar is empty.</h6>
    <?php endif; ?>
</aside>
