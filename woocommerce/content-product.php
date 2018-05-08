<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div  class="sirvices-item clearfix" >
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	 
	
	?>
	
		<div class="sirvices-item-modal-basket reveal" data-closable>
			<button class="close-button"  data-close aria-label="Dismiss alert" type="button">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4>Товар оправлен в корзину!</h4>
			<object data="" type="">
			<a href="">перейти в корзину</a>
			</object>
			<p>Список будет очищен по завершению сессии</p>
		</div>
		<a href="<?php the_permalink(); ?>">
		<div class="sirvices-item-icon"  style="background-image:url(<?php the_post_thumbnail_url( ); ?>);background-size:contain;background-position:center;background-repeat:no-repeat">
		</div>
		</a>
		<div class="sirvices-item-content">
			<p> <?php echo $product->get_title(); ?></p>
			
			<p><span class="sirvices-item-costs"><?php echo $product->get_price(); ?> руб.</span></p>
			<div class="bottom-block">
			<!-- <a class="ajax_add_to_cart"  rel="nofollow" data-product_id="<?php echo get_the_ID(); ?>" data-quantity="1" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ) . '?add-to-cart=' . get_the_ID(); ?>">
				<button type="button" class=" add-basket button">В корзину</button>
			</a> -->
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			
				<img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
				<img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
			</div>
		</div>
		<div class="sirvices-item-content-gorizontal">
			<p><?php echo $product->get_title(); ?></p>
			<p class="sirvices-item-content-developer">Производитель: <object data="" type=""><a href="">Humminbird</a></object> </p>
			
		</div>
		<div class="bottom-block-gorizontal-wrapper">
			<div class="bottom-block bottom-block-gorizontal">
				<p><span class="sirvices-item-costs"><?php echo $product->get_price(); ?> руб.</span></p>
				<a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ) . '?add-to-cart=' . get_the_ID(); ?>">
					<button type="button" class=" add-basket button">В корзину</button>
				</a>
					<img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
				<img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
			</div>
		</div>

	<?php
	?>
</div>

<?php 

// var_dump($product);

