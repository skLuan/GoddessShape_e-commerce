<?php
if (isset($args['product'])) {
    $product = $args['product'];
}
?>
<div class="relative w-full mb-5">
    <!-- sombra card nuestros productos -->
    <!-- <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div> -->
    <div class="justify-center  w-full grid grid-cols-2 gap-3 bg-transparent min-h-[220px] h-full">
        <picture class="shadow-gs rounded-lg bg-white-true col-span-1 flex ">
            <?= $product->get_image('full', ['class' => 'rounded-lg my-auto']) ?>
        </picture>
        <picture class="shadow-gs rounded-lg bg-white-true col-span-1 flex">
            <?= $product->get_image('full', ['class' => 'rounded-lg my-auto']) ?>
        </picture>
    </div>
    <!-- boton add cart -->
    <button class="absolute right-5 -bottom-10 h-16 w-16 z-30">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
    </button>
</div>