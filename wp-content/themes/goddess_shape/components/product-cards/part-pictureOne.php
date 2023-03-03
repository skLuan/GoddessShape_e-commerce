<?php
if (isset($args['product'])) {
    $product = $args['product'];
}
?>
<div class="relative flex rounded-lg pb-5 min-h-[220px] h-full">
    <!-- sombra card nuestros productos -->
    <div class="absolute bg-gray-card w-52 h-72 rounded-lg rotate-6 opacity-20 z-10"></div>
    <picture class="bg-white-true z-30 flex shadow-gs h-full rounded-lg">
        <?= $product->get_image('full', ['class' => 'my-auto h-full rounded-lg']) ?>
    </picture>
    <!-- boton add cart -->
    <button class="absolute right-2 -bottom-5 h-16 w-16 z-30">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
    </button>
</div>