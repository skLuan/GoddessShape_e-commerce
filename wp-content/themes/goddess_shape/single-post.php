<?php get_header() ?>
<div class="px-5 lg:max-w-screen-xl">

    <?php while (have_posts()) :
        the_post();
        ?>
    <h2 class="text-3xl font-bold text-red-soft my-10 text-center">
        <?= the_title(); ?>
    </h2>
    <div class="text-xl w-2/3 mx-auto mb-10">
        <?= the_content(); ?>
    </div>
    <?php
    endwhile; ?>
</div>

<?php get_footer() ?>