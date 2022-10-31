<?php
/**
 * childrens_kingdom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package childrens_kingdom
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function childrens_kingdom_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on childrens_kingdom, use a find and replace
		* to change 'childrens_kingdom' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'childrens_kingdom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'childrens_kingdom' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'childrens_kingdom_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'childrens_kingdom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function childrens_kingdom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'childrens_kingdom_content_width', 640 );
}
add_action( 'after_setup_theme', 'childrens_kingdom_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function childrens_kingdom_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'childrens_kingdom' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'childrens_kingdom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'childrens_kingdom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function childrens_kingdom_scripts() {
	wp_enqueue_style( 'childrens_kingdom-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'childrens_kingdom-style', 'rtl', 'replace' );

	wp_enqueue_script( 'childrens_kingdom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'childrens_kingdom_js', get_template_directory_uri() . '/js/childrens_kingdom.js', array('jquery'), _S_VERSION, true );

	wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
	wp_enqueue_style('fontawesome');

	wp_register_script('flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'));
	wp_enqueue_script('flickity-script');

	wp_register_script('aos_script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'));
	wp_enqueue_script('aos_script');
	
	wp_register_script('anime_js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', array('jquery'));
	wp_enqueue_script('anime_js');

	wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js', array('jquery'));
	wp_enqueue_script('gsap');

	wp_register_script('scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js', array('jquery'));
	wp_enqueue_script('scrollTrigger');

	wp_register_script('jquery_validate',site_url().'/wp-content/themes/childrens_kingdom/js/jquery.validate.min.js', array('jquery'));
	wp_enqueue_script('jquery_validate');

	

	wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('aos');

	wp_register_style('flickity-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	wp_enqueue_style('flickity-css');


	wp_localize_script( 
	
		'childrens_kingdom_js', 'childrens_kingdom_js_object',
		
		array( 
			'ajax_url' => admin_url( 'admin-ajax.php' ) 
		)
		 
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'childrens_kingdom_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'woocommerce_cart_coupon', 'woocommerce_empty_cart_button' );
function woocommerce_empty_cart_button() {
	echo '<a href="' . esc_url( add_query_arg( 'empty_cart', 'yes' ) ) . '" class="button empty-cart-btn" title="' . esc_attr( 'Empty Cart', 'woocommerce' ) . '">' . esc_html( 'Empty Cart', 'woocommerce' ) . '</a>';
}

add_action( 'wp_loaded', 'woocommerce_empty_cart_action', 20 );
function woocommerce_empty_cart_action() {
	if ( isset( $_GET['empty_cart'] ) && 'yes' === esc_html( $_GET['empty_cart'] ) ) {
		WC()->cart->empty_cart();

		$referer  = wp_get_referer() ? esc_url( remove_query_arg( 'empty_cart' ) ) : wc_get_cart_url();
		wp_safe_redirect( $referer );
	}
}


function bbloomer_cart_refresh_update_qty() { 
	if (is_cart()) { 
	   ?>      
	   <script>
		 jQuery('div.woocommerce').on('change', '.qty', function(){
			 jQuery("[name='update_cart']").prop("disabled", false);
			 jQuery("[name='update_cart']").trigger("click");
		 });
		 </script>
	   <?php 
	} 
 }
 add_action( 'wp_footer', 'bbloomer_cart_refresh_update_qty');



/* Coupon code form shortcode */

add_shortcode( 'coupon_field', 'display_coupon_field' );
function display_coupon_field() {
	if(is_cart() && WC()->cart->cart_contents_count > 0){
    if( isset($_GET['coupon']) && isset($_GET['redeem-coupon']) ){
        if( $coupon = esc_attr($_GET['coupon']) ) {
            $applied = WC()->cart->apply_coupon($coupon);
        } else {
            $coupon = false;
        }

        $success = sprintf( __('Coupon "%s" Applied successfully.'), $coupon );
        $error   = __("This Coupon can't be applied");

        $message = isset($applied) && $applied ? $success : $error;
    }

    $output  = '<div class="redeem-coupon-component rounded-corner-right mt-100">
	<h1 class="white-text m-0 w-40">Coupon code or gift card code:</h1>
	<div class="coupon-form-container"><form id="coupon-redeem">
    <p><input type="text" class="text-white" name="coupon" id="coupon" placeholder="Coupon code"/>
    <input type="submit" name="redeem-coupon" value="'.__('Appliquer').'" /></p></div></form>';
	
    $output .= isset($coupon) ? '<p class="result">'.$message.'</p></div>' : '';
	}else{
		$output = "<div class='w-100 mt-60'></div>";
	}
    return $output;
}

