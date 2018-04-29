<?php
/*
Template Name: Пример Страница  товара
*/

get_header(); ?>

<div class="single-product-page">
    <div class="single-product-page__content grid-x grid-padding-x">
            <div class="single-product-page__left-content cell medium-6 large-6">
            <h4>Эхолот-картплоттер <br>  Humminbird HELIX 10 SI GPS</h4>
            <p class="p-order"><span class="span-order">Под заказ </span> (Предполагаемый срок поставки: 25 марта)</p>
                <div class="single-product-page__preview-icons-wrapper">
                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon1.png" alt="tool">
                    </div>
                    <div class="single-product-page__preview-icon">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon2.png" alt="tool">
                    </div>
                    <div class="single-product-page__preview-icon">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon3.png" alt="tool">
                    </div>
                </div>
                <div class="single-product-page__preview-avatar">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-avatar.png" alt="tool">
                </div>
                <div class="single-product-page__preview-icons-tablet">
                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon1.png" alt="tool">
                    </div>
                    <div class="single-product-page__preview-icon">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon2.png" alt="tool">
                    </div>
                    <div class="single-product-page__preview-icon">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/product-page__preview-icon3.png" alt="tool">
                    </div>
                </div>

            </div>
            <div class="single-product-page__product-nav  cell medium-6 large-6">
                <h4>Эхолот-картплоттер <br>  Humminbird HELIX 10 SI GPS</h4>
                <p class="p-order"><span class="span-order">Под заказ </span> (Предполагаемый срок поставки: 25 марта)</p>
                <p class="single-service-page__price">159 000 руб.</p>
                <button type="button" class="single-service-page__button button">Заказать</button>
                <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"><span>В избранное</span></p>
                <p class="single-service-page__add"><img class="scheme" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png"  alt="scheme"><span>Сравнить</span></p>
                <div class="footer-social-icons">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                </div>

                
            </div>
    </div>
    <div class="single-product-page__content grid-x grid-padding-x">
        <div class="single-product-page__left-content cell medium-12 large-6">
            <div class="single-product-page-product-desc">
                <h4>Описание товара</h4>
                <p class="line-height">Новый прибор Humminbird HELIX 10 SI GPS оснащен супер ярким со светодиодной подсветкой 10,1" дисплеем высокой четкости с регулируемыми цветами. Широкий экран обеспечивает яркое, кристально чистое изображение для удобного просмотра при резком солнечном свете, а так же делает видимым с любого места на судне. Встроенные слоты для карт памяти позволяют пользователям загружать карты, скачивать снимки экрана, переносить путевые точки, выполнять обновления программного обеспечения с помощью съемных носителей.</p>
            </div>
            <div class="price float-left">
                <a href="">Показать подробнее</a>
                <!-- <div class="price-modal">
                    <a>По возрастанию</a>
                    <a>По убыванию</a>
                </div> -->
            </div>
        </div>

        <div class="single-product-page-product-char cell medium-12 large-6">
            <h4>Характеристики товара</h4>
            <table>
                <tbody>                                                         
                    <tr>
                        <td>Тип</td>
                        <td>эхолт</td>
                    </tr>  
                    <tr>
                        <td>Производитель</td>
                        <td>Humminbird</td>
                    </tr>  
                    <tr>
                        <td>Трансдьюсер	опциональный</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td>Влагозащищенный корпус </td>
                        <td>есть</td>
                    </tr>  
                    <tr>
                        <td>Класс влагозащиты	IPX7</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td>Подключение внешнего источника питания (12 В) </td>
                        <td>есть</td>
                    </tr>  
                    <tr>
                        <td>Питание от батареек/аккумулятора	</td>
                        <td>есть</td>
                    </tr>                                                                                                                   
                </tbody>
            </table>
            <div class="price float-left">
                <a href="">Показать подробнее</a>
                <!-- <div class="price-modal">
                    <a>По возрастанию</a>
                    <a>По убыванию</a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="portfolio-page__content">
<div class="grid-container">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
                <h3 class="float-left">С этим товаров покупают</h3>
                <div class="slider-products-right slider-products-next float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
                <div class="slider-products-left slider-products-prev float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
            </div>
            <div class="products-slider">
                <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
                <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
                <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
                <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
                <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<?php get_footer();

