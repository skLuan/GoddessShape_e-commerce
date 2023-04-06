<?php get_header() ?>
    <div id="blog-page" class="flex flex-col py-4 w-[90%] lg:w-[60%] ">
        <div class="">
        <h1 class="text-center text-2xl md:text-3xl font-semibold py-2 text-red-soft  ">Blog</h1>
        </div>
        <div class="flex flex-col ">
        <?php while (have_posts()):
            the_post();
            ?>
            <h3 class="text-red-soft font-bold text-xl"><?= the_title() ?></h3>
            <p class=""><?= the_ID() ?></p>
            <?php endwhile; ?>
        </div>    
    </div>

<?php get_footer() ?>