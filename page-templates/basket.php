<?php
/*
Template Name: Корзина
*/

get_header(); ?>

<div class="basket-page__content">
    
    <div class="grid-container">
    <h3>Корзина</h3>
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
    </div>

</div>

<?php get_footer();
