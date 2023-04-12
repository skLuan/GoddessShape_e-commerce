<?php

/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button text-xl">
	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<?php
	// do_action('woocommerce_before_add_to_cart_quantity');

	// woocommerce_quantity_input(
	// 	array(
	// 		'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
	// 		'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
	// 		'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
	// 	)
	// );

	// do_action('woocommerce_after_add_to_cart_quantity');

	// Obtener la URL actual de la página del carrito
	$cart_url = wc_get_cart_url();

	// Agregar el parámetro 'added-to-cart' a la URL del carrito
	$cart_url = add_query_arg('added-to-cart', $product->get_id(), $cart_url);
	?>

	<div class="flex flex-col lg:flex-row justify-between mb-5 lg:mb-0">
		<h2 id="butonFit" class="cursor-pointer font-semibold text-xl text-orange-400 underline py-5 text-center lg:ml-9">What is my fit?</h2>
		<button type="submit" class="single_add_to_cart_button h-full lg:my-auto text-white-gs font-bold bg-orange-400 mx-auto py-2 px-5 rounded-full lg:mx-0 button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
			Add to cart
		</button>

	</div>
	<picture id="fitContainer" class="absolute w-screen lg:top-44 -left-5 lg:left-40 lg:w-5/12">
		<img class="shadow-gs rounded-lg w-full" src="<?= IMAGE ?>/guia_de_prendas_1.png" alt="">
	</picture>

	<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>