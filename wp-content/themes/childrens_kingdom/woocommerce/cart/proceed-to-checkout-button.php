<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>

	<!-- Custom svg -->

	<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="white"/>
		<path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="white"/>
	</svg>

	
</a>
