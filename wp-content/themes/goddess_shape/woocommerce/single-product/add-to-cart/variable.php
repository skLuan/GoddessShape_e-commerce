<?php

/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined('ABSPATH') || exit;

global $product;

$attribute_keys  = array_keys($attributes);
$variations_json = wp_json_encode($available_variations);
$variations_attr = function_exists('wc_esc_json') ? wc_esc_json($variations_json) : _wp_specialchars($variations_json, ENT_QUOTES, 'UTF-8', true);

$variation_attributes = $product->get_variation_attributes();

do_action('woocommerce_before_add_to_cart_form'); ?>

<form class="variations_form cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint($product->get_id()); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. 
																																																																						?>">
	<?php do_action('woocommerce_before_variations_form'); ?>

	<?php if (empty($available_variations) && false !== $available_variations) : ?>
		<p class="stock out-of-stock"><?php echo esc_html(apply_filters('woocommerce_out_of_stock_message', __('This product is currently out of stock and unavailable.', 'woocommerce'))); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0" role="presentation">
			<tbody>
				<?php foreach ($attributes as $attribute_name => $options) :
					$attribute_id = wc_attribute_taxonomy_id_by_name($attribute_name);


				?>
					<tr>
						<th class="label font-normal text-xl align-bottom"><label class="mt-auto flex" for="<?php echo esc_attr(sanitize_title($attribute_name)); ?>"><?php echo wc_attribute_label($attribute_name); // WPCS: XSS ok. 
																																	?></label></th>
						<td class="value relative">
							<div class="flex flex-row -translate-x-3 lg:hidden relative my-3 lg:absolute lg:left-full lg:top-0">
								<?php
								if ($attribute_name === 'pa_color') :
									foreach ($options as $color) :
										$term = get_term_by('slug', $color, 'pa_color');
								?>
										<button value="<?= $color ?>" class="label-btn transition-all w-7 h-7 first:ml-0 mx-1 lg:mx-3 rounded-full" style="background-color: <?= $term->description ?>;"></button>
								<?php

									endforeach;
								endif;
								?>
							</div>
							<?php

							wc_dropdown_variation_attribute_options(
								array(
									'options'   => $options,
									'attribute' => $attribute_name,
									'product'   => $product,
									'class' => 'py-1 px-3 font-bold text-black-gsSoft text-lg',
								)
							);
							echo end($attribute_keys) === $attribute_name ? wp_kses_post(apply_filters('woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__('Clear', 'woocommerce') . '</a>')) : '';
							?>

							<div class="hidden lg:flex flex-row lg:absolute lg:left-full lg:top-0">
								<?php
								if ($attribute_name === 'pa_color') :
									foreach ($options as $color) :
										$term = get_term_by('slug', $color, 'pa_color');
								?>
										<button value="<?= $color ?>" class="label-btn transition-all w-7 h-7 first:ml-0 mx-1 lg:mx-3 rounded-full" style="background-color: <?= $term->description ?>;"></button>
								<?php

									endforeach;
								endif;
								?>
							</div>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php do_action('woocommerce_after_variations_table'); ?>

		<div class="single_variation_wrap">
			<?php
			/**
			 * Hook: woocommerce_before_single_variation.
			 */
			do_action('woocommerce_before_single_variation');

			/**
			 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
			 *
			 * @since 2.4.0
			 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
			 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
			 */
			do_action('woocommerce_single_variation');

			/**
			 * Hook: woocommerce_after_single_variation.
			 */
			do_action('woocommerce_after_single_variation');
			?>
		</div>
	<?php endif; ?>

	<?php do_action('woocommerce_after_variations_form'); ?>
</form>

<?php
do_action('woocommerce_after_add_to_cart_form');
