<?php get_header();
$post_id = get_the_ID();
$class = 'lg:max-w-screen-xl mx-auto';
if ($post_id === 106){
    $class = 'lg:max-w-screen-xl';
}
?>
<div class="<?= $class ?>">
    <?php while (have_posts()) :
        the_post();
    ?>  
        <picture class="rounded-lg">
            <img class="rounded-lg" src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </picture>
        <h2 class="text-3xl font-bold text-red-soft my-10 text-center">
            <?= the_title(); ?>
        </h2>
        <div class="text-xl w-2/3 mx-auto mb-10">
            <?= the_content(); ?>
        </div>
    <?php
    endwhile; ?>
</div>
 <?php
 $args = ['title' => 'You may also like'];
 get_template_part('components/loops/loop', 'blog', $args);
 ?>
<?php get_footer() ?>