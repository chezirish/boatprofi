<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'top-bar-r'  => esc_html__( 'Top Bar', 'foundationpress' ),
		'mobile-nav' => esc_html__( 'Mobile', 'foundationpress' ),
		'footer-nav' => esc_html__( 'Footer menu', 'foundationpress' ),
		'services-nav' => esc_html__( 'Меню услуг', 'foundationpress' ),
		'city-nav' => esc_html__( 'Меню городов', 'foundationpress' ),
		'catalog-products-nav' => esc_html__( 'Меню категорий', 'foundationpress' )
	)
);



if ( ! function_exists( 'foundationpress_city_nav' ) ) {
	function foundationpress_city_nav() {
		wp_nav_menu(
			array(
				// 'before' 		 => 1,
				// 'after' 		 => 2,
				// 'echo'           => false,
				'container'      => 'div',
				'container_class' => 'header-address-city',
				// 'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<a href="">изменить город</a><div id="%1$s" class="header-address-city-modal">%3$s</div>',
				'theme_location' => 'city-nav',
				'depth'          => 0,
				'fallback_cb'    => false,
			)
		);
	}
}


if ( ! function_exists( 'foundationpress_catalog_products_nav' ) ) {
	function foundationpress_catalog_products_nav() {
		wp_nav_menu(
			array(
				'container'      => false,
				// 'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="vertical menu accordion-menu" data-accordion-menu data-multi-open="false">%3$s</ul>',
				'theme_location' => 'catalog-products-nav',
				'depth'          => 0,
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}


/**
 * Desktop navigation -  footer menu
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_footer_nav' ) ) {
	function foundationpress_footer_nav() {
		wp_nav_menu(
			array(
				'container'      => false,
				// 'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul class="vertical-menu" >%3$s</ul>',
				'theme_location' => 'footer-nav',
				'depth'          => 3,
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}



if ( ! function_exists( 'foundationpress_services_nav' ) ) {
	function foundationpress_services_nav() {
		wp_nav_menu(
			array(
				'container'      => false,
				// 'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<div class="sirvices-nav">%3$s</div>',
				'theme_location' => 'services-nav',
				'depth'          => 3,
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}

/**
 * Desktop navigation -  top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
	function foundationpress_top_bar_r() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'top-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}


/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
	function foundationpress_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'mobile-nav', 'foundationpress' ),
				'menu_class'     => 'vertical menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Mobile_Walker(),
			)
		);
	}
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationpress_add_menuclass' );
}
