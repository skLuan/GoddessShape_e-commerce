<?php get_header() ?>
<section id="blog-page" class="flex flex-col py-4">
    <div class="">
        <h1 class="text-center text-2xl md:text-3xl font-semibold py-2 text-red-soft  ">Blog</h1>
    </div>
    <div class="w-max-w-screen-xl w-3/4 mx-auto flex flex-col lg:grid grid-cols-3 gap-5">
        <!-- <div class="col-span-2 grid grid-cols-2 gap-5">
            </div> -->
        <?php while (have_posts()) :
            the_post();
        ?>
            <div class="blogpostThumb bg-white rounded-lg shadow-gs">
                <a href="<?= get_permalink() ?>" class="overflow-hidden mb-2">
                    <picture class="">
                        <img class="rounded-lg w-full" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </picture>
                </a>
                <a href="<?= get_permalink() ?>" class="overflow-hidden mb-2">
                    <h3 class="text-red-soft font-bold text-xl px-2"><?= the_title() ?></h3>
                </a>
                <p class="flex font-champagne_limousines text-black-gs px-2 leading-tight mt-3 text-xl font-normal"><?= wp_trim_words(get_the_excerpt(), 30, '...'); ?> </p>
                <a href="<?= get_permalink() ?>" class="overflow-hidden text-right pt-3 mb-3 pr-5 block">
                    <span class="ml-auto text-orange-400 font-bold text-lg px-2">See more</span>
                </a>
            </div>
        <?php endwhile; ?>
        <!-- <aside class="sidebar">

        </aside> -->
    </div>
</section>

<?php get_footer() ?>