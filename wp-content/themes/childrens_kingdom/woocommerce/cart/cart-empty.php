<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );
woocommerce_output_all_notices();
if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<p class="return-to-shop">
		
		<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?> ">
			<?php
				/**
				 * Filter "Return To Shop" text.
				 *
				 * @since 4.6.0
				 * @param string $default_text Default text.
				 */
				echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to shop', 'woocommerce' ) ) );
			?>
			<!-- Custom svg -->

			<svg width="31" height="14" viewBox="0 0 31 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21.875 6.125H0V7.875H21.875V6.125Z" fill="white"/>
				<path d="M24.8076 10.2368C26.9404 8.31579 29.21 7.42105 30.5498 7C29.21 6.57895 26.9404 5.68421 24.8076 3.76316C23.3037 2.42105 22.374 1.02632 21.7998 0V7V14C22.374 12.9737 23.3037 11.5789 24.8076 10.2368Z" fill="white"/>
			</svg>

		</a>
	</p>
	<svg width="149" height="120" viewBox="0 0 149 120" fill="none" xmlns="http://www.w3.org/2000/svg" class='ck_svg'>
	<path d="M87.3234 17.1095L87.5175 17.834L88.2419 17.6399L101.985 13.9574L113.457 56.7727L15.8845 82.9173L4.4122 40.102L18.1554 36.4195L18.8798 36.2254L18.6857 35.501L15.3862 23.187L37.0384 17.3852L40.338 29.6993L40.5321 30.4237L41.2565 30.2296L65.1408 23.8298L65.8652 23.6357L65.6711 22.9113L62.3716 10.5972L84.0238 4.79554L87.3234 17.1095Z" stroke="#33D1C1" stroke-width="1.5"/>
	<path d="M138.613 95.6973L138.316 96.386L139.004 96.683L145.192 99.3518L136.713 119.014L91.0232 99.3091L99.5031 79.647L105.691 82.3157L106.38 82.6127L106.677 81.924L109.053 76.4153L118.656 80.5569L116.28 86.0656L115.983 86.7543L116.671 87.0513L128.024 91.9474L128.713 92.2444L129.01 91.5558L131.386 86.047L140.989 90.1886L138.613 95.6973Z" stroke="#FFC231" stroke-width="1.5"/>
	</svg>

<?php endif; ?>
