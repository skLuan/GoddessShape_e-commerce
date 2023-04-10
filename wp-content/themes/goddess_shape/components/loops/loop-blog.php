<?php
$argss = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
);
$blogpost = new WP_Query($argss);
extract($args);
?>
<!-- blog -->
<section class="lg:hidden flex flex-col w-full h-150 bg-white" id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="font-champagne_limousines text-28 text-red-soft w-full font-bold p-8 h-30"><?= $title && isset($title) ? esc_html($title) : "Blog" ?></h2>
    </div>
    <?php
    if ($blogpost->have_posts()) :
        while ($blogpost->have_posts()) :
            $blogpost->the_post(); ?>
            <div class="flex flex-col w-full py-5">
                <a href="<?= get_permalink() ?>" class="overflow-hidden mb-2">
                    <picture class="">
                        <img class="w-full" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </picture>
                </a>
                <a href="<?= get_permalink() ?>" class="flex flex-col px-5">
                    <h2 class="flex font-champagne_limousines text-red-soft text-2xl leading-tight font-bold"><?= get_the_title(); ?></h2>
                    <p class="flex font-champagne_limousines text-black-gs leading-tight mt-3 text-xl font-normal"><?= wp_trim_words(get_the_excerpt(), 40, '...'); ?> </p>
                    <span class="ml-auto text-orange-400 font-bold text-right text-lg">See more</span>
                </a>
            </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>
<!-- blog Desktop -->
<section class="hidden lg:flex flex-col w-full h-150 bg-white pb-24 " id="blog">
    <div class="flex flex-col text-center bg-white ">
        <h2 class="hidden lg:flex font-champagne_limousines p-8 text-28 font-bold leading-5 w-full text-red-soft justify-center h-30"><?= $title && isset($title) ? esc_html($title) : "Blog" ?></h2>
    </div>
    <div class="flex flex-row flex-wrap lg:max-w-screen-xl lg:grid grid-cols-3 gap-5 lg:mx-auto lg:px-5 2xl:px-0">
        <!-- <div class="flex flex-row flex-wrap  lg:mx-auto"> -->
        <?php
        if ($blogpost->have_posts()) :
            while ($blogpost->have_posts()) :
                $blogpost->the_post(); ?>
                <div class="flex flex-col py-5">
                    <a href="<?= get_permalink() ?>" class="overflow-hidden mb-2">
                        <picture class="">
                            <img class="rounded-lg w-full" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                        </picture>
                    </a>
                    <a href="<?= get_permalink() ?>" class="flex flex-col px-5">
                        <h2 class="flex font-champagne_limousines text-red-soft text-2xl leading-tight font-bold"><?= get_the_title(); ?></h2>
                        <p class="flex font-champagne_limousines text-black-gs leading-tight mt-3 text-xl font-normal"><?= wp_trim_words(get_the_excerpt(), 40, '...'); ?> </p>
                        <span class="ml-auto text-orange-400 font-bold text-right text-lg">See more</span>
                    </a>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>