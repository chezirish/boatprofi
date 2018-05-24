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

                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <?php echo wp_get_attachment_image($product->get_image_id()); ?>
                    </div>
                    <?php foreach ($gallery as &$value): ?>
                        <div class="single-product-page__preview-icon">
                            <?php echo wp_get_attachment_image($value); ?>
                        </div>
                    <?php endforeach; ?>

                </div>
                <?php endif; ?>
                <div class="single-product-page__preview-avatar">
                    <?php echo wp_get_attachment_image($product->get_image_id(), array('300', '270')); ?>
                </div>
                <?php if( !empty($gallery) ): ?>
                <div class="single-product-page__preview-icons-tablet">
                    <div class="single-product-page__preview-icon single-product-page__preview-icon-is-active">
                        <?php echo wp_get_attachment_image($product->get_image_id()); ?>
                    </div>
                    <?php foreach ($gallery as &$value): ?>
                        <div class="single-product-page__preview-icon">
                            <?php echo wp_get_attachment_image($value); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>
            <div class="single-product-page__product-nav  cell medium-6 large-6">
                <h4> <?php the_title(); ?></h4>
                <!-- <p class="p-order"><span class="span-order">Под заказ </span> (Предполагаемый срок поставки: 25 марта)</p> -->
                <?php if( !empty($product->get_price()) ): ?>
                <p class="single-service-page__price"><?= $product->get_price() . " руб." ?></p>
                <?php endif; ?>
                    <!-- <a data-product_id="<?= get_the_ID() ?>" data-product_sku="<?= $product->get_sku(); ?>" rel="nofollow" class="product_type_simple add_to_cart_button ajax_add_to_cart" href="<?php echo $product->add_to_cart_url( ); ?>"> -->
                    <form class="cart single-service-page__form" method="post" enctype="multipart/form-data">
                        <button type="submit" name="add-to-cart" value="<?= $product->get_id() ?>" class="single-service-page__button single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
                    </form>
                    <!-- </a> -->
                   
                <!-- <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"><span>В избранное</span></p> -->
                <!-- <p class="single-service-page__add"> <span>В избранное</span></p> -->
                <?php  echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product->get_id() . '" ]'); ?>
                <!-- <p class="single-service-page__add"><img class="scheme" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png"  alt="scheme"><span>Сравнить</span></p> -->
                <!-- <div class="footer-social-icons">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                </div> -->

                
            </div>
    </div>
    <div class="single-product-page__content grid-x grid-padding-x">
        <div class="single-product-page__left-content cell medium-12 large-6">
            <div class="single-product-page-product-desc">
                <h4>Описание товара</h4>
                <div class="single-product-page__content-wrapper-trim">
                    <p class="line-height"><?= wp_trim_words( $product->get_description(), 100 );  ?></p>
                </div>
                <div class="single-product-page__content-wrapper">
                    <p class="line-height"><?= $product->get_description() ?></p>
                </div>   
            </div>
            <div class="price float-left">
                <a id="line-height-full" href="javascript:void(0)">Показать подробнее</a>
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
                    <!-- <tr>
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
                    </tr>   -->
                    <!-- <tr>
                        <td>Питание от батареек/аккумулятора	</td>
                        <td>есть</td>
                    </tr>    -->

                                <?php
                global $product;
                $attributes = $product->get_attributes();
                if ( $attributes ) {

                
            
                foreach ( $attributes as $attribute ) {
            
            
                    if ( $attribute->get_variation() ) {
                        continue;
                    }

                    $name = $attribute->get_name();
                    $value = $attribute->get_options()[0];


                    ?>

                        <tr>
                            <td><?= $name ?></td>
                            <td><?= $value ?></td>
                        </tr>  

                    <?php
                    // if ( $attribute->is_taxonomy() ) {
            
                    //     $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
            
                    //     $cwtax = $terms[0]->taxonomy;
            
                    //     $cw_object_taxonomy = get_taxonomy($cwtax);
            
                    //     if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                    //         $tax_label = $cw_object_taxonomy->labels->singular_name;
                    //     } elseif ( isset( $cw_object_taxonomy->label ) ) {
                    //         $tax_label = $cw_object_taxonomy->label;
                    //         if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    //             $tax_label = substr( $tax_label, 8 );
                    //         }
                    //     }
                    //     $display_result .= $tax_label . ': ';
                    //     $tax_terms = array();
                    //     foreach ( $terms as $term ) {
                    //         $single_term = esc_html( $term->name );
                    //         array_push( $tax_terms, $single_term );
                    //     }
                    //     $display_result .= implode(', ', $tax_terms) .  '<br />';
            
                    // } else {
                        // $display_result .= $name . ': ';
                        // $display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) ;
                    // }
                    
                }
            }
            
            ?>
                </tbody>
            </table>

            <div class="price float-left">
                <a id="table-show" href="javascript:void(0)">Показать подробнее</a>
                <!-- <div class="price-modal">
                    <a>По возрастанию</a>
                    <a>По убыванию</a>
                </div> -->
            </div>
        </div>
    </div>
</div>


<?php 

$crosssell_ids = get_post_meta( get_the_ID(), '_crosssell_ids' );
$crosssell_ids=$crosssell_ids[0];

if(count($crosssell_ids)>0){

    $args = array(
    'post_type' => 'product',
    'ignore_sticky_posts' => 1,
    'no_found_rows' => 1,
    'post__in' => $crosssell_ids
    );

    $products = new WP_Query( $args );

    $woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );

    if ( $products->have_posts() ) :?>

<div class="portfolio-page__content">
<div class="grid-container">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
                <h3 class="float-left">С этим товаров покупают</h3>
                <?php if($products->post_count > 4): ?>
                    <div class="slider-products-right slider-products-next float-right">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                    </div>
                    <div class="slider-products-left slider-products-prev float-right">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                    </div>
                <?php endif; ?>
            </div>
            <div class="products-slider">

                <?php 

                    while ( $products->have_posts() ) : $products->the_post();

                        wc_get_template_part( 'content', 'product' );

                    endwhile;

                    ?>
            </div>
        </div>
    </div>
</div>
</div>

<?php endif;

}

wp_reset_query(); ?>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
