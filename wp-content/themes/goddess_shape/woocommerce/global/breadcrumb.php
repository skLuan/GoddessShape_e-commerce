<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	echo $wrap_before;

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ):
			if($crumb[0] === "Home"){
				$crumb[0] = "Shop";
				$crumb[1] = get_permalink(wc_get_page_id('shop'));
			}
			echo '<a class="text-2xl text-red-soft mx-1 py-2" href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		else:
			if(!is_product() && !is_shop()):
			echo '<span class="text-red-semi text-xl mx-1">';
			echo esc_html( $crumb[0] );
			echo '</span>';
			endif;
		endif;
		echo $after;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			$delimiter = '<img class="h-[15px] my-auto" width="15px" height="15px" src="'. get_stylesheet_directory_uri() .'/assets/img/sidebar/i-sun-select-sidebar.png" />';
			echo $delimiter;
		}
	}
	echo $wrap_after;

}
