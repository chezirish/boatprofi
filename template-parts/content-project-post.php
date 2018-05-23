<?php 
$main_img =  get_field( "main_img" )['url'];
$below_img1 =  get_field( "below_img1" )['url'];
$below_img2 =  get_field( "below_img2" )['url'];
$below_img3 =  get_field( "below_img3" )['url'];

?>

<div class="portfolio-page__content">
    <div class="grid-container">
    <div class="portfolio-page__title">
        <h2 class="portfolio-page__title-name"><?php the_title(); ?></h2>
        <h2 class="portfolio-page__title-name-tablet"><?php the_title(); ?></h2>
        <div class="portfolio-page__title-main-avatar" style="background-image:url(<?= $main_img ?>);background-size:cover;background-repeat:no-repeat"></div>
        <!-- <img class="portfolio-page__title-main-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat"> -->
        <div class="portfolio-page__title-small-avatars-wrapper">
            <?php echo $below_img1 ? "<img class='portfolio-page__title-small-avatar' src='" .  $below_img1  . "' alt='boat'>" : ''; ?><?php echo $below_img2 ? "<img class='portfolio-page__title-small-avatar' src='" .  $below_img2  . "' alt='boat'>" : ''; ?><?php echo $below_img3 ? "<img class='portfolio-page__title-small-avatar' src='" .  $below_img3  . "' alt='boat'>" : ''; ?>
        </div>
    </div>
    </div>
    <div class="portfolio-page__tasks grid-x grid-margin-x">
        <!-- <div class="grid-container"> -->
        <div class="cell medium-6 large-6">
            <div class="tasks-content">
                <!-- <div class="tasks-goal">
                    <h5>Задача</h5>
                    <p>От владельца буксировщика была получена информация, что под сланями появилось масло. Буксировщик был принят на диагностику в сервисный центр.</p>      
                </div>
                <div class="tasks-solution">
                    <h5>Решение</h5>
                    <p>Тотальная проверка показала, что после полного прогрева двигателя, под нагрузкой, происходит вытекание масла из двигателя. Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. После того как поднялась температура, было обнаружено, что масляный датчик</p>
                </div> -->
                <?php the_content(); ?>
            </div>
        </div>  
        <!-- </div> -->

        <div class="grid-container">
        <div class="cell medium-6 large-6">

            <?php if(carbon_get_the_post_meta( 'crb_green_block-items' )): ?>
            <div class="tasks-icon">
                <h3><?php the_field('green_title'); ?></h3>
                    <?php
                        $items = carbon_get_the_post_meta( 'crb_green_block-items' );
                        echo '<ul>';
                        foreach ( $items as $item ) {
                            echo '<li>';
                            echo $item['task'];
                            echo '</li>';
                        }
                        echo '</ul>';
                    ?>
                    <?php   if( get_the_ID() == 250 ):  ?>
                        <img class="fish" src="<?= get_template_directory_uri() ?>/dist/assets/images/fish1.png">
                    <?php  else: ?>
                        <img class="kruchok" src="<?= get_template_directory_uri() ?>/dist/assets/images/kruchok.png">
                    <?php  endif; ?>
                
            </div>
            <?php endif; ?> 
        </div>
        </div>
    </div>

    <div class="grid-container">
    <?php if(carbon_get_the_post_meta( 'crb_process_block-items' )): ?>
    <div class="process">
        <h3>Процесс работы</h3>
        <!-- <div class="process-content">
            <div class="process-content-item clearfix">
                <div class="process-text float-left">
                    <p class="process-text-left">Тотальная проверка показала, что после полного прогрева двигателя, под нагрузкой, происходит вытекание масла из двигателя. </p>
                </div>
                <div class="process-icon float-left">
                    <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat">
                </div>
            </div>

            <div class="process-content-item">
                <div class="process-text">
                    <p>Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. </p>
                </div>
            </div>

            <div class="process-content-item-last clearfix">
                <div class="process-text float-left">
                    <p class="process-text-left">Демонтированный двигатель был установлен на стенд и на протяжении продолжительного времени подвергнут испытаниям на разных режимах. </p>
                </div>
                <div class="process-icon float-left">
                    <img class="portfolio-page__title-small-avatar" src="<?= get_template_directory_uri() ?>/dist/assets/images/boat5.jpg" alt="boat">
                </div>
            </div> -->

                <?php
                    $items = carbon_get_the_post_meta( 'crb_process_block-items' );

                    
                    $i = 0;
                    $len = count($items);
                    foreach ( $items as $item ): ?>                

                        <?php if($i == $len - 1): ?>
                            <div class="process-content-item-last clearfix">
                        <?php else: ?>
                            <div class="process-content-item clearfix">
                        <?php endif; ?>

                            <div class="process-text float-left">
                                <p class="process-text-left"><?= $item['text']; ?></p>
                            </div>
                            <div class="process-icon float-left">
                                <?php echo $item['img'] ? "<img class='portfolio-page__title-small-avatar' src='" .  $item['img']  . "' alt='boat'>" : ''; ?>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach;

                ?>
        </div>
    </div>
    <?php endif; ?>
    </div>
