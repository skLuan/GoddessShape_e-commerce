<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('relative flex flex-col w-56 h-120 bg-transparent rounded-lg mr-5 last:mr-0', $product); ?>>
	<div class="relative flex w-56 h-120 rounded-lg">
		<!-- sombra card nuestros productos -->
		<div class="absolute bg-gray-card w-52 h-64 rounded-lg rotate-6 opacity-20 shadow-2xl"></div>
		<div class="absolute justify-center h-56 shadow-xl w-52 ">
			<div class=" rounded-full shadow-2xl">
				<?= $product->get_image('full') ?>
			</div>
		</div>
		<!-- boton add cart -->
		<button class="absolute right-5 -bottom-5 h-16 w-16 z-30">
			<img src="<?= get_stylesheet_directory_uri() ?>/assets/img/Home/sol-2.png" alt="">
		</button>
	</div>
	<!-- contenedor info -->
	<div class="flex flex-col z-20 h-80 px-5 py-2 justify-around w-52 bg-white shadow-2xl rounded-lg">

		<div class="flex">
			<div>
				<a href="<?= $product_url ?>">
					<h2 class="text-color-secondary font-bold font-champagne_limousines text-lg font-base"><?= $product->get_name() ?></h2>
				</a>
			</div>
		</div>
		<!-- tallas y colores -->

		<div class="mb-2">
			<h2 class="font-base font-light text-gray-400">available in:</h2>
			<div class="flex h-7 bg-white justify-between text-black-gs text-l font-semibold">
				<?php
				$at = explode(", ", $product->get_attribute('size'));
				// var_dump($at);
				foreach ($at as $val) {
					echo '<h2>' . $val . '</h2>';
				}
				?>
			</div>
			<div class="flex w-1/2 pt-1 h-7 bg-white ">
				<div class="flex flex-row justify-around w-full">
					<!-- <div class="flex flex-row h-3 w-3 bg-orange-300 rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-red-soft rounded-full mx-auto my-2"></div>
                            <div class="flex flex-row h-3 w-3 bg-green-600 rounded-full mx-auto my-2"></div> -->
					<?php
					$at = explode(", ", $product->get_attribute('color'));

					foreach ($at as $key => $value) :
						if ($key > 0) {

							switch ($value) {
								case 'white':
									echo '<div class="flex flex-row h-3 w-3 bg-white border border-black-gs rounded-full mx-auto my-2"></div>';
								case 'black':
									echo '<div class="flex flex-row h-3 w-3 bg-black-gs rounded-full mx-auto my-2"></div>';
									break;
								default:
									echo "";
									break;
							}
						}
					?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- precio - card -->
		<div class="flex flex-row font-semibold">
			<h3 class="flex ml-auto gs-black">$<?= $product->get_price() ?></h3>
			<!-- <div class="flex w-1/3 h-7 bg-white ">
                        <h3 class="flex text-gray-400 line-through">$60.6</h3>
                    </div> -->
		</div>
	</div>
	<?php
	// /**
	//  * Hook: woocommerce_before_shop_loop_item.
	//  *
	//  * @hooked woocommerce_template_loop_product_link_open - 10
	//  */
	// do_action( 'woocommerce_before_shop_loop_item' );

	// /**
	//  * Hook: woocommerce_before_shop_loop_item_title.
	//  *
	//  * @hooked woocommerce_show_product_loop_sale_flash - 10
	//  * @hooked woocommerce_template_loop_product_thumbnail - 10
	//  */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	// /**
	//  * Hook: woocommerce_shop_loop_item_title.
	//  *
	//  * @hooked woocommerce_template_loop_product_title - 10
	//  */
	// do_action( 'woocommerce_shop_loop_item_title' );

	// /**
	//  * Hook: woocommerce_after_shop_loop_item_title.
	//  *
	//  * @hooked woocommerce_template_loop_rating - 5
	//  * @hooked woocommerce_template_loop_price - 10
	//  */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	// /**
	//  * Hook: woocommerce_after_shop_loop_item.
	//  *
	//  * @hooked woocommerce_template_loop_product_link_close - 5
	//  * @hooked woocommerce_template_loop_add_to_cart - 10
	//  */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>