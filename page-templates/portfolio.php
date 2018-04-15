<?php
/*
Template Name: Портфолио
*/

get_header(); ?>

<div class="portfolio-page__content">
    <div class="grid-container">
    <div class="portfolio-page__title">
        <h2 class="portfolio-page__title-name">Чемпионский <br>  Alumacraft <br>  trophi 205</h2>
        <h2 class="portfolio-page__title-name-tablet">Чемпионский  Alumacraft trophi 205</h2>
        <div class="portfolio-page__title-main-avatar" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg);background-size:cover;background-repeat:no-repeat"></div>
        <!-- <img class="portfolio-page__title-main-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat"> -->
        <div class="portfolio-page__title-small-avatars-wrapper">
            <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat6.jpg" alt="boat"><img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat8.jpg" alt="boat"><img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat9.jpg" alt="boat">
        </div>
    </div>
    </div>
    <div class="portfolio-page__tasks grid-x grid-margin-x">
        <!-- <div class="grid-container"> -->
        <div class="cell medium-6 large-6">
            <div class="tasks-content">
                <div class="tasks-goal">
                    <h5>Задача</h5>
                    <p>От владельца буксировщика была получена информация, что под сланями появилось масло. Буксировщик был принят на диагностику в сервисный центр.</p>      
                </div>
                <div class="tasks-solution">
                    <h5>Решение</h5>
                    <p>Тотальная проверка показала, что после полного прогрева двигателя, под нагрузкой, происходит вытекание масла из двигателя. Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. После того как поднялась температура, было обнаружено, что масляный датчик</p>
                </div>
            </div>
        </div>  
        <!-- </div> -->

        <div class="grid-container">
        <div class="cell medium-6 large-6">
            <div class="tasks-icon">
                <h3>Выполнено</h3>
                <ul>
                    <li>Диагностика двигателя</li>
                    <li>Демонтаж двигателя</li>
                    <li>Проверка двигателя на стенде</li>
                    <li>Убрали электропроводку <br> и  бензиновые шланги <br> в гофру</li>
                    <li>Монтаж двигателя</li>
                </ul>
                <img class="kruchok" src="<?= get_template_directory_uri() ?>/dist/assets/images/kruchok.png">
            </div> 
        </div>
        </div>
    </div>

    <div class="grid-container">
    <div class="process">
        <h3>Процесс работы</h3>
        <div class="process-content">
            <div class="process-content-item clearfix">
                <div class="process-text float-left">
                    <p class="process-text-left">Тотальная проверка показала, что после полного прогрева двигателя, под нагрузкой, происходит вытекание масла из двигателя. </p>
                </div>
                <div class="process-icon float-left">
                    <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat">
                </div>
            </div>

            <div class="process-content-item">
                <div class="process-text">
                    <p>Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. </p>
                </div>
            </div>

            <div class="process-content-item-last clearfix">
                <div class="process-text float-left">
                    <p class="process-text-left">Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. </p>
                </div>
                <div class="process-icon float-left">
                    <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat">
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


<div class="portfolio-page__review">
<div class="grid-container">
    <div class="portfolio-page__content">   
        <h3 class="review-title">Отзыв о проекте</h3>
        <div class="portfolio-page__review-content clearfix">
            <p class="portfolio-page__review-date float-left">26 февраля</p>
            <div class="portfolio-page__review-info float-left">
                <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/avatar.jpg" alt="boat">
                <p class="review-info-name"> <b> Эдвард</b> <br> г. Калининград </p>
                <!-- <p class="review-info-city">г. Калининград</p> -->
                <p class="review-info-comment">В связи со сменой лодки возникла необходимость купить троллинговый электромотор в морском исполнении.К специалистам из компании Boatlab.Pro я обращался пару раз и раньше, поэтому знал ,что они могут помочь и в этом вопросе.В середине января обратился в компанию,и в течение 2-3 дней после взаимных консультаций выбрали наиболее подходящий для моей лодки мотор.В настоящее время свой электромотор я уже получил. теперь предстоят приятные хлопоты по его установке и настройке, ну и конечно ипытании при первом выходе на жидкую воду. Особая благодарность Виталию Ермолову,который решал все вопросы по выбору,покупке и доставке моего мотора профессионально и быстро.И конечно большое спасибо всем сотрудникам компании за оперативное и профессиональное выполнение моего заказа</p>
            </div>
        </div>
    </div>
</div>
</div>


<section class="callout section-form">
    <h4>Хочу также</h4>
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
            <!-- <input type="file"> -->
            <input class="input-file" id="my-file" type="file">
            <label tabindex="0" for="my-file" class="input-file-trigger">+ Прикрепите фото катера</label>

            <input class="css-checkbox" id="checkbox7" type="checkbox">
            <label for="checkbox7" class="css-label lite-x-green">Согласен с "политикой конфидециальности"</label>
            <p class="file-return"></p>
        </div>
        <button class="section-title-submit section-title-submit-tablet" type="submit">Отправть заявку</button>
    </form>
</section>

<div class="portfolio-page__content">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
            <h3 class="float-left">Используемые товары</h3>
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

        <div class="slider-nav clearfix">
            <h3 class="float-left">Другие проекты</h3>
            <div class="slider-products-right slider-project-next float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
            <div class="slider-products-left slider-project-prev float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
        </div>
        <div class="portfolio-page__projects-slider">
            <div class="project-item">
                <p class="project-item-date">18 марта</p>
                <div class="project-item-icon" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat7.jpg);background-size:cover;background-position:0">
                    <button type="button" class="button">Подробнее о проекте</button>
                </div>
                <p class="project-item-info">Консервация яхты.  Подготовка к зимней стоянке</p>
                <a href="">ТО и зимняя консервация Монтаж электромоторов</a>
            </div>
            <div class="project-item">
                <p class="project-item-date">18 марта</p>
                <div class="project-item-icon" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat7.jpg);background-size:cover;background-position:0">
                    <button type="button" class="button">Подробнее о проекте</button>
                </div>
                <p class="project-item-info">Консервация яхты.  Подготовка к зимней стоянке</p>
                <a href="">ТО и зимняя консервация Монтаж электромоторов</a>
            </div>
            <div class="project-item">
                <p class="project-item-date">18 марта</p>
                <div class="project-item-icon" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat7.jpg);background-size:cover;background-position:0">
                    <button type="button" class="button">Подробнее о проекте</button>
                </div>
                <p class="project-item-info">Консервация яхты.  Подготовка к зимней стоянке</p>
                <a href="">ТО и зимняя консервация Монтаж электромоторов</a>
            </div>
            <div class="project-item">
                <p class="project-item-date">18 марта</p>
                <div class="project-item-icon" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat7.jpg);background-size:cover;background-position:0">
                    <button type="button" class="button">Подробнее о проекте</button>
                </div>
                <p class="project-item-info">Консервация яхты.  Подготовка к зимней стоянке</p>
                <a href="">ТО и зимняя консервация Монтаж электромоторов</a>
            </div>
            <div class="project-item">
                <p class="project-item-date">18 марта</p>
                <div class="project-item-icon" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/boat7.jpg);background-size:cover;background-position:0">
                    <button type="button" class="button">Подробнее о проекте</button>
                </div>
                <p class="project-item-info">Консервация яхты.  Подготовка к зимней стоянке</p>
                <a href="">ТО и зимняя консервация Монтаж электромоторов</a>
            </div>            
        </div>

    </div>
</div>
    


<?php get_footer();



