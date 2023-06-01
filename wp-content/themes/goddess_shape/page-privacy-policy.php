<?php get_header() ?>
<?php while (have_posts()) :
    the_post();
?>
    <section class="lg:max-w-screen-md mx-auto p-5 my-5 bg-white flex flex-col relative">
        <img class="flex h-20 w-20 lg:h-28 lg:w-28 absolute right-0" src="<?= IMAGE ?>Home/tiempo_degradado3.png" alt="">
        <div class="mx-auto text-2xl max-w-screen-md">
            <h2 class="font-bold text-red-soft text-center !text-4xl my-3"><?= the_title() ?></h2>
            <?= the_content() ?>
        </div>
    </section>
<?php
endwhile;
?>

<?php get_footer() ?>