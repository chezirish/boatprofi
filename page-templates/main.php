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


<section class="callout section-form">
    <button class="close-button" aria-label="Dismiss alert" type="button">
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

<section class="section-projects">
<div class="section-projects-content">
    <div class="section-headline">
        <h3>Наши проекты</h3>
    </div>
    <div class="project-slider">
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

         <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

         <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

         <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

         <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>

         <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
        </div>
        <div class="project-slider-item">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
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

        <div class="banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg);background-size:cover">
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

<section class="section-reviews">
<div class="section-reviews-content">
    <div class="section-headline">
        <h3>Отзывы о нас</h3>
    </div>
    <div class="reviews-slider">
        <div class="reviews-slider-content grid-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/src/assets/images/slider-item.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/src/assets/images/slider-item.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>


    </div>
    <div class="reviews-slider-buttons">
        <a class="arrow-up arrow-up-left">
            <span class="left-arm"></span>
            <span class="right-arm"></span>
            <span class="arrow-slide"></span>
        </a>
        <a class="arrow-up arrow-up-right">
            <span class="left-arm"></span>
            <span class="right-arm"></span>
            <span class="arrow-slide"></span>
        </a>
        <!-- <div class="reviews-slider-left">||</div>
        <div class="reviews-slider-right">\\</div> -->
        <p>2 из 16</p>
        <button type="button" class="button">Все отзывы</button>
    </div>

</div>
</section>


<section class="section-about">
    <div class="section-about-content grid-x grid-margin-x">
        <div class="about cell medium-12 large-6">
            <h3>Коротко о нас</h3>
            <p>Профессиональная подготовка катеров для рыбалке - это не просто красивый маркетинговый слоган. За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера.</p>
            <p>Именно спорт дает стимул быть лучшим во всем. Самым быстрым на воде. Самым знающим в рыбопоисковой технике. Самым опытным в подготовке спортивных катеров.  Именно спорт дает стимул быть лучшим во всем. Самым быстрым на воде. Самым знающим в рыбопоисковой технике </p>
            <button type="button" class="button">Подробнее</button>
        </div>
        <div class="articles cell medium-12 large-6">
            <h3>Статьи</h3>
            <div class="article-item">
                <div class="clearfix">
                    <div class="article-item-icon float-left">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat4.jpg" alt="boat">
                    </div>
                    <div class="article-item-content float-left">
                        <p >Тюнинг катеров в Ярославле! <br>
                        Интересные проекты! Нам доверяют чемпионы!!!</p>
                        <span>21 янв в 14:54</span>
                    </div>
                </div>
            </div>
            <div class="article-item">
                <div class="clearfix">
                    <div class="article-item-icon float-left">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat4.jpg" alt="boat">
                    </div>
                    <div class="article-item-content float-left">
                        <p >Тюнинг катеров в Ярославле! <br>
                        Интересные проекты! Нам доверяют чемпионы!!!</p>
                        <span>21 янв в 14:54</span>
                    </div>
                </div>
            </div>
            <div class="article-item">
                <div class="clearfix">
                    <div class="article-item-icon float-left">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat4.jpg" alt="boat">
                    </div>
                    <div class="article-item-content float-left">
                        <p >Тюнинг катеров в Ярославле! <br>
                        Интересные проекты! Нам доверяют чемпионы!!!</p>
                        <span>21 янв в 14:54</span>
                    </div>
                </div>
            </div>
            <button type="button" class="button">Все статьи</button>
        </div>
    </div>
</section>

<?php get_footer();
