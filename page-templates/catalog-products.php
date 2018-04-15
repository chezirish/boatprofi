<?php
/*
Template Name: Каталог товаров
*/

get_header(); ?>



<div class="catalog-products_page-content">
    <div class="catalog-products_page-grid-container grid-x grid-margin-x">
        <div class="catalog-products_sidebar-nav desktop cell medium-3 large-3">
            <ul class="vertical menu accordion-menu" data-accordion-menu data-multi-open="false">
                <li class="accordion-menu-container">
                    <a href="#">Электрические троллинговыемоторы</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
                <li class="accordion-menu-container">
                    <a href="#">Эхолоты и картоплоттеры</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
                <li class="accordion-menu-container">
                    <a href="#">Аккумуляторы и зарядные устройства</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
                <li class="accordion-menu-container">
                    <a href="#">Моторы для лодок</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
                <li class="accordion-menu-container">
                    <a href="#">Аксессуары для прицепов</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
                <li class="accordion-menu-container">
                    <a href="#">Сопутсвующие товары</a>        
                    <ul class="menu vertical nested">
                    <li><a href="#">Lowrance</a></li>
                    <li><a href="#">Humminbird</a></li>
                    <li><a href="#">RayMarine</a></li>
                    <li><a href="#">Garmin</a></li>
                    <li><a href="#">StarMaps</a></li>
                    </ul>
                </li>
            </ul> 


            <div class="banner catalog-products_banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner2.jpg);background-size:contain;background-position:center;background-repeat:no-repeat">
                <h3>Разборный якорь  </h3>
                <p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
                <button type="button" class="button">Подробнее</button>
            </div>
        </div>
        <div class="catalog-products_content cell medium-9 large-9">
            <div class="grid-container">
                <h3>Каталог товаров</h3>
                <div class="catalog-products_products-filter clearfix">
                    <div class="catalog-products_sort float-left">
                        <span class="float-left">Сортировать:</span>
                        <div class="price float-left">
                            <p>по цене</p>
                            <div class="price-modal">
                                <a>По возрастанию</a>
                                <a>По убыванию</a>
                            </div>
                        </div>
                        <div class="popularity float-left">
                            <p>по популярности</p>
                            <div class="popularity-modal">
                                <a>По возрастанию</a>
                                <a>По убыванию</a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-products_view float-right">
                        <div class="menu-wrapper">
                            <span class="menu-icon-span"></span>
                            <span class="menu-icon-span"></span>
                            <span class="menu-icon-span"></span>
                        </div>
                        <div class="menu-squire"></div>
                    </div>
                </div>
            </div>


            <div class="services-list">
                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <!--  -->
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>
                
                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div>

                <div class="sirvices-item clearfix ">
                    <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png);background-size:contain;background-position:center;background-repeat:no-repeat">
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
                    <div class="sirvices-item-content-gorizontal">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p class="sirvices-item-content-developer">Производитель: <a href="">Humminbird</a></p>
                        
                    </div>
                    <div class="bottom-block-gorizontal-wrapper">
                        <div class="bottom-block bottom-block-gorizontal">
                            <p><span class="sirvices-item-costs">106600 руб.</span></p>
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div> 
            </div>

            <div class="grid-container">       
                <div class="catalog-products_choose clearfix">
                    <h4 class="float-left">Сложно выбрать?</h4>
                    <button type="button" class="float-right button">Записаться на консультацию</button>
                </div>
                <div class="catalog-products_question clearfix">
                    <h4 class="float-left">Остались вопросы?</h4>
                    <button type="button" class="float-right button">Звоните</button>
                </div>
                <div class="phone-tablet banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg);background-size:cover">
                    <h3>Разборный якорь  </h3>
                    <p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
                    <button type="button" class="button">Подробнее</button>
                </div>

                <div class="seo-text">
                    <p>Профессиональная подготовка катеров для спортивной рыбалки - это не просто красивый маркетинговый слоган. За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера. Именно спорт дает стимул быть лучшим во всем. Самым быстрым на воде. Самым знающим в рыбопоисковой технике. Самым опытным в подготовке спортивных катеров.</p>
                </div>
            </div>


        </div>
    </div>
</div>


<?php get_footer();
