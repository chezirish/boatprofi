<?php
/*
Template Name: Услуги
*/

get_header(); ?>

<div class="services_page-content">
    <div class="grid-container">
        <h3>Наши услуги</h3>
    </div>
    
    <section class="section-services">
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


    <div class="grid-container">
        <section class="callout section-form" data-closable>
            <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4>Не нашли подходящую услугу, <br>  отправте запрос нашему специалисту</h4>   
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
                    <div class="form-right form-last float-left">
                        <label for="desc">Описание задачи</label>
                        <input  require placeholder="Введите данные" id="desc" type="text">
                    </div>
                    <div class="form-last-phone form-right form-last">
                        <label for="desc">Описание задачи</label>
                        <textarea require placeholder="Введите данные"  id="desc" cols="20" rows="7"></textarea>
                    </div>
                    <button class="desktop float-right section-title-submit" type="submit">Отправть</button>
                </div>

                <div class="file-wrapper">
                    <!-- <input type="file"> -->
                    <input class="input-file" id="my-file" type="file">
                    <label tabindex="0" for="my-file" class="input-file-trigger">+ Прикрепите фото катера</label>

                    <input class="css-checkbox" id="checkbox7" type="checkbox">
                    <label id="checkbox77" for="checkbox7" class="css-label lite-x-green">Согласен с "политикой конфидециальности"</label>
                    <p class="file-return"></p>
                </div>
                <button class="section-title-submit section-title-submit-tablet" type="submit">Отправть</button>
            </form>
        </section>
    </div>

    <div class="grid-container">
        <div class="services_page-banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg);background-size:cover;background-position:0">
            <div class="services_page-banner-content">
                <h2>Нам доверяют чемпионы!</h2>
                <p>Многолетний опыт позволяет работать разными материалами, выполнять макетные работы. Уделяем особое внимание силовой проводке, настройке и установке оборудования.</p>
            </div>
        </div>
    </div>
</div>




<?php get_footer();
