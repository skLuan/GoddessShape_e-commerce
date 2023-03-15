<?php
if (isset($args['product'])) {
    $product = $args['product'];
    $gallery_image_ids = $product->get_gallery_image_ids();
    $product_url = get_permalink($product->get_id());


    if (!empty($gallery_image_ids[0])) $second_image_id = $gallery_image_ids[0];
}
?>
<div class="relative w-full mb-3">
    <!-- sombra card nuestros productos -->
    <!-- <div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div> -->

    <a href="<?= $product_url ?>">
        <div class="justify-center  w-full grid grid-cols-2 gap-3 bg-transparent min-h-[220px] h-full">
            <picture class="shadow-gs rounded-lg bg-white-true col-span-1 flex overflow-hidden">
                <?= $product->get_image('full', ['class' => 'rounded-lg my-auto']) ?>
            </picture>
            <?php
            if (!empty($second_image_id)) :
            ?>
                <picture class="shadow-gs rounded-lg bg-white-true col-span-1 flex">
                    <?= wp_get_attachment_image($second_image_id, 'full', false, ['class' => 'rounded-lg my-auto']) ?>
                </picture>
            <?php else : ?>
                <p>Segunda imagen no disponible</p>
            <?php endif; ?>
        </div>
    </a>
    <!-- boton add cart -->
    <a href="<?= $product_url ?>" class="absolute right-5 -bottom-10 h-16 w-16 z-30">
        <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
    </a>
</div>