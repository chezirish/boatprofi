<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>
    <?php do_action( 'woocommerce_before_checkout_form', $checkout ); ?>
	<div class="grid-container">
        <section class="callout section-form">
        
            <h4>Оформление заказа</h4>   
            <form  name="checkout" method="post"  class="checkout woocommerce-checkout clearfix" action="<?php echo esc_url( wc_get_checkout_url() ); ?>"  enctype="multipart/form-data">
                <div class="form-inputs grid-x grid-margin-x">
                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                        <?php do_action( 'woocommerce_checkout_billing' ); ?>


                        <?php //do_action( 'woocommerce_checkout_shipping' ); ?>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>




                </div>
                <!-- <button class="button basket-form-button float-right" type="submit">Оформить заказ</button> -->
                <?php echo apply_filters( 'woocommerce_order_button_html', '<input type="submit" class="button basket-form-button float-right add-to-cart btn-pink alt" name="woocommerce_checkout_place_order" id="place_order" value="Оформить заказ" data-value="' . esc_attr( $order_button_text ) . '" />' ); ?>
            </form>
            <?php //do_action( 'woocommerce_checkout_before_order_review' ); ?>
            <!-- <div id="order_review" class="woocommerce-checkout-review-order">
                <p class="basket-page__content-total"><span>Итого:</span> <?php echo WC()->cart->total . ' руб.' ?> </p>
            </div> -->
		    <?php //do_action( 'woocommerce_checkout_after_order_review' ); ?>
        </section>
    </div>
    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

