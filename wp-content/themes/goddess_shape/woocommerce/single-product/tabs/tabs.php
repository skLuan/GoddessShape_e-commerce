<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>

	<!-- contenedor de la descripcion -->
	<div class="woocommerce-tabs wc-tabs-wrapper shadow-gs rounded-lg" id="description-single-product">
		<div class="flex flex-row justify-around items-center p-4 w-full border-y-red-100 border">
			<ul class="flex flex-row justify-around tabs w-full wc-tabs" role="tablist">
				<?php foreach ($product_tabs as $key => $product_tab) : ?>
					<li class="flex text-center flex-row w-full  font-semibold justify-center text-lg text-red-soft px-2<?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
						<a class="text-red-soft lg:text-2xl" href="#tab-<?php echo esc_attr($key); ?>">
							<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php foreach ($product_tabs as $key => $product_tab) : ?>
			<div class="px-5 flex justify-center" id="">
				<div class="bg-white lg:w-4/5 xl:max-w-screen-xl rounded-lg pb-10 items-center woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
					<?php
					if (isset($product_tab['callback'])) {
						call_user_func($product_tab['callback'], $key, $product_tab);
					}
					?>
				</div>
			</div>
		<?php endforeach; ?>

		<?php do_action('woocommerce_product_after_tabs'); ?>
	</div>

<?php endif; ?>