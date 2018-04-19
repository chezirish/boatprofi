<?php
/*
Template Name: Главная
*/

?>
<div class="wrapper" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg);background-size:cover;background-position:center">
</div>

<?php /* <img class="main_background" src="<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg" alt="boat"> */ ?>

<?php
get_header(); ?>

<section class="section-title">
    <h1>Подготовим  Ваш катер к рыбалке</h1>
    <p>За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера. </p>
</section>

<!-- <div class="section-form-wrapper"> -->

<!-- <div class="grid-container"> -->
<section class="callout section-form">
    
        <button class="close-button" aria-label="Dismiss alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="section-form-title-desktop">Подготовим ваш катер <br>  к любительской или спортивной рыбалке</h4>
        <h4 class="section-form-title-tablet">Подготовим мой катер</h4>
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
<!-- </div> -->
<!-- </div> -->

<div class="section-services-wrapper">
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
                <h5>Установка <br> картоплоттеров </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Монтаж <br> электромоторов</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon2.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Подиумы <br> из стеклопластика</h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon3.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5> Монтаж и ТО <br>  лодочных моторов  </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon4.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Пошив чехлов <br> и тентов  </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon5.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Ремонт любых <br>  корпусов </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon6.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>ТО троллинговых <br> моторов  </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon7.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item clearfix">
            <div class="sirvices-item-content float-left">
                <h5>Тюнинг лодочных <br> прицепов   </h5>
                <button type="button" class="button">Заказать</button>
                <a href="#">подробнее</a>
            </div>
            <div class="sirvices-item-icon float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/service-icon8.png" alt="icon">
            </div>
        </div>
    </div>
</section>
</div>


<section class="section-projects">
<div class="section-projects-content">
    <div class="section-headline">
        <h3>Наши проекты</h3>
    </div>
    <div class="project-slider">
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/car.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat10.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
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
                <h5>Эхолоты и картоплоттеры</h5>
                <a href="">Lowrance</a>
                <a href="">Humminbird</a>
                <a href="">RayMarine</a>
                <a href="">Garmin</a>
                <a href="">StarMaps</a> 
            </div>
            <div style="width:190px" class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool10.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Аккумуляторы <br> и зарядные устройства</h5>
                <a href="">Аккумуляторные батареи</a>
                <a href="">Зарядные устройства</a>
                <a href="">Аксессуары</a>
                   
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool11.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Моторы для лодок</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool12.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Аксессуары для прицепов</h5>

                <a href="">Опора</a>
                <a href="">Опорное колесо</a>
                <a href="">Колпачок на фаркоп </a>
                <a href="">Светодиодные</a>
                <a href="">габариты</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool13.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Сопутствующие товары</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool14.png" alt="icon">
            </div>
        </div>
    </div>
</section>

<section class="section-products">
<div class="section-products-content">
    <div class="section-headline">
        <h3>Товары нашего магазина</h3>
    </div>
    <div class="grid-container">
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
    </div>


    <div class="services-list">
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <p class="sirvices-item-tag">Хит продаж</p>
            <p class="sirvices-item-tag">Новинка</p>
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>

            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Троллинговый мотор Minn Kota TERROVA 55LB-48</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Эхолот-картплоттер  Humminbird HELIX 10 SI GPS</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Троллинговый мотор Minn Kota TERROVA 55LB-48</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>

        <div class="banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg);background-size:cover">
            <h3>Разборный якорь  </h3>
            <p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
            <button type="button" class="button">Подробнее</button>
        </div>

        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Троллинговый мотор Minn Kota TERROVA 55LB-48</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool4.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Эхолот-картплоттер  Humminbird HELIX 10 SI GPS</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                </div>
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-modal-basket reveal" data-closable>
                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4>Товар оправлен в корзину!</h4>
                <a href="">перейти в корзину</a>
                <p>Список будет очищен по завершению сессии</p>
            </div>
            <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png);background-size:contain;background-position:center;background-repeat:no-repeat">
               <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
            </div>
            <div class="sirvices-item-content">
                <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                <p><span class="sirvices-item-costs">106600 руб.</span></p>
                <div class="bottom-block">
                    <button type="button" class="button add-basket">В корзину</button>
                    <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center">
                    <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
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
    <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-example.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-item.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-example.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-item.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-example.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>
        <div class="reviews-slider-content grid-x grid-padding-x">
            <div class="reviews-slider-name cell medium-12 large-auto">
                <p>Андрей Питерцов</p>
                <p class="reviews-slogan">Чемпион по спортивной рыбалке</p>
            </div>
            <div class="reviews-slider-media cell medium-12 large-auto">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-item.jpg" alt="man">
            </div>
            <div class="reviews-slider-text cell medium-12 large-5">
                <p>Добрый день! Искал электромотор Minn Kota ULTERRA 80 I-Pilot LINK 24 V/ Обращался во многие фирмы в разных городах, кто то отказал вообще, кто то обещал поставку весной, и никто не мог сказать точную цену на время поставки. Зашел на сайт BOATLAB.PRO, позвонил, мне ответил сотрудник фирмы Евгений, который конкретно сказал срок поставки и цену.</p>
                <p>Советую обращаться в эту компанию по тюнингу и комплектующим для катеров и лодок. Всему коллективу спасибо!</p>  
            </div>
        </div>

    </div>
    <div class="reviews-slider-buttons clearfix">
        <div class="slider-arrows-wrapper">
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
            <p class="reviews-slider-count-sliders"><span class="current-slider"></span> из <span class="total-sliders"></span></p>
        </div>
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
