<?php
/*
Template Name: Контакты
*/

get_header(); ?>

<div class="contacts_page-content">
    <h3>Контакты</h3>
    <div class="contacts_page-map">
        <div class="contacts_page-map-info-block">
            <div class="header-phone">
                <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"> +7 910 818 81 39</p>
                <a href="">обратный звонок</a>
            </div>
            <div class="header-address">
                <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address_icon-header.png" alt="address_icon" > г. Ярославль, <br> ул. Республиканская д.7. ТЦ «Флагман»</p>
                <a href="">показать на карте</a>
                <div class="header-address-city">
                    <a href="">изменить город</a>	
                    <div class="header-address-city-modal">
                        <p>Ярославль</p>
                        <p>Москва</p>
                        <p>Тверь</p>
                    </div>
                </div>	
            </div>
            <button type="button" class="button">Написать нам</button>
            <p>По всем вопросам обращайтесь: </p>
            <div class="contacts_page-map-info-block-contacts-data">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/contacts-avatar.jpg">
                <div class="contacts_page-map-info-block-contacts-data-text">
                    <p class="contacts_page-map-info-block-name">Дмитрий Зюзин</p>
                    <p class="contacts_page-map-info-block-number">+7 930 101 40 45</p>
                </div>
            </div>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Карта не установлена.</p>
        <?php endif; ?>

    </div>

</div>

<?php get_footer();