add_filter( 'comment_form_fields', 'codeless_woo_comment_form_fields', 9 );
function codeless_woo_comment_form_fields( $fields ){
    if( function_exists('is_product') && is_product()  ){
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;
    }
    return $fields;
}

add_filter( 'comment_form_defaults', 'render_pros_cons_fields_for_anonymous_users', 10, 1 );
add_action( 'comment_form_top', 'render_pros_cons_fields_for_authorized_users' );
function get_pros_cons_fields_html() {
	ob_start();
	?>
	
	<div class="form-row">
			<label for="title">Title</label>
			<input id="review_title" name="review_title" type="text" class="w-100" placeholder="Review title...">
	</div>
	<?php
	return ob_get_clean();
}

function render_pros_cons_fields_for_authorized_users() {
	if ( ! is_product() || ! is_user_logged_in() ) {
		return;
	}
	
	echo get_pros_cons_fields_html();
}

function render_pros_cons_fields_for_anonymous_users( $defaults ) {
	if ( ! is_product() || is_user_logged_in() ) {
		return;
	}
	
	$defaults['comment_notes_before'] .= get_pros_cons_fields_html();
	
	return $defaults;
}


add_action( 'comment_post', 'save_custom_fields', 10, 3 );
function save_custom_fields( $comment_id, $approved, $commentdata ) {

	$title = isset( $_POST['review_title'] ) ? $_POST['review_title'] : '';
	
	// Spammers and hackers love to use comments to do XSS attacks.
	// Don't forget to escape the variables
	update_comment_meta( $comment_id, 'review_title', esc_html( $title ) );

}

add_filter( 'comment_text', 'add_custom_fields_to_comment_text', 10, 1 );
function add_custom_fields_to_comment_text( $text ) {
	// We don't want to modify a comment's text in the admin, and we don't need to modify the text of blog post comments
	if ( is_admin() || ! is_product() ) {
		return $text;
	}
	
	$title = get_comment_meta( get_comment_ID(), 'review_title', true );
	
	$title_html = '<h4>' . esc_html( $title ) . '</h4>';
	
	$updated_text = $title_html . $text;
	
	return $updated_text;
}

add_action( 'edit_comment', 'save_pcf_changes', 10, 1 );
function save_pcf_changes( $comment_id ) {
	// First of all, let's validate the nonce
	if ( ! isset( $_POST['pcf_metabox_nonce'] ) || ! wp_verify_nonce( $_POST['pcf_metabox_nonce'], 'pcf_metabox_update') ) {
		wp_die( 'You can not do this action' );
	}
	
	if ( isset( $_POST['review_title'] ) ) {
		$title = $_POST['review_title'];
		update_comment_meta( $comment_id, 'review_title', esc_html( $title ) );
	}

	
}

/* Change "Return to shop" URL */

function wc_empty_cart_redirect_url() {
	return site_url();
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );




/* Contact form action */

add_action('wp_ajax_nopriv_ck_contact', 'ck_contact');
add_action('wp_ajax_ck_contact', 'ck_contact');
function ck_contact(){
$headers = [];

	// $to = get_option('admin_email');
	$to = 'jawadelhajjamiofficiel@gmail.com';

	$subject = '[Children\'s Kingdom - contact form] : '. sanitize_text_field($_POST['sujet']);

	$body = "<div style='background-color:#EFF3F6; padding:20px; font-size:18px;'>";
	$body .= '<h3 style="">Message: </h3>';
	$body .= '<p>' . sanitize_text_field($_POST['message']) . '</p>';
	$body .= '<h3 style="color:#33D1C1;" >Contact informations: </h3>';
	$body .= '<p>';
	$body .= '<span style="font-weight:bold;">Name: </span>' . sanitize_text_field($_POST['full_name']);
	$body .= '<br>';
	$body .= '<span style="font-weight:bold;">Email: </span>' . sanitize_text_field($_POST['contact_email']);
	$body .= '<br>';
	$body .= '</p>';
	$body .= '</div>';
	$headers = array('Content-Type: text/html; charset=UTF-8');
	
	$is_sent = wp_mail($to, $subject, $body, $headers);
	if($is_sent){
		wp_send_json(['message' => 'Votre message a été envoyé avec succès', 'error' => false]);
	}
	
	wp_send_json(['message' => 'Une erreur s\'est produite. Veuillez réessayer', 'error' => true]);
}

