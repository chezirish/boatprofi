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
						<a target="_blank" class="vk_social" href="<?php echo $link_vk ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon"></a>
					<?php endif; ?>
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
					<?php if($link_in != ''): ?>
						<a target="_blank" href="<?php echo $link_in ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon"></a>
					<?php endif; ?>
					<?php if($link_fb != ''): ?>
						<a target="_blank" href="<?php echo $link_fb ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon"></a>
						<?php endif; ?>
					<?php if($link_vk != ''): ?>
						<a target="_blank" class="vk_social" href="<?php echo $link_vk ?>"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon"></a>
					<?php endif; ?>
				</div>
			</div>
		</nav>

		<div class="header-table">
			<div class="header-info <?php echo  is_front_page() ? '' : 'padding-top-header' ?>">
				<div class="header-logo">
					<a href="/">
					<img src="<?= get_template_directory_uri() ?>/dist/assets/images/logo.png" alt="logo">
					</a>
				</div>
				<div class="header-tagline">
				<?php $phrase = carbon_get_theme_option( 'crb_header_phrase' ); ?>
					<?php if($phrase != ''): ?>
						<p><?php echo $phrase;  ?></p>
					<?php endif; ?>				
				</div>
				<div class="header-phone tablet">
					<?php $phone = carbon_get_theme_option( 'crb_phone' ); ?>
					<?php if($phone != ''): $tel_href = trim($phone, '+');  $tel_href = str_replace(' ', '', $tel_href );?>
						<a class="header-phone-number" href="tel:<?= $tel_href ?>">
							<p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"><?= ' ' . $phone; ?></p>
						</a>
					<?php endif; ?>
					<a data-open="header__callback" aria-controls="header__callback" aria-haspopup="true" tabindex="0" href="javascript:void(0)" class="tablet">обратный звонок</a>
					
				</div>
				<div class="header-address desktop">
					<?php $address = carbon_get_theme_option( 'crb_address' ); ?>
					<?php if($address != ''): ?>					
						<p><img src="<?= get_template_directory_uri() ?>/dist/assets/images/address_icon-header.png" alt="address_icon" ><?= ' ' . $address; ?> </p>
                    <?php endif; ?>
					<a target="_blank"href="<?= get_page_link(18); ?>">показать на карте</a>
					<div class="header-address-city">
						<a href="">изменить город</a>	
						<div class="header-address-city-modal">
							<p>Ярославль</p>
							<p>Москва</p>
							<p>Тверь</p>
						</div>
					</div>	
				</div>
			</div>
			<div class="header-navigation-phone">
				<div class="header-phone clearfix">
					<?php if($phone != ''): $tel_href = trim($phone, '+');  $tel_href = str_replace(' ', '', $tel_href );?>
					<a class="header-phone-number" href="tel:<?= $tel_href ?>">
						<p class="float-left"><img src="<?= get_template_directory_uri() ?>/dist/assets/images/phone_icon-header.png" alt="phone_icon"> <?= ' ' . $phone; ?></p>
					</a>
					<?php endif; ?>
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">

						<div class="basket-wrapper basket-wrapper-phone">
						<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
							<?php wp_kses_data( WC()->cart->get_cart_contents_count()) != 0 ? $basket_count = wp_kses_data( WC()->cart->get_cart_contents_count() ) : $basket_count =  '';?>
							<?php if($basket_count != 0): ?>
							<span class="basket-count"><?php echo $basket_count; ?></span>
							<?php endif; ?>
							<img class="float-right" src="<?= get_template_directory_uri() ?>/dist/assets/images/basket-icon.png" alt="basket">
							</a>
						</div>
					
					</a>
				</div>
				<a class="header-navigation-link-btn" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
					<div class="products-btn">
						<div class="menu-wrapper">
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Каталог товаров</p>
					</div>
				</a>
				<a class="header-navigation-link-btn" href="<?= get_page_link(188); ?>">
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
				
					<div class="products-btn medium-2 large-2">
						<a class="header-navigation-link-btn" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
						<div class="menu-wrapper">
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Каталог товаров</p>
						</a>
						<ul class="dropdown-menu">
							<!-- <li><a href="">Электрические  троллинговые моторы</a></li>
							<li><a href="">Эхолоты и картоплоттеры </a></li>
							<li><a href="">Аккумуляторы и зарядные устройства </a></li>
							<li><a href="">Моторы для лодок </a></li>
							<li class="dropdown-menu-have-nested"><a href="">Аксессуары для прицепов </a>
								<ul class="dropdown-menu dropdown-menu-nested">
									<li><a href="">опора </a></li>
									<li><a href="">опорное кресло </a></li>
									<li><a href="">Колпачок на фаркоп </a></li>
									<li><a href="">Светодиодные габариты </a></li>
									<li><a href="">защита </a></li>
								</ul>
							</li>
							<li><a href="">Сопутствующие товары </a></li> -->

							<?php 

								$args = array(
									'taxonomy'   => "product_cat",
									'parent'  	 =>	0
									// 'fields' 	 => "names"
								);
								$product_categories = get_terms($args);

								// var_dump($product_categories);

								foreach( $product_categories as $cat ) { 
									$childs =  get_terms(array('taxonomy'   => "product_cat", 'parent' => $cat->term_id));
									// var_dump($childs);

									?>

									<li <?php echo !empty($childs) ? 'class="dropdown-menu-have-nested"' : '' ?> ><a href="<?php echo get_term_link( $cat->term_id ,'product_cat'); ?>"><?php echo $cat->name ?></a>
										<?php if( !empty($childs) ): ?>
										<ul class="dropdown-menu dropdown-menu-nested">
											<?php foreach($childs as $child): ?>
												<li><a href="<?php echo get_term_link( $child->term_id ,'product_cat'); ?>"><?php echo $child->name ?></a></li>
											<?php endforeach; ?>
										</ul>
										<?php endif; ?>
									</li>
									
								<?php }

							?>
						</ul>
					</div>
				
					
					<div class="services-btn medium-2 large-2">
						<a class="header-navigation-link-btn" href="<?= get_page_link(188); ?>">
						<div class="menu-wrapper"> 
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
							<span class="menu-icon-span"></span>
						</div>
						<p>Наши услуги</p>
						</a>
						<ul class="dropdown-menu">
							<!-- <li><a href="">Монтаж  электромоторов</a></li>
							<li><a href="">Установка эхолотов </a></li>
							<li><a href="">Подиумы  из стеклопластика </a></li>
							<li><a href="">Установка  картоплоттеров </a></li>
							<li><a href="">Монтаж  электромоторов</a></li>
							<li><a href="">ТО троллинговых моторов  </a></li> -->
							<?php
                
								$ourCurrentPage = get_query_var('paged');
								$args = array(

									'paged' => $ourCurrentPage,
									// 'posts_per_page' => 9,
									// 'category__in' => array(33),                
									'post_type' => 'services-post' );
								$postslist = new WP_Query( $args );

								if ( $postslist->have_posts() ) :
									while ( $postslist->have_posts() ) : $postslist->the_post();
									

										?>
											<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

										<?php

											

									endwhile;
									wp_reset_postdata(); 
								endif;
							?>
						</ul>
					</div>
				
				<div class="search cell medium-5 large-6">
					<form action="<?php echo get_home_url(); ?>">
						<input name='s' placeholder="Введите название товара" type="text">
					</form>
				</div>
				<div class="woocommerce-data medium-3 large-2">
					<div class="woocommerce-data-wrapper  <?php echo  is_front_page() ? '' : 'svg-colors' ?>">
						<a style="margin-right: 30px;display: inline-block" href="<?= get_page_link(308); ?>"> 
						<img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart">
						</a>
						<!-- <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme"> -->
						<div class="basket-wrapper">
						<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
							<?php wp_kses_data( WC()->cart->get_cart_contents_count()) != 0 ? $basket_count = wp_kses_data( WC()->cart->get_cart_contents_count() ) : $basket_count =  '';?>
							<?php if($basket_count != 0): ?>
							<span class="basket-count"><?php echo $basket_count; ?></span>
							<?php endif; ?>
							<img src="<?= get_template_directory_uri() ?>/dist/assets/images/basket-icon.png"  alt="basket">
							</a>
						</div>
						
						<!-- </a> -->
					</div>
				</div>
			</div>
		</div>
			<a class="arrow-top-up" href="">
			<img src="<?= get_template_directory_uri() ?>/dist/assets/images/to-up.svg"  alt="arrow">
			</a>
	</header>

	<?php if(!is_front_page()): ?>
		<div class="grid-container">
			<!-- <div class="bread-crumbs">
				<a href="">Каталог товаров</a>
				<a href="">Электрические</a>
				<p>троллинговые моторы</p>	
			</div> -->
			<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<?php do_action('boatprofi_breadcrumb'); ?>

		</div>
	<?php endif; ?>



	        <!-- modal form -->
	<section class="callout section-form small reveal"  id="header__callback" data-reveal>
		<button class="close-button"  aria-label="Close modal" type="button"  data-close>
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="section-form-title-desktop">Мы вам перезвоним</h4>
		<h4 class="section-form-title-tablet">Мы вам перезвоним</h4>
		<?php echo do_shortcode('[contact-form-7 id="414" title="Формы на сайте"]'); ?>
		<?php //echo do_shortcode('[contact-form-7 id="249" title="Формы на сайте"]'); ?>

		<?php $politics = carbon_get_theme_option( 'crb_politics' ); ?>
		<?php if($politics != ''): ?>
			<a target="_blank" href="<?php echo $politics;  ?>">Пользовательское соглашение</a>
		<?php endif; ?>	
	</section>


		<!-- modal form -->
	<section class="callout section-form small reveal"  id="footer__callback" data-reveal>
		<button class="close-button"  aria-label="Close modal" type="button"  data-close>
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="section-form-title-desktop">Мы вам перезвоним</h4>
		<h4 class="section-form-title-tablet">Мы вам перезвоним</h4>
		<?php echo do_shortcode('[contact-form-7 id="414" title="Формы на сайте"]'); ?>
		<?php //echo do_shortcode('[contact-form-7 id="249" title="Формы на сайте"]'); ?>

		<?php $politics = carbon_get_theme_option( 'crb_politics' ); ?>
		<?php if($politics != ''): ?>
			<a target="_blank" href="<?php echo $politics;  ?>">Пользовательское соглашение</a>
		<?php endif; ?>	
	</section>
    
    