<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Woocommerce settings */
require_once( 'library/woocommerce.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** custome post types and taxonomy */
require_once( 'library/custom-post-type.php' );


/** remove elemetns */
require_once( 'library/remove-elements.php' );

require_once( 'library/bread-crumbs.php'  );
require_once( 'library/carbon-fields.php'  );


require_once( 'library/ajax.php'  );


// some changes

add_filter( 'the_content', 'boatprofi_ul_style' );
function boatprofi_ul_style($content) {
    $content = str_replace("<ul>", "<ul class='custome-ul-style'>", $content);
    return $content;
}

function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="menu vertical nested" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 


function remove_short_description() {
    remove_meta_box( 'postexcerpt', 'product', 'normal');
}

add_action('add_meta_boxes', 'remove_short_description', 999);


// function wp_nav_menu_remove_attributes( $menu ){
//     return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu );
// }
// add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
