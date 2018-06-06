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
                <?php 
                $footer_info = carbon_get_theme_option( 'crb_footer_info' );
                $footer_phrase = carbon_get_theme_option( 'crb_footer_phrase' );
                $footer_link = carbon_get_theme_option( 'crb_company_link' );
                $footer_politics = carbon_get_theme_option( 'crb_politics' );    
                if($footer_info != ''): ?>					       
                    <p class="company-info"><?=  $footer_info ?></p>
                <?php endif; ?>
                <?php if($footer_phrase != ''): ?>	
                    <p class="footer-slogan"><?=  $footer_phrase ?></p>
                <?php endif; ?>
                <nav class="footer-nav-menu">
                <?php if($footer_politics != ''): ?>	
                    <a target="_blank" href="<?= $footer_politics; ?>">Пользовательское соглашение</a>
                <?php endif; ?>
                    <?php if($footer_link != ''): ?>
                        <span>Разработано в:</span>
                        <a target="_blank" href="<?=  $footer_link ?>"> Папинсайт</a>
                    <?php endif; ?>
                </nav>
            </div>  
            <div class="footer-menu cell medium-3 large-3">
                <h6>МЕНЮ САЙТА</h6>
                <?php foundationpress_footer_nav(); ?>
            </div>
            <div class="footer-contacts cell medium-3 large-3">
                <h6>НАШИ КОНТАКТЫ</h6>
                <div class="footer-contacts-phone">
                    <?php $phone = carbon_get_theme_option( 'crb_phone' ); ?>
					<?php if($phone != ''): $tel_href = trim($phone, '+');  $tel_href = str_replace(' ', '', $tel_href );?>					
                    <a href="tel:<?= $tel_href ?>">
                        <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon.png" alt="phone_icon"> <?= ' ' . $phone; ?> </p>
                    </a>
                    <?php endif; ?>
                    <a  data-open="header__callback" aria-controls="header__callback"  aria-haspopup="true" tabindex="0" href="javascript:void(0)">обратный звонок</a>
                </div>
                <div class="footer-contacts-address">
                    <?php $address = carbon_get_theme_option( 'crb_address' ); ?>
					<?php if($address != ''): ?>					
                        <p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address-icon.png" alt="address_icon" ><?= ' ' . $address; ?> </p>
                    <?php endif; ?>
                    <a target="_blank"href="<?= get_page_link(18); ?>">показать на карте</a>
                </div>
                <div class="footer-social-icons">
                    <?php 
                        $link_in = carbon_get_theme_option( 'crb_in' );
                        $link_fb = carbon_get_theme_option( 'crb_fb' );
                        $link_vk = carbon_get_theme_option( 'crb_vk' );
				    ?>
                    <?php if($link_in != ''): ?>
						<a target="_blank" href="<?php echo $link_in ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon"></a>
					<?php endif; ?>
					<?php if($link_fb != ''): ?>
						<a target="_blank" href="<?php echo $link_fb ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon"></a>
						<?php endif; ?>
					<?php if($link_vk != ''): ?>
						<a class="vk_social_footer" target="_blank" class="vk_social" href="<?php echo $link_vk ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon"></a>
					<?php endif; ?>
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