</div>

<?php 


if( !empty(get_field('single_project_review')) ){
    $review_post_meta = get_post_meta(get_field('single_project_review')[0]); 
    $review_vatar_id = $review_post_meta['_thumbnail_id'][0];   
    $review_vatar_src = wp_get_attachment_image_src( $review_vatar_id )[0];
    $review_post = get_post(get_field('single_project_review')[0], "ARRAY_A");
    $review_post_date = explode(" ", $review_post['post_date'])[0];
}


?>

<?php if(!empty($review_post_meta)): ?>
<div class="portfolio-page__review">
<div class="grid-container">
    <div class="portfolio-page__content">   
        <h3 class="review-title">Отзыв о проекте</h3>
        <div class="portfolio-page__review-content clearfix">
            <p class="portfolio-page__review-date float-left"><?php  echo $review_post_date; ?></p>
            <div class="portfolio-page__review-info float-left">
                <img class="portfolio-page__title-small-avatar" src="<?php echo $review_vatar_src ?>" alt="boat">
                <p class="review-info-name"> <b> <?php echo $review_post_meta['name'][0]; ?></b> <br><?php echo $review_post_meta['city'][0];  ?> </p>
                <!-- <p class="review-info-city">г. Калининград</p> -->
                <p class="review-info-comment"> <?php echo $review_post_meta['text'][0]; ?> </p>
            </div>
        </div>
    </div>
</div>
</div>
<?php endif; ?>

<section class="callout section-form">
    <h4>Хочу также</h4>
    <?php echo do_shortcode('[contact-form-7 id="240" title="Форма на странице проекта"]'); ?>

    <?php $politics = carbon_get_theme_option( 'crb_politics' ); ?>
    <?php if($politics != ''): ?>
        <a target="_blank" href="<?php echo $politics;  ?>">Пользовательское соглашение</a>
    <?php endif; ?>	
</section>

<div class="portfolio-page__content">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
            <h3 class="float-left">Используемые товары</h3>
            <div class="slider-products-right slider-products-next float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
            <div class="slider-products-left slider-products-prev float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
        </div>

        <?php if(!empty(get_field('project_used_produtcs'))): 
            $products_arr = get_field('project_used_produtcs'); 
        ?>
        <div class="products-slider">
            <?php foreach ($products_arr as &$value): $product = wc_get_product($value); ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($value ), 'single-post-thumbnail' ); ?>
                <div class="sirvices-item">
                    <a href="<?=  $product->get_permalink( ) ?>">
                    <div class="sirvices-item-icon" style="background-image:url(<?= $image[0]; ?>);background-size:contain;background-position:center;background-repeat:no-repeat">
                    </div>
                    </a>
                    <div class="sirvices-item-content">
                        <p><?php echo $product->get_title(); ?></p>
                        <p><span class="sirvices-item-costs"><?php echo $product->get_price() != '' ? $product->get_price() . ' руб.' : ''; ?> </span></p>
                        <div class="bottom-block">
                            <a class=" add_to_cart_button ajax_add_to_cart" rel="nofollow" data-product_id="<?= $product->get_id() ?>" href="<?php echo $product->add_to_cart_url( ); ?>">
                                <button type="button" class="button"><?= $product->add_to_cart_text( ); ?></button>
                            </a>
                            <?php  echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product->get_id() . '" ]'); ?>
                            <!-- <img class="scheme-icon" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme"> -->
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
        <?php endif; ?>

        <div class="slider-nav clearfix">
            <h3 class="float-left">Другие проекты</h3>
            <div class="slider-products-right slider-project-next float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
            <div class="slider-products-left slider-project-prev float-right">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
            </div>
        </div>
        <div class="portfolio-page__projects-slider">
            <?php
            
                $ourCurrentPage = get_query_var('paged');
                $args = array(

                    'paged' => $ourCurrentPage,
                    'post__not_in' => array( $post->ID ),
                    'posts_per_page' => 6,                
                    'post_type' => 'project-post' );
                $postslist = new WP_Query( $args );

                if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();



                        ?>
                        
                            <div class="project-item">
                            <a class="pojects-link-wrapper" href="<?php the_permalink(); ?>">
                                <p class="project-item-date"><?php  echo get_the_date('j F Y'); ?></p>
                                <div class="project-item-icon" style="background-image:url(<?= get_field('list_img')['url']; ?>);background-size:cover">
                                    <button type="button" class="button">Подробнее о проекте</button>
                                </div>
                                <p class="project-item-info"><?php the_title() ?> </p>
                            </a>
                                <!-- <a href="">ТО и зимняя консервация Монтаж электромоторов</a> -->
                            </div>

                        <?php

                            

                    endwhile;
                    wp_reset_postdata(); 
                endif;
            ?>


        </div>

    </div>
</div>
    
