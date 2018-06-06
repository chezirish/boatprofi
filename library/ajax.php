<?php



add_action( 'wp_ajax_tag', 'tag_callback' );
add_action('wp_ajax_nopriv_tag', 'tag_callback');

function tag_callback() {
    $tag_name = $_POST['name'];
    

    if($tag_name == 'share' || $tag_name == 'new' || $tag_name == 'hit'){
        $response = products_loop();
        wp_send_json( $response );
    } 

	wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}


function products_loop() {

            $res_arr = array();

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1
                );

            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();  
                    $_product = wc_get_product( get_the_ID() );


                    $item['new'] = has_term( 'Новинка', 'product_tag' ) ? '<p class="sirvices-item-tag">Новинка</p>' : '';
                    $item['share'] = has_term( 'аукционный', 'product_tag' ) ? '<p class="sirvices-item-tag">Акция</p>' : '';
                    $item['hit'] = has_term( 'хит продаж', 'product_tag' ) ? '<p class="sirvices-item-tag">Хит продаж</p>' : '';

                     $item['permalink'] = get_the_permalink(); 
                     $item['thumbnail_url'] =  get_the_post_thumbnail_url( ); 
                     $item['title'] =  $_product->get_title(); 
                     $item['price'] =  $_product->get_price() != '' ? $_product->get_price() . ' руб.' : ''; 
                    //  $item['after_item'] = do_action( 'woocommerce_after_shop_loop_item' ); 
                    if($_product->is_type( 'simple' )){
                        $link_html = '<a href="' . $_product->add_to_cart_url( ) . '" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-basket added" data-product_id="' . $_product->get_id() . '" data-product_sku="' . $_product->get_sku() . '" aria-label="" rel="nofollow">'. $_product->add_to_cart_text( ) .  '</a>';
                    } else {
                        $link_html ='<a href="' . $_product->add_to_cart_url( ) . '" data-quantity="1" class="button product_type_grouped " data-product_id="' . $_product->get_id() . '" data-product_sku="' . $_product->get_sku() . '" aria-label="" rel="nofollow">'. $_product->add_to_cart_text( ) .  '</a>';
                    }

                     $item['add_to_cart'] =  $link_html;
                     $item['wishlists'] = str_replace("Добавить в  избранное","", do_shortcode('[ti_wishlists_addtowishlist product_id="' . $_product->get_id() . '" ]')); 

                     array_push($res_arr, $item);
                
                endwhile;
            } else {
                $res_arr['error'] = 'true';
            }
            wp_reset_postdata();

    return $res_arr;    
}






add_action( 'wp_ajax_retrieve_reviews', 'retrieve_reviews_callback' );
add_action('wp_ajax_nopriv_retrieve_reviews', 'retrieve_reviews_callback');

function retrieve_reviews_callback(){

    $res_arr = array();

    $offset = $_POST['offset'];
            
              $ourCurrentPage = get_query_var('paged');
                $args = array(

                    'paged' => $ourCurrentPage,
                    'offset'         => $offset,
                    'posts_per_page' => 3,                
                    'post_type' => 'reviews-post' );
                $postslist = new WP_Query( $args );

                if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();
                    
                    $post = '';

                    
                    $post .=  '<div class="portfolio-page__review-content clearfix">';
                    $post .=    '<p class="portfolio-page__review-date portfolio-page__review-date-root float-left">' . get_the_date('j F') . '</p>';
                    $post .=    '<div class="portfolio-page__review-info float-left">';
                    $post .=              '<img src="' . get_the_post_thumbnail_url( ) . '" class="portfolio-page__title-small-avatar wp-post-image" alt="">';
                    $post .=        '<p class="review-info-name"> <b>' . get_field('name') . '</b> <br>' . get_field('city') . '</p>';
                    if(get_field('link_project') != ''): 
                        $post .=   '<a class="review-project-name-link" href="' . get_field('link_project') . '"> <span class="review-project-name" >Проект:</span>' . get_field('project_name') . '</a>';
                    endif; 
                    $post .=        '<p class="review-info-comment">' . get_field('text') . '</p>';
                    $post .=    '</div>';
                    $post .=   '</div>';

                    $post .=   '<hr class="reviews-devide">';


                    array_push($res_arr, $post);
                    endwhile;
                    wp_reset_postdata(); 
                endif;

    wp_send_json( $res_arr );
    wp_die();
}


