<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>



<div class="grid-container">
<?
	wc_print_notices();
    $product     = wc_get_product( $post->ID );
    $related = $product->get_related( );
	?>
<?php $gallery   = $product->get_gallery_image_ids(); ?>
<?php //var_dump( $related ) ?>

</div>

<div class="single-product-page">
    <div class="single-product-page__content grid-x grid-padding-x">
            <div class="single-product-page__left-content cell medium-6 large-6">
            <h4><?php the_title() ?></h4>
            <!-- <p class="p-order"><span class="span-order">Под заказ </span> (Предполагаемый срок поставки: 25 марта)</p> -->
                <?php if( !empty($gallery) ): ?>
                <div class="single-product-page__preview-icons-wrapper">
                    <?php if( !empty($gallery[0]) ): ?>
                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <?php echo wp_get_attachment_image($gallery[0], array(50,50)); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($gallery[1]) ): ?>
                    <div class="single-product-page__preview-icon">
                        <?php echo wp_get_attachment_image($gallery[1], array(50,50)); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($gallery[2]) ): ?>
                    <div class="single-product-page__preview-icon">
                        <?php echo wp_get_attachment_image($gallery[2], array(50,50)); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="single-product-page__preview-avatar">
                    <?php echo wp_get_attachment_image($product->get_image_id(), array('auto', '270')); ?>
                </div>
                <?php if( !empty($gallery) ): ?>
                <div class="single-product-page__preview-icons-tablet">
                <?php if( !empty($gallery[0]) ): ?>
                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <?php echo wp_get_attachment_image($gallery[0], array(50,50)); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($gallery[1]) ): ?>
                    <div class="single-product-page__preview-icon">
                        <?php echo wp_get_attachment_image($gallery[1], array(50,50)); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($gallery[2]) ): ?>
                    <div class="single-product-page__preview-icon">
                        <?php echo wp_get_attachment_image($gallery[2], array(50,50)); ?>
                    </div>
                <?php endif; ?>
                </div>
                <?php endif; ?>

            </div>
            <div class="single-product-page__product-nav  cell medium-6 large-6">
                <h4> <?php the_title(); ?></h4>
                <!-- <p class="p-order"><span class="span-order">Под заказ </span> (Предполагаемый срок поставки: 25 марта)</p> -->
                <?php if( !empty($product->get_price()) ): ?>
                <p class="single-service-page__price"><?= $product->get_price() . " руб." ?></p>
                <?php endif; ?>
                    <!-- <a data-product_id="<?= get_the_ID() ?>" data-product_sku="<?= $product->get_sku(); ?>" rel="nofollow" class="product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo '?add-to-cart=' . get_the_ID(); ?>"> -->
                    <form class="cart single-service-page__form" method="post" enctype="multipart/form-data">
                        <button type="submit" name="add-to-cart" value="<?= $product->get_id() ?>" class="single-service-page__button single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                    </form>
                    <!-- </a> -->
                   
                <!-- <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"><span>В избранное</span></p> -->
                <!-- <p class="single-service-page__add"> <span>В избранное</span></p> -->
                <?php  echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product->get_id() . '" ]'); ?>
                <p class="single-service-page__add"><img class="scheme" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png"  alt="scheme"><span>Сравнить</span></p>
                <div class="footer-social-icons">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                </div>

                
            </div>
    </div>
    <div class="single-product-page__content grid-x grid-padding-x">
        <div class="single-product-page__left-content cell medium-12 large-6">
            <div class="single-product-page-product-desc">
                <h4>Описание товара</h4>
                <p class="line-height"><?= $product->get_description() ?></p>
            </div>
            <div class="price float-left">
                <a href="">Показать подробнее</a>
                <!-- <div class="price-modal">
                    <a>По возрастанию</a>
                    <a>По убыванию</a>
                </div> -->
            </div>
        </div>

        <div class="single-product-page-product-char cell medium-12 large-6">
            <h4>Характеристики товара</h4>
            <table>
                <tbody>                                                         
                    <tr>
                        <td>Тип</td>
                        <td>эхолт</td>
                    </tr>  
                    <tr>
                        <td>Производитель</td>
                        <td>Humminbird</td>
                    </tr>  
                    <tr>
                        <td>Трансдьюсер	опциональный</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td>Влагозащищенный корпус </td>
                        <td>есть</td>
                    </tr>  
                    <tr>
                        <td>Класс влагозащиты	IPX7</td>
                        <td></td>
                    </tr>  
                    <tr>
                        <td>Подключение внешнего источника питания (12 В) </td>
                        <td>есть</td>
                    </tr>  
                    <tr>
                        <td>Питание от батареек/аккумулятора	</td>
                        <td>есть</td>
                    </tr>                                                                                                                   
                </tbody>
            </table>
            <div class="price float-left">
                <a href="">Показать подробнее</a>
                <!-- <div class="price-modal">
                    <a>По возрастанию</a>
                    <a>По убыванию</a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="portfolio-page__content">
<div class="grid-container">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
                <h3 class="float-left">С этим товаров покупают</h3>
                <div class="slider-products-right slider-products-next float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
                <div class="slider-products-left slider-products-prev float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
            </div>
            <div class="products-slider">
                <!-- <div class="sirvices-item">
                    <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/tool3.png);background-size:contain;background-position:center;background-repeat:no-repeat">
                    <?php /* <img  src="<?= get_template_directory_uri() ?>/dist/assets/images/tool2.png" alt="tool"> */ ?>
                    </div>
                    <div class="sirvices-item-content">
                        <p>Зарядное устройство Dual Pro Professional SS1 220 В</p>
                        <p><span class="sirvices-item-costs">106600 руб.</span></p>
                        <div class="bottom-block">
                            <button type="button" class="button">Заказать</button>
                            <img class="heart-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart">
                            <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme">
                        </div>
                    </div>
                </div> -->

                    <?php
                    
                        $args = array(
                            'post_type' => 'product',
                            'post__in'=> $related,
                            'post__not_in' => array( $post->ID ),
                            'posts_per_page' => 6
                            );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post();
                                
                                wc_get_template_part( 'content', 'product' );
                            endwhile;
                        } else {
                            echo __( 'No products found' );
                        }
                        wp_reset_postdata();
                    ?>
                

            </div>
        </div>
    </div>
    </div>
</div>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		// do_action( 'woocommerce_before_main_content' );
	?>

		<?php //while ( have_posts() ) : the_post(); ?>
			<?php //wc_get_template_part( 'content', 'single-product' ); ?>

		<?php //endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		// do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
