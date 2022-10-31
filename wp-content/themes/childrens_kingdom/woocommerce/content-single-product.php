<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

<div class="summary entry-summary">
	<?php
	// echo "<h1 class='product-title m-0'>".$product->get_name()."</h1>";
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		
		$return = "<div class='delivery_msg'>";
			$return .= "<div class='icon'>";
				$return .= '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="20" cy="20" r="20" fill="#FFE198"/>
				<g clip-path="url(#clip0_0_1)">
				<path d="M25.25 14.7495H23.675C23.5009 13.9031 23.0404 13.1425 22.3709 12.5961C21.7015 12.0496 20.8642 11.7506 20 11.7495H14.75C13.7558 11.7507 12.8027 12.1462 12.0997 12.8492C11.3967 13.5522 11.0012 14.5053 11 15.4995V22.2495C11.0019 22.9212 11.2292 23.5729 11.6454 24.1001C12.0617 24.6273 12.6428 24.9996 13.2958 25.1573C13.2251 25.5326 13.2372 25.9188 13.3311 26.289C13.4251 26.6592 13.5988 27.0044 13.8399 27.3006C14.0811 27.5967 14.384 27.8367 14.7275 28.0037C15.071 28.1707 15.4468 28.2608 15.8286 28.2676C16.2105 28.2744 16.5893 28.1978 16.9385 28.0431C17.2877 27.8885 17.5989 27.6595 17.8505 27.3721C18.1021 27.0847 18.2879 26.7459 18.395 26.3793C18.5022 26.0127 18.528 25.6271 18.4708 25.2495H21.5323C21.513 25.3736 21.5027 25.4989 21.5015 25.6245C21.5015 26.3207 21.7781 26.9884 22.2703 27.4807C22.7626 27.973 23.4303 28.2495 24.1265 28.2495C24.8227 28.2495 25.4904 27.973 25.9827 27.4807C26.4749 26.9884 26.7515 26.3207 26.7515 25.6245C26.7507 25.4677 26.7353 25.3113 26.7057 25.1573C27.3584 24.9993 27.9392 24.6269 28.3552 24.0997C28.7711 23.5725 28.9982 22.921 29 22.2495V18.4995C28.9988 17.5053 28.6033 16.5522 27.9003 15.8492C27.1973 15.1462 26.2442 14.7507 25.25 14.7495ZM27.5 18.4995V19.2495H23.75V16.2495H25.25C25.8467 16.2495 26.419 16.4866 26.841 16.9085C27.2629 17.3305 27.5 17.9028 27.5 18.4995ZM12.5 22.2495V15.4995C12.5 14.9028 12.7371 14.3305 13.159 13.9085C13.581 13.4866 14.1533 13.2495 14.75 13.2495H20C20.5967 13.2495 21.169 13.4866 21.591 13.9085C22.0129 14.3305 22.25 14.9028 22.25 15.4995V23.7495H14C13.6022 23.7495 13.2206 23.5915 12.9393 23.3102C12.658 23.0289 12.5 22.6473 12.5 22.2495ZM17 25.6245C17 25.9229 16.8815 26.209 16.6705 26.42C16.4595 26.631 16.1734 26.7495 15.875 26.7495C15.5766 26.7495 15.2905 26.631 15.0795 26.42C14.8685 26.209 14.75 25.9229 14.75 25.6245C14.7505 25.4963 14.7741 25.3693 14.8197 25.2495H16.9303C16.9759 25.3693 16.9995 25.4963 17 25.6245ZM24.125 26.7495C23.8266 26.7495 23.5405 26.631 23.3295 26.42C23.1185 26.209 23 25.9229 23 25.6245C23.0003 25.4963 23.024 25.3693 23.0697 25.2495H25.1803C25.226 25.3693 25.2497 25.4963 25.25 25.6245C25.25 25.9229 25.1315 26.209 24.9205 26.42C24.7095 26.631 24.4234 26.7495 24.125 26.7495ZM26 23.7495H23.75V20.7495H27.5V22.2495C27.5 22.6473 27.342 23.0289 27.0607 23.3102C26.7794 23.5915 26.3978 23.7495 26 23.7495Z" fill="#23234A"/>
				</g>
				<defs>
				<clipPath id="clip0_0_1">
				<rect width="18" height="18" fill="white" transform="translate(11 11)"/>
				</clipPath>
				</defs>
				</svg>
				';
				$return .= "</div>";	
				$return .= "<p class='w-75'>For delivery between Friday, Jan 28 and Wednesday, Feb 02.</p>";
		$return .= "</div>";


		echo $return;

		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );

	$html = "<div class='sticky_add_to_cart'>";
	
	if ( ! is_a( $product, 'WC_Product' ) ) {
		$product = wc_get_product( get_the_id() );
	}
	
	$product_name =  $product->get_name();
	$product_details = $product->get_data();
	$product_short_description = $product_details['short_description'];
	$product_featured_image = $product->get_image('thumbnail');
	$product_id = get_the_id();

	$html .= "<div class='product_info'>";
		$html .= "<div>".$product_featured_image."</div>";

		$html .= "<div><h4 class='mt-0 mb-0'>". $product_name ."</h4>";
		$html .= "<p class='opacity-70 w-400 mt-0 mb-0'>".$product_short_description."</p></div>";
		
	$html .= "</div>";
	$html .= "<div class='btns_container'><a href='".$product->add_to_cart_url()."' class='ck_button w-300 add_to_cart_sticky'>add to cart</a>";
	$html .= "<input type='number' name='quantity' id='qte_sticky' min='1' value='1' step='1'></div>";

	$html .= "<input type='hidden' name='product_id' id='product_id_sticky' value='".$product_id."'>";

	$html .= "</div>";

	echo $html;

	?>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
