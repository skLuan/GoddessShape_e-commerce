<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
do_action('woocommerce_before_single_product');
?>

<?php while (have_posts()) :
    the_post();
    global $product;

    // Obtener la descripción corta del producto
    $short_description = get_the_excerpt();

    $product_id = get_the_ID(); // ID del producto actual
    $gallery = get_post_meta($product_id, '_product_image_gallery', true); // obtiene la galería de imágenes
    $gallery_array = explode(',', $gallery); // convierte la cadena de IDs de imagen en un array
    if ($product->is_type('variable')) {
        $variations = $product->get_available_variations()[0];

        $price = $product->get_variation_price($variations['variation_id']);
    }
?>
    <!-- card producto-->
    <div class="flex lg:w-full lg:h-120 flex-col lg:flex-row lg:min-w-[240px] bg-transparent rounded-lg last:mr-0 items-center justify-center lg:justify-around mt-6">
        <?php
        get_template_part('components/single-product/pictures', null, ['gallery_array' => $gallery_array]);
        get_template_part('components/single-product/info', null, ['product' => $product, 'price' => $price]);
        ?>

    </div>
    <!-- descripcion del producto -->
    <!-- <div class="flex flex-col w-full items-center lg:items-end justify-center">
        <div class="flex flex-row w-full items-center justify-center">
            <div class="flex flex-row items-center h-8 justify-center w-1/3">
                <h3 class="flex w-full bg-red-semi rounded-full text-center justify-center text-white font-semibold text-lg">Description</h3>
            </div>
        </div>
    </div>     -->
    <?php // wc_get_template_part('content', 'single-product'); 
    do_action('woocommerce_after_single_product_summary');

    get_template_part('components/single-product/description', null, []);

    ?>

<?php endwhile; // end of the loop. 
?>


<!-- carrusel abajo de descripcion del producto -->
<div class="flex flex-col text-center bg-transparent h-20 justify-center ">
    <h2 class="font-champagne_limousines text-28 text-red-soft pt-4 leading-5 w-full font-bold items-center ">Quizas te interese
    </h2>
</div>
<!-- quisas te interece -->
<section class="flex flex-row bg-white-true overflow-x-auto w-full mr-2 p-5">
    <?php
    $args = [
        'limit' => -1,
    ];
    $products = wc_get_products($args);

    foreach ($products as $product) :
    ?>
        <div class="relative flex lg:w-56 flex-col min-w-[240px] bg-transparent rounded-lg mr-10 last:mr-0">
            <?= get_template_part('components/product-cards/part', 'pictureOne', ['product' => $product]) ?>
            <?= get_template_part('components/product-cards/part', 'info', ['product' => $product]) ?>
        </div>
    <?php endforeach;  ?>
</section>
<!--------------------------------------------------------------- nuevos modelos -->
<div class="bg-white-notWhite">
    <?= get_template_part('components/loops/new-models') ?>
</div>
<!-------------------------------------------------------------------------------- -->
<!---------------------------------------------- pay with -->
<?= get_template_part('components/payments') ?>
<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>
<?php
/**
 * woocommerce_sidebar hook.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
