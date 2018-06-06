<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );



if ( have_posts() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */

	echo '<div class="catalog-products_content cell medium-9 large-9">';
	echo '<div class="grid-container">';
	echo '<h1 class="catalog-products_content-title">Каталог товаров</h1>';
	echo '<div class="catalog-products_products-filter clearfix">';
		echo '<div class="catalog-products_sort float-left">';
			do_action( 'woocommerce_before_shop_loop' );
		echo '</div>';
		echo '<div class="catalog-products_view float-right">';
			echo'<div class="menu-wrapper">
					<span class="menu-icon-span"></span>
					<span class="menu-icon-span"></span>
					<span class="menu-icon-span"></span>
				</div>
				<div class="menu-squire"></div>';
		echo '</div>';
	echo '</div>';			
	echo '</div>';		
	

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	// do_action( 'woocommerce_after_shop_loop' );
	?>
		<div class="pagination"  role="navigation" aria-label="Pagination">
			<?php echo paginate_links();  ?>
		</div>  

	<section class="callout section-form small reveal"  id="exampleModal1" data-reveal>
		<button class="close-button"  aria-label="Close modal" type="button"  data-close>
			<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="section-form-title-desktop">Подготовим ваш катер <br>  к любительской или спортивной рыбалке</h4>
		<h4 class="section-form-title-tablet">Подготовим мой катер</h4>
		<!-- <form action="">
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
				<input class="css-checkbox" id="checkbox7" type="checkbox">
				<label for="checkbox7" class="css-label lite-x-green">Согласен с "политикой конфидециальности"</label>
				<p class="file-return"></p>
			</div>
			<button class="section-title-submit section-title-submit-tablet" type="submit">Отправть заявку</button>
		</form> -->
		<?php echo do_shortcode('[contact-form-7 id="336" title="Каталог товаров форма: (сложно выбрать)"]'); ?>
		<?php //echo do_shortcode('[contact-form-7 id="239" title="Каталог товаров форма: (сложно выбрать)"]'); ?>

		<?php $politics = carbon_get_theme_option( 'crb_politics' ); ?>
		<?php if($politics != ''): ?>
			<a target="_blank" href="<?php echo $politics;  ?>">Пользовательское соглашение</a>
		<?php endif; ?>	
	</section>


	<div class="grid-container">       
		<div class="catalog-products_choose clearfix">
			<h4 class="float-left">Сложно выбрать?</h4>
			<button type="button" data-open="exampleModal1" class="float-right button">Записаться на консультацию</button>
		</div>
		<div class="catalog-products_question clearfix">
			<h4 class="float-left">Остались вопросы?</h4>
			<button data-open="header__callback" aria-controls="header__callback"  aria-haspopup="true" tabindex="0" type="button" class="float-right button">Звоните</button>
		</div>
		<div class="phone-tablet banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg);background-size:cover">
			<h3>Разборный якорь  </h3>
			<p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
			<button type="button" class="button">Подробнее</button>
		</div>

		<div class="seo-text">
			<?php //echo apply_filters( 'the_content', get_field( 'Сео-контент' ) ); ?>

			<?php 				
				$term = get_term( get_queried_object()->term_id );
				$seo  = get_field( 'seo-text', $term ); 
				echo $seo ? $seo : '';
			?> 
		</div>
	</div>
	<?php
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

?>
	<div class="grid-container">
        <?php  the_field('seo-text', get_option( 'woocommerce_shop_page_id' )); ?>
    </div>

<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );




get_footer( 'shop' );
