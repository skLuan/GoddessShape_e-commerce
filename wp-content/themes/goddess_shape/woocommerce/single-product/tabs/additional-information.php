<?php

/**
 * Additional Information tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/additional-information.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

defined('ABSPATH') || exit;

global $product;

$heading = apply_filters('woocommerce_product_additional_information_heading', __('Additional information', 'woocommerce'));

?>

<?php if ($heading) : ?>
	<h2><?php echo esc_html($heading); ?></h2>
<?php endif; ?>
<?php do_action('woocommerce_product_additional_information', $product); ?>
<div class="w-full text-black-gs ml-56">
	<p><h3>WASHING INSTRUCTIONS</h3></p>
	<ul class="list-disc list-inside text-xl">
		<li>
			Hand wash, keeping the badge closed.
		</li>
		<li>
			Wash in cold water.
		</li>
		<li>
			Do not use bleach.
		</li>
		<li>
			Do not twist.
		</li>
		<li>
			Do not dry at high temperatures.
		</li>
		<li>
			Do not iron or tumble dry.
		</li>
		<li>
			Wash them separately.
		</li>
	</ul>
</div>