<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<!-- <div class="title-bar-left"> -->
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<div class="top-bar-social-icons-mobile">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
				</div>
				<!-- <span class="site-mobile-title title-bar-title">
					<p><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home">Главная</a></p>
				</span> -->
			<!-- </div> -->
		</div>

		<nav class="site-navigation top-bar <?php echo  is_front_page() ? '' : 'links-black' ?>" role="navigation">
			<!-- <div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div> -->
			<div class="top-bar-left" id="header-nav">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
				<div class="top-bar-social-icons <?php echo  is_front_page() ? '' : 'svg-colors' ?>">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
				</div>
			</div>
		</nav>

		<div class="header-table">
			<div class="header-info <?php echo  is_front_page() ? '' : 'padding-top-header' ?>">
				<div class="header-logo">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/logo.png" alt="logo">
				</div>
				<div class="header-tagline">
					<p>Подготовим ваш <br> катер к рыбалке.</p>
				</div>
				<div class="header-phone tablet">
					<p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"> +7 910 818 81 39</p>
					<a href="" class="tablet">обратный звонок</a>
				</div>
				<div class="header-address desktop">
					<p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address_icon-header.png" alt="address_icon" > г. Ярославль, ул. Республиканская д.7. ТЦ «Флагман»</p>
					<a href="">показать на карте</a>
					<a href="">изменить город</a>		
				</div>
			</div>
			<div class="header-navigation-phone">
				<div class="header-phone clearfix">
					<p class="float-left"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"> +7 910 818 81 39</p>
					<img class="float-right" src="<?= get_template_directory_uri() ?>/dist/assets/images/basket-icon.png" alt="address_icon" alt="basket">
				</div>
				<a class="header-navigation-link-btn" href="/catalog-products">
					<div class="products-btn">
						<div class="menu-wrapper">
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Каталог товаров</p>
					</div>
				</a>
				<a class="header-navigation-link-btn" href="/services">
				<div class="services-btn">
					<div class="menu-wrapper">
						<span class="menu-icon-span"></span>
						<span class="menu-icon-span"></span>
						<span class="menu-icon-span"></span>
					</div>
					<p>Наши услуги</p>	
				</div>
				</a>
			</div>
			<div class="header-navigation grid-x">
				<a class="header-navigation-link-btn" href="/catalog-products">
					<div class="products-btn medium-2 large-2">
						<div class="menu-wrapper">
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Каталог товаров</p>
					</div>
				</a>
				<a class="header-navigation-link-btn" href="/services">
					<div class="services-btn medium-2 large-2">
						<div class="menu-wrapper">
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Наши услуги</p>
					</div>
				</a>
				<div class="search cell medium-5 large-6">
					<form action="">
						<input placeholder="Введите название товара" type="text">
					</form>
				</div>
				<div class="woocommerce-data medium-3 large-2">
					<div class="woocommerce-data-wrapper  <?php echo  is_front_page() ? '' : 'svg-colors' ?>">
						<img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart">
						<img src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
						<img src="<?= get_template_directory_uri() ?>/dist/assets/images/basket-icon.png"  alt="basket">
					</div>
				</div>
			</div>
		</div>
	</header>
