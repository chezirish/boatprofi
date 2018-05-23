<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="grid-container">
    <?php   wc_print_notices(); ?>
</div>

<div class="basket-page__content">
    
    <div class="grid-container">
    <h3>Корзина</h3>
        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <div class="basket-page__content-products-wrapper">
            <div class="basket-page__content-product clearfix">
                <p class="basket-page__content-product-title-name">Наименование товара</p>
                <img class="float-left" src="<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png" alt="tool">
                <div class="basket-page__content-product-name-block float-left">
                    <p class="basket-page__content-product-name float-left" >Эхолот-картплоттер  Humminbird HELIX 10 SI GPS</p>
                    <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"><span>В избранное</span></p>
                    <p class="single-service-page__add"><img class="scheme" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png"  alt="scheme"><span>Сравнить</span></p>
                </div>
                <div class="basket-page__content-product-nav clearfix float-right">
                <div class="basket-page__content-product-count clearfix">
                    <p class="basket-page__content-product-title-count">Количество</p>
                        <button class="basket-page__content-product-name-input-plus float-right">+</button>
                        <input class="basket-page__content-product-name-input float-right" type="number">
                        <button class="basket-page__content-product-name-input-minus float-right">-</button>
                    </div>
                    <div class="basket-page__content-product-price float-right">
                        <p class="basket-page__content-product-title-price">Стоимость</p>
                        <p class="basket-page__content-product-price-number">106 600 руб.</p>
                    </div>
                    <div class="basket-page__content-product-cross float-right">&times;</div>
                </div>
                <div class="basket-page__content-product-cross basket-page__content-product-cross-tablet float-right">&times;</div>
            </div>

            <div class="basket-page__content-product clearfix">
                <img class="float-left" src="<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png" alt="tool">
                <div class="basket-page__content-product-name-block float-left">
                    <p class="basket-page__content-product-name float-left" >Эхолот-картплоттер  Humminbird HELIX 10 SI GPS</p>
                    <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"><span>В избранное</span></p>
                    <p class="single-service-page__add"><img class="scheme" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png"  alt="scheme"><span>Сравнить</span></p>
                </div>
                <div class="basket-page__content-product-nav clearfix float-right">
                <div class="basket-page__content-product-count clearfix">
                        <button class="basket-page__content-product-name-input-plus float-right">+</button>
                        <input class="basket-page__content-product-name-input float-right" type="number">
                        <button class="basket-page__content-product-name-input-minus float-right">-</button>
                    </div>
                    <div class="basket-page__content-product-price float-right">
                        <p class="basket-page__content-product-price-number">106 600 руб.</p>
                    </div>
                    <div class="basket-page__content-product-cross float-right">&times;</div>
                </div>
                <div class="basket-page__content-product-cross basket-page__content-product-cross-tablet float-right">&times;</div>
            </div>
        </div>
       
    <p class="basket-page__content-total"><span>Итого:</span> 203 200 руб.</p>
    </form>
    </div>

     <div class="grid-container">
        <section class="callout section-form">

            <h4>Оформление заказа</h4>   
            <form action="" class="clearfix">
                <div class="form-inputs grid-x grid-margin-x">
                    <div class="form-left cell medium-6 large-4">
                        <label for="name">Ваше ФИО (полностью)</label>
                        <input  require placeholder="Введите данные" id="name" type="text">
                    </div>
                    <div class="form-right cell medium-6 large-4">
                        <label for="phone">E-mail</label>
                        <input  require placeholder="Введите данные" id="phone" type="number">
                    </div>
                    <div class="form-right form-last cell medium-6 large-4">
                        <label for="desc">Контактный телефон</label>
                        <input  require placeholder="Введите данные" id="desc" type="text">
                    </div>
                    <div class="form-left cell medium-6 large-8">
                        <label for="name">Адрес доставки</label>
                        <input  require placeholder="Введите данные" id="name" type="text">
                    </div>
                    <div class="form-right form-right-get cell medium-4 large-4">
                        <label for="phone">Способ доставки</label>
                        <select value="выберите">
                            <option disabled selected>Выберите способ доставки</option>
                            <option id="phone" name="" id="">1</option>
                            <option name="" id="">2</option>
                            <option name="" id="">3</option>
                            <option name="" id="">4</option>
                        </select>
                    </div>
                    <div class="form-right form-desktop cell medium-12 large-12">
                        <label for="phone">Комментарий</label>
                        <input  require placeholder="Текст комментария" id="phone" type="number">
                    </div>
                    <div class="form-last-phone form-right form-last cell medium-12 large-12">
                        <label for="desc">Комментарий</label>
                        <textarea require placeholder="Текст комментария"  id="desc" cols="20" rows="7"></textarea>
                    </div>
                </div>
                <button class="button basket-form-button float-right" type="submit">Оформить заказ</button>
            </form>
        </section>
    </div>
</div>