<?php get_header() ?>
<div id="cartContainer" class="lg:max-w-screen-xl flex mx-auto">
    <?php while (have_posts()) {
        the_post();
        the_content();
    }
    ?>
</div>

<?php get_footer() ?>