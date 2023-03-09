<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<header class="woocommerce-products-header">
	<?php if (apply_filters('woocommerce_show_page_title', false)) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>

<?php if (is_shop()) : ?>
	<picture class="w-full">
		<img src="<?= IMAGE . 'banners/Nuestros_productos.png' ?>" alt="">
	</picture>
	<div class="relative overflow-hidden grid z-0">
		<picture class="absolute lg:left-1/2 lg:-translate-x-1/2 flex opacity-20 lg:top-0">
			<img class="lg:w-1/2 m-auto -rotate-45" src="<?= IMAGE ?>Home/sol_sin_centro.png" alt="">
		</picture>
		<h2 class="pt-32 text-center font-champagne_limousines text-red-soft font-bold text-28">Nuestros productos</h2>
	</div>
<?php else : if (is_product_category()) ?>
	<?php
	$cat = get_queried_object()->slug;
	$url = IMAGE . 'banners/categories/' . $cat . '.png';
	?>
	<picture class="w-full">
		<img src="<?= $url ?>" alt="">
	</picture>
<?php endif; ?>

<?php
if (woocommerce_product_loop()) :
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	echo '<div class="relative flex flex-col px-5 justify-between p-5 bg-white-notWhite z-10">';
	do_action('woocommerce_before_shop_loop');
	echo '</div>';
?>



<?php
	woocommerce_product_loop_start();

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action('woocommerce_shop_loop');

			wc_get_template_part('components/loops/content-expand', 'product');
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action('woocommerce_after_shop_loop');
else :
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
endif;

?>

<?php if (is_shop()) : //______________________ Es la tienda general? 
?>
	<!--------------------------------------------------------------- nuevos modelos -->
	<?= get_template_part('components/loops/loop', 'discount') ?>
	<div class="my-32">
		<?= get_template_part('components/colections') ?>
		<?= get_template_part('components/colections') ?>
	</div>
	<?= get_template_part('components/loops/new-models') ?>
	<!-------------------------------------------------------------------------------- -->
	<!---------------------------------------------- pay with -->
	<?= get_template_part('components/payments') ?>

	<?= get_template_part('components/guide') ?>

	<?= get_template_part('components/categories') ?>
	<?= get_template_part('components/shop', 'info') ?>

	<?= get_template_part('components/faq') ?>

<?php elseif (is_product_category()) : //___________________Es una pagina de categoria? 
?>
	<?= get_template_part('components/loops/loop', 'discount') ?>
	<?= get_template_part('components/colections') ?>

	<?= get_template_part('components/guide') ?>
	<?= get_template_part('components/loops/new-models') ?>
	<?= get_template_part('components/payments') ?>
	<?= get_template_part('components/shop', 'info') ?>





<?php endif; ?>

<?php




/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */

do_action('woocommerce_after_main_content');
get_footer('shop');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>