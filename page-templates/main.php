<?php
/*
Template Name: Главная
*/

?>
<div class="wrapper"><img class="main_background" src="<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg" alt="boat"></div>

<?php
get_header(); ?>

<section class="section-title">
    <h1>Подготовим  Ваш катер к рыбалке</h1>
    <p>За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера. </p>
</section>

<section class="callout section-form" data-closable>
    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>
    <h4>Подготовим ваш катер <br>  к любительской или спортивной рыбалке</h4>
    <form action="">
        <div class="form-inputs clearfix">
            <div class="form-left float-left">
                <label for="name">Ваше имя</label>
                <input  require placeholder="Введите данные" id="name" type="text">
            </div>
            <div class="form-right float-left">
                <label for="phone">Ваш телефон</label>
                <input  require placeholder="Введите данные" id="phone" type="number">
            </div>
            <button class="desktop float-right section-title-submit" type="submit">Отправть заявку</button>
        </div>

        <div class="file-wrapper">
            <input type="file">
            <input type="checkbox">
            <p>Согласен с "политикой конфидециальности"</p>
        </div>
        <button class="section-title-submit section-title-submit-tablet" type="submit">Отправть заявку</button>
    </form>
</section>

<section class="section-services">
    <div class="section-headline">
        <h3>Наши услуги</h3>
    </div>

    <div class="services-list">
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/motor-icon.png" alt="icon">
            </div>
        </div>
    </div>
</section>

<section class="section-catalog">
    <div class="section-headline">
        <h3>Каталог товаров</h3>
    </div>

     <div class="services-list">
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
    </div>
</section>

<section class="section-products">
<div class="section-products-content">
    <div class="section-headline">
        <h3>Товары нашего магазина</h3>
    </div>
    <nav class="clearfix">
        <div class="products-filter float-left">
            <p>Акционные</p>
            <p>Новинки</p>
            <p>Хиты продаж</p>
        </div>
        <div class="linkto-catalog float-right">
            <a href="">Перейти в каталог</a>
        </div>
    </nav>

    <div class="services-list">
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>

        <div class="banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg)">
            <h3>Разборный якорь  </h3>
            <p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
            <button type="button" class="button">Подробнее</button>
        </div>

        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-icon">
                <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool">
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button">Заказать</button>
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer();
