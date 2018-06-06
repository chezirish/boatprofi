<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
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
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="form-left cell medium-6 large-4">
		<label for="billing_first_name">Ваше ФИО (полностью)</label>
		<input  require placeholder="Введите данные" autocomplete="<?= $fields['billing_first_name']['autocomplete'] ?>" value="<?= $checkout->get_value( 'billing_first_name' ) ?>" name="billing_first_name" id="billing_first_name" type="text"> 
	</div>
	<div class="form-right cell medium-6 large-4">
		<label for="billing_email">E-mail</label> 
		<input  require name="billing_email" autocomplete="<?= $fields['billing_email']['autocomplete'] ?>" value="<?= $checkout->get_value( 'billing_email' ) ?>" placeholder="Введите данные" id="billing_email" type="email" maxlength="32"> 
	</div>
	<div class="form-right form-last cell medium-6 large-4">
		<label for="billing_phone">Контактный телефон</label>
		<input  require  name="billing_phone" placeholder="Введите данные" autocomplete="<?= $fields['billing_phone']['autocomplete'] ?>" id="billing_phone" type="tel" value="<?= $checkout->get_value( 'billing_phone' ) ?>">
	</div>
	<div class="form-left cell medium-6 large-8">
		<label for="billing_address_1">Адрес доставки</label>
		<input  require autocomplete="<?= $fields['billing_address_1']['autocomplete'] ?>" value="<?= $checkout->get_value( 'billing_address_1' ) ?>" name="billing_address_1" id="billing_address_1" placeholder="Введите данные" type="text">
	</div>
	<div class="form-right form-right-get cell medium-4 large-4">
		<label for="ship">Способ доставки</label>
		<select value="выберите" id="ship">
			<option disabled selected>Выберите способ доставки</option>
			<option id="ship" name="" id="">1</option>
			<option name="" id="">2</option>
			<option name="" id="">3</option>
			<option name="" id="">4</option>
		</select>
	</div>
	<div class="form-right form-desktop cell medium-12 large-12">
		<label for="order_comments">Комментарий</label>
		<input  require  name="order_comments" placeholder="Текст комментария" id="order_comments" type="text">
	</div>
	<div class="form-last-phone form-right form-last cell medium-12 large-12">
		<label for="descmob">Комментарий</label>
		<textarea require  name="order_comments" placeholder="Текст комментария"  id="descmob" cols="20" rows="7"></textarea>
	</div>

	

		<select name="billing_country" id="billing_country"
                class="country_to_state country_select select2-hidden-accessible d-none" autocomplete="country"
                tabindex="-1"
                aria-hidden="true">
            <option value="RU" selected="selected">Россия</option>
        </select>


		<?php
			$fields = $checkout->get_checkout_fields( 'billing' );

			foreach ( $fields as $key => $field ) {
				if ( isset( $field['country_field'], $fields[ $field['country_field'] ] ) ) {
					$field['country'] = $checkout->get_value( $field['country_field'] );
				}
				//woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
			}
		?>


	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>



