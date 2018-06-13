<?php
/*
Template Name: Контакты
*/

get_header(); ?>

<div class="contacts_page-content">
    <div class="grid-container">
        <h3>Контакты</h3>
        <div class="contacts_page-map-info-block-mobile">
            
        </div>
    </div>

    <div class="contacts_page-map">
        <div class="contacts_page-map-info-block">
            <div class="header-phone">
                <?php $phone = carbon_get_theme_option( 'crb_phone' ); ?>
                        <?php if($phone != ''): $tel_href = trim($phone, '+');  $tel_href = str_replace(' ', '', $tel_href );?>					
                        <a href="tel:<?= $tel_href ?>">
                            <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"><?= ' ' . $phone; ?> </p>
                        </a>
                <?php endif; ?>
               
                <a data-open="header__callback" aria-controls="header__callback" aria-haspopup="true" tabindex="0" href="javascript:void(0)">обратный звонок</a>
            </div>
            <div class="header-address">
                <?php $address = carbon_get_theme_option( 'crb_address' ); ?>
                <?php if($address != ''): ?>					
                    <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address_icon-header.png" alt="address_icon" ><?= ' ' . $address; ?> </p>
                <?php endif; ?>
                
                <a href="">показать на карте</a>
                <!-- <div class="header-address-city">
                    <a href="">изменить город</a>	
                    <div class="header-address-city-modal">
                        <p>Ярославль</p>
                        <p>Москва</p>
                        <p>Тверь</p>
                    </div>
                </div>	 -->
                <?php echo foundationpress_city_nav(); ?>
            </div>
            <button type="button" data-open="header__callback" aria-controls="header__callback" aria-haspopup="true"  class="button">Написать нам</button>
            
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
