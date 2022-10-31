<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

/* Counting orders by category */

/* Couting completed orders */

$current_user = wp_get_current_user();

$completed = wc_get_orders(
	array(
		'customer_id' => $current_user->ID,
		'numberposts' => -1, // number of post (all)
		'post_status' => array( 'wc-completed')
	)
);
$completed_count =  count($completed);

/* Couting pending orders */
$pending = wc_get_orders(
	array(
		'customer_id' => $current_user->ID,
		'numberposts' => -1, // number of post (all)
		'post_status' => array( 'wc-processing')
	)
);
$pending_count =  count($pending);

/* Couting on hold orders */
$on_hold = wc_get_orders(
	array(
		'customer_id' => $current_user->ID,
		'numberposts' => -1, // number of post (all)
		'post_status' => array( 'wc-on-hold')
	)
);
$on_hold_count =  count($on_hold);



do_action( 'woocommerce_before_account_orders', $has_orders ); ?>


<div class="orders_page_header">
	<div class="input mt-40 mb-40">
		<input type="text" id="order_search" placeholder="Recherche...">
		<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle cx="20" cy="20" r="20" fill="#EFF3F6"/>
			<g clip-path="url(#clip0_825_1773)">
			<path d="M27.8045 26.8628L23.8252 22.8835C24.9096 21.5572 25.4428 19.8649 25.3144 18.1565C25.1861 16.4482 24.406 14.8545 23.1356 13.7052C21.8652 12.5558 20.2016 11.9388 18.4889 11.9816C16.7763 12.0244 15.1457 12.7238 13.9343 13.9352C12.7229 15.1466 12.0234 16.7773 11.9806 18.4899C11.9378 20.2026 12.5549 21.8661 13.7042 23.1366C14.8535 24.407 16.4472 25.187 18.1556 25.3154C19.8639 25.4438 21.5562 24.9106 22.8825 23.8262L26.8619 27.8055C26.9876 27.9269 27.156 27.9941 27.3308 27.9926C27.5056 27.9911 27.6728 27.921 27.7964 27.7974C27.92 27.6738 27.9901 27.5066 27.9916 27.3318C27.9932 27.157 27.926 26.9886 27.8045 26.8628ZM18.6665 24.0008C17.6117 24.0008 16.5805 23.688 15.7035 23.102C14.8264 22.516 14.1428 21.683 13.7392 20.7085C13.3355 19.7339 13.2299 18.6616 13.4357 17.627C13.6415 16.5925 14.1494 15.6421 14.8953 14.8963C15.6412 14.1504 16.5915 13.6424 17.626 13.4366C18.6606 13.2309 19.733 13.3365 20.7075 13.7401C21.682 14.1438 22.515 14.8274 23.101 15.7045C23.6871 16.5815 23.9999 17.6127 23.9999 18.6675C23.9983 20.0815 23.4359 21.4371 22.436 22.437C21.4362 23.4368 20.0805 23.9992 18.6665 24.0008Z" fill="#23234A"/>
			</g>
			<defs>
			<clipPath id="clip0_825_1773">
			<rect width="16" height="16" fill="white" transform="translate(12 12)"/>
			</clipPath>
			</defs>
		</svg>
	</div>
</div>
<h2>Commandes</h2>

<!-- Orders stats -->

<div class="dashboard_stats grid grid-three-cols grid-gap-medium mb-40">
	<div class='br-15 prl-20 ptb-15'>
		<p class="m-0 mb-20 text-dark-blue">New orders</p>
		<p class='number new_orders'><?php echo $on_hold_count; ?></p>
	</div>
	<div class='br-15 prl-20 ptb-15'>
		<p class="m-0 mb-20 text-dark-blue">Pending orders</p>
		<p class='number pending_orders'><?php echo $pending_count; ?></p>
	</div>
	<div class='br-15 prl-20 ptb-15'>
		<p class="m-0 mb-20 text-dark-blue">Delivered orders</p>
		<p class='number delivered_orders'><?php echo $completed_count; ?></p>
	</div>
</div>


<!-- Orders filter -->

<div class="orders_filters_container mb-40">
	<div class="orders_filter">
		<p tab-target="all" class="filter-handle filter_title active_filter">All orders</p>
	</div>
	<div id="grp_processing" class="orders_filter">
		<p tab-target="processing" class="filter-handle filter_title">Pending Orders</p>
	</div>
	<div id="grp_onhold" class="orders_filter">
		<p tab-target="completed" class="filter-handle filter_title">Delivered Orders</p>
	</div>
	<div id="grp_cancelled" class="orders_filter">
		<p tab-target="cancelled" class="filter-handle filter_title">Canceled Orders</p>
	</div>
</div>


<?php if ( $has_orders ) : ?>

	<table id="orders_table" class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>

						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>

								

						</td>
						<?php endforeach; ?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Browse products', 'woocommerce' ); ?></a>
		<?php esc_html_e( 'No order has been made yet.', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
