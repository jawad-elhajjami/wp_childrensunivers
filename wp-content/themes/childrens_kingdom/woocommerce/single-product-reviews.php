<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.3.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! comments_open() ) {
	return;
}

?>
<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<div class='reviews_section_header'>
			<div class='reviews_section_title'>
			<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M40 20C40 31.0457 31.0457 40 20 40C8.9543 40 0 31.0457 0 20C0 8.9543 8.9543 0 20 0C31.0457 0 40 8.9543 40 20Z" fill="#FFE198"/>
					<g clip-path="url(#clip0_712_1626)">
					<path d="M20 19.5C19.4033 19.5 18.831 19.2629 18.409 18.841C17.9871 18.419 17.75 17.8467 17.75 17.25C17.75 16.6533 17.9871 16.081 18.409 15.659C18.831 15.2371 19.4033 15 20 15C20.5967 15 21.169 15.2371 21.591 15.659C22.0129 16.081 22.25 16.6533 22.25 17.25C22.25 17.8467 22.0129 18.419 21.591 18.841C21.169 19.2629 20.5967 19.5 20 19.5V19.5ZM17.726 23.4367C17.8802 22.9549 18.1836 22.5345 18.5922 22.2362C19.0009 21.938 19.4937 21.7772 19.9996 21.7772C20.5056 21.7772 20.9984 21.938 21.407 22.2362C21.8157 22.5345 22.119 22.9549 22.2733 23.4367C22.323 23.6295 22.4472 23.7946 22.6187 23.8957C22.7901 23.9969 22.9948 24.0257 23.1875 23.976C23.3802 23.9263 23.5453 23.802 23.6465 23.6306C23.7476 23.4591 23.7765 23.2545 23.7267 23.0617C22.7435 19.3515 17.2543 19.353 16.274 23.0617C16.2469 23.1579 16.2393 23.2584 16.2516 23.3576C16.2639 23.4567 16.2959 23.5523 16.3457 23.6389C16.3955 23.7255 16.462 23.8012 16.5415 23.8617C16.6209 23.9223 16.7117 23.9663 16.8084 23.9913C16.9051 24.0162 17.0058 24.0216 17.1046 24.0072C17.2034 23.9927 17.2983 23.9586 17.3838 23.907C17.4693 23.8553 17.5436 23.7871 17.6023 23.7064C17.6611 23.6256 17.7031 23.534 17.726 23.4367V23.4367ZM20.0067 29.7488C19.6367 29.749 19.2796 29.6131 19.0032 29.367L16.1922 27H14C13.2044 27 12.4413 26.6839 11.8787 26.1213C11.3161 25.5587 11 24.7956 11 24V15C11 14.2044 11.3161 13.4413 11.8787 12.8787C12.4413 12.3161 13.2044 12 14 12H26C26.7956 12 27.5587 12.3161 28.1213 12.8787C28.6839 13.4413 29 14.2044 29 15V24C29 24.7956 28.6839 25.5587 28.1213 26.1213C27.5587 26.6839 26.7956 27 26 27H23.8602L20.975 29.385C20.7077 29.6207 20.3632 29.7502 20.0067 29.7488V29.7488ZM14 13.5C13.6022 13.5 13.2206 13.658 12.9393 13.9393C12.658 14.2206 12.5 14.6022 12.5 15V24C12.5 24.3978 12.658 24.7794 12.9393 25.0607C13.2206 25.342 13.6022 25.5 14 25.5H16.4668C16.6435 25.5 16.8145 25.5624 16.9498 25.6763L19.9843 28.2338L23.1132 25.6718C23.2477 25.5607 23.4166 25.5 23.591 25.5H26C26.3978 25.5 26.7794 25.342 27.0607 25.0607C27.342 24.7794 27.5 24.3978 27.5 24V15C27.5 14.6022 27.342 14.2206 27.0607 13.9393C26.7794 13.658 26.3978 13.5 26 13.5H14Z" fill="#23234A"/>
					</g>
					<defs>
					<clipPath id="clip0_712_1626">
					<rect width="18" height="18" fill="white" transform="translate(11 12)"/>
					</clipPath>
					</defs>
			</svg>
			<h3>Customer reviews</h3>
		</div>

		<div class="reviews_stats_container">
			<div class="stats">
				<h2 class='average_rating worksans-font'>
					<?php echo $product->get_average_rating(); ?>
				</h2>
				<div class="Stars" style="--rating: <?php echo $product->get_average_rating() ?>;"></div>
				<p><?php echo $product->get_review_count() . " Reviews"; ?></p>
				
			</div>
			<button class='ck_button w-300'>

			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_2_9051)">
				<path d="M15.2353 0.765303C14.7821 0.312767 14.1678 0.0585938 13.5273 0.0585938C12.8869 0.0585938 12.2726 0.312767 11.8193 0.765303L0.976677 11.608C0.666178 11.9167 0.419985 12.284 0.252342 12.6885C0.0846994 13.093 -0.00106532 13.5268 9.98748e-06 13.9646V15.3333C9.98748e-06 15.5101 0.0702479 15.6797 0.195272 15.8047C0.320296 15.9297 0.489866 16 0.666677 16H2.03534C2.47318 16.0012 2.90692 15.9156 3.31145 15.748C3.71597 15.5805 4.08325 15.3344 4.39201 15.024L15.2353 4.18064C15.6877 3.72743 15.9417 3.11328 15.9417 2.47297C15.9417 1.83266 15.6877 1.21851 15.2353 0.765303ZM3.44934 14.0813C3.07335 14.4548 2.56532 14.6651 2.03534 14.6666H1.33334V13.9646C1.33267 13.7019 1.38411 13.4417 1.4847 13.1989C1.58529 12.9562 1.73302 12.7359 1.91934 12.5506L10.148 4.32197L11.6813 5.8553L3.44934 14.0813ZM14.292 3.23797L12.6213 4.9093L11.088 3.3793L12.7593 1.70797C12.86 1.60751 12.9795 1.52786 13.111 1.47358C13.2424 1.41929 13.3833 1.39143 13.5255 1.39158C13.6677 1.39174 13.8086 1.41991 13.9399 1.47448C14.0712 1.52905 14.1905 1.60896 14.291 1.70964C14.3915 1.81032 14.4711 1.9298 14.5254 2.06126C14.5797 2.19272 14.6075 2.33359 14.6074 2.47581C14.6072 2.61804 14.5791 2.75885 14.5245 2.89019C14.4699 3.02153 14.39 3.14084 14.2893 3.2413L14.292 3.23797Z" fill="white"/>
				</g>
				<defs>
				<clipPath id="clip0_2_9051">
				<rect width="16" height="16" fill="white"/>
				</clipPath>
				</defs>
			</svg>

			<p>WRITE A REVIEW</p>
		</button>
		</div>

		</div>
		<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id() ) ) : ?>
		<div id="review_form_wrapper">
			<div id="review_form">
				<?php
				$commenter    = wp_get_current_commenter();
				$comment_form = array(
					/* translators: %s is product title */
					'title_reply'         => have_comments() ? esc_html__( 'Add a review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
					/* translators: %s is product title */
					'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
					'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
					'title_reply_after'   => '</span>',
					'comment_notes_after' => '',
					'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
					'logged_in_as'        => '',
					'comment_field'       => '',
				);

				$name_email_required = (bool) get_option( 'require_name_email', 1 );
				$fields              = array(
					'author' => array(
						'label'    => __( 'Name', 'woocommerce' ),
						'type'     => 'text',
						'value'    => $commenter['comment_author'],
						'required' => $name_email_required,
					),
					'email'  => array(
						'label'    => __( 'Email', 'woocommerce' ),
						'type'     => 'email',
						'value'    => $commenter['comment_author_email'],
						'required' => $name_email_required,
					),
				);

				$comment_form['fields'] = array();

				foreach ( $fields as $key => $field ) {
					$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
					$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

					if ( $field['required'] ) {
						$field_html .= '&nbsp;<span class="required">*</span>';
					}

					$field_html .= '</label><input id="' . esc_attr( $key ) . '" name="' . esc_attr( $key ) . '" type="' . esc_attr( $field['type'] ) . '" value="' . esc_attr( $field['value'] ) . '" size="30" ' . ( $field['required'] ? 'required' : '' ) . ' /></p>';

					$comment_form['fields'][ $key ] = $field_html;
				}

				$account_page_url = wc_get_page_permalink( 'myaccount' );
				if ( $account_page_url ) {
					/* translators: %s opening and closing link tags respectively */
					$comment_form['must_log_in'] = '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), '<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) . '</p>';
				}

				if ( wc_review_ratings_enabled() ) {
					$comment_form['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;<span class="required">*</span>' : '' ) . '</label><select name="rating" id="rating" required>
						<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
						<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
						<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
						<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
						<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
						<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
					</select></div>';
				}

				$comment_form['comment_field'] .= '<p class="comment-form-comment"><label style="display:none;" for="comment">';
				$comment_form['comment_field'] .= esc_html__( 'Your review', 'woocommerce' );
				$comment_form['comment_field'] .= '&nbsp;<span class="required">*</span></label><textarea style="display:none;" id="comment" name="comment" cols="45" rows="8" required></textarea></p>';
				$comment_form['comment_field'] .= '<div>'.wp_editor('', 'test_id',array  ('tinymce' => true,'textarea_name'=>'comment')).'</div>';
				$comment_form['comment_field'] .= '<span id="text-error" class="review_text_error error mb-40"></span>';
				$comment_form['comment_field'] .= '<div class="email_and_name_container"></div>';

				comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
				?>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
	<?php endif; ?>
		<h2 class="woocommerce-Reviews-title">
			<?php
			$count = $product->get_review_count();
			if ( $count && wc_review_ratings_enabled() ) {
				/* translators: 1: reviews count 2: product name */
				$reviews_title = sprintf( esc_html( _n( '%1$s review for %2$s', '%1$s reviews for %2$s', $count, 'woocommerce' ) ), esc_html( $count ), '<span>' . get_the_title() . '</span>' );
				echo apply_filters( 'woocommerce_reviews_title', $reviews_title, $count, $product ); // WPCS: XSS ok.
			} else {
				esc_html_e( 'Reviews', 'woocommerce' );
			}
			?>
		</h2>

		<?php if ( have_comments() ) : ?>
			<ol class="commentlist">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'woocommerce_comments' ) ) ); ?>
			</ol>

			<?php
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links(
					apply_filters(
						'woocommerce_comment_pagination_args',
						array(
							'prev_text' => is_rtl() ? '&rarr;' : '&larr;',
							'next_text' => is_rtl() ? '&larr;' : '&rarr;',
							'type'      => 'list',
						)
					)
				);
				echo '</nav>';
			endif;
			?>
		<?php else : ?>
			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
		<?php endif; ?>
	</div>



	<div class="clear"></div>
</div>
