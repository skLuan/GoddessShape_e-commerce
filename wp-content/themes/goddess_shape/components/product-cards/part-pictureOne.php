<?php
if (isset($args['product'])) {
    $product = $args['product'];
    $product_url = get_permalink($product->get_id());
}
?>
<div class="relative flex rounded-lg pb-3">
    <!-- sombra card nuestros productos -->
    <div class="absolute bg-gray-card w-60 h-72 rounded-lg rotate-6 opacity-20 z-10"></div>
    <a class="bg-white-true z-30 shadow-gs rounded-lg items-center overflow-hidden" href="<?= $product_url ?>">
        <picture class="h-[280px] relative flex">
            <?= $product->get_image('full', ['class' => 'm-auto h-full mx-auto right-5 relative max-w-none w-auto rounded-lg']) ?>
        </picture>
        <!-- boton add cart -->
        <button class="absolute right-2 -bottom-5 h-16 w-16 z-30">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
        </button>
    </a>
</div>