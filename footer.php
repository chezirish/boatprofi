<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid grid-x grid-margin-x">  
            <div class="footer-boatprofi cell medium-6 large-6">
                <img class="boatprofi-logo-footer" src="<?= get_template_directory_uri() ?>/dist/assets/images/boatprofi_logo_footer2.png" alt="logo">
                <p class="company-info">Профессиональная подготовка катеров для спортивной рыбалки - это не просто красивый маркетинговый слоган. За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера.</p>
                <p class="footer-slogan">2018 © BoatProfi <br> Ремонт и тюнинг лодок и катеров</p>
                <nav class="footer-nav-menu">
                    <a href="#">Пользовательское соглашение</a>
                    <span>Разработано в:</span>
                    <a href="#"> Папинсайт</a>
                </nav>
                <!-- <span>Пользовательское соглашение</span>
                <span>Разработано в: Папинсайт</span> -->
            </div>  
            <div class="footer-menu cell medium-3 large-3">
                <h6>МЕНЮ САЙТА</h6>
                <?php foundationpress_footer_nav(); ?>
            </div>
            <div class="footer-contacts cell medium-3 large-3">
                <h6>НАШИ КОНТАКТЫ</h6>
                <div class="footer-contacts-phone">
                    <a href="tel:79108188139">
                    <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon.png" alt="phone_icon"> +7 910 818 81 39</p>
                    </a>
                    <a href="#">обратный звонок</a>
                </div>
                <div class="footer-contacts-address">
                    <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address-icon.png" alt="address_icon" > г. Ярославль, ул. Республиканская д.7. ТЦ «Флагман»</p>
                    <a href="#">показать на карте</a>
                </div>
                <div class="footer-social-icons">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>