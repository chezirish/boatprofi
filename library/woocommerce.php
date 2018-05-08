<?php
/**
 * Woocommerce  settings
 *
 *
 */

// add support woo
function boatprofi_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'boatprofi_add_woocommerce_support' );



if ( ! function_exists( 'estore_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'estore_woocommerce_cart_link_fragment' );
	function estore_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		estore_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
	}
}
	function estore_woocommerce_cart_link() {
		?>
			<!-- <a class="cart-contents w3view-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'estore' ); ?>"> -->
			<span class="count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;?></span>
			<!-- <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> -->
			
		</a>
		<?php
	}
if ( ! function_exists( 'estore_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function estore_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php estore_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);
				
				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}






// add custom styles


add_action( 'woocommerce_before_main_content', 'boatprofi_output_content_wrapper', 10);
function boatprofi_output_content_wrapper() {
	echo '<div class="catalog-products_page-content">';
		echo '<div class="catalog-products_page-grid-container grid-x grid-margin-x">';
			echo '<div class="catalog-products_sidebar-nav desktop cell medium-3 large-3">';

}

add_action( 'woocommerce_sidebar', 'boatprofi_sidebar', 10);
function boatprofi_sidebar(){
	echo '</div>';
}

// add_action( 'woocommerce_before_shop_loop', 'boatprofi_before_shop_loop', 10);
function boatprofi_before_shop_loop(){
	echo '<div class="catalog-products_content cell medium-9 large-9">';
		echo '<div class="grid-container">';
		echo '<h3>Каталог товаров</h3>';
		echo '<div class="catalog-products_products-filter clearfix">';
			echo '<div class="catalog-products_sort float-left">';
			echo '</div>';
			echo '<div class="catalog-products_view float-right">';
				echo'<div class="menu-wrapper">
						<span class="menu-icon-span"></span>
						<span class="menu-icon-span"></span>
						<span class="menu-icon-span"></span>
					</div>
					<div class="menu-squire"></div>';
			echo '</div>';
		echo '</div>';			
		echo '</div>';				
}

add_action( 'woocommerce_after_main_content', 'boatprofi_output_content_wrapper_end', 10);
function boatprofi_output_content_wrapper_end() {
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}


// add_filter('woocommerce_after_shop_loop_item', function($content){
// 	return str_replace('class="', 'class=" add-basket', $content); 
// });






// remove woocommerce default styles
add_filter( 'woocommerce_enqueue_styles', '__return_false' );



// remove actions
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0); 
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
// remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );



