<?php

get_header(); ?>

<div class="single-service-page__content">

    <div class="single-service-page__content-grid grid-x grid-margin-x">
        <div class="single-service-page__sidebar cell medium-3 large-3">
            <!-- <a href="">Монтаж электромоторов</a>
            <a href="">Установка картоплоттеров, эхолотов</a>
            <a href="">Подиумы из стеклопластика</a>
            <a href="">Монтаж и ТО лодочных моторов</a>
            <a href="">Пошив чехлов и тенов</a>
            <a href="">Ремонт любых корпусов</a>
            <a href="">ТО троллинговых моторов</a>
            <a href="">Тюнинг лодочных прицетов</a>
            <a href="">ТО и зимняя консервация</a> -->
            <?php foundationpress_services_nav(); ?>
        </div>

        <div class="single-service-page__right-content cell medium-12 large-9">
            <div class="grid-container">
            <ul class="vertical menu accordion-menu" data-accordion-menu data-multi-open="false">
                <li class="accordion-menu-container">
                    <a href="#">Электрические троллинговыемоторы</a>        
                    <ul class="menu vertical nested">
                    <!-- <li><a href="">Монтаж электромоторов</a></li>
                    <li><a href="">Установка картоплоттеров, эхолотов</a></li>
                    <li><a href="">Подиумы из стеклопластика</a></li>
                    <li><a href="">Монтаж и ТО лодочных моторов</a></li>
                    <li><a href="">Пошив чехлов и тенов</a></li>
                    <li><a href="">Ремонт любых корпусов</a></li>
                    <li><a href="">ТО троллинговых моторов</a></li>
                    <li><a href="">Тюнинг лодочных прицетов</a></li>
                    <li><a href="">ТО и зимняя консервация</a></li> -->
                    <?php foundationpress_services_nav(); ?>
                    </ul>
                </li>
            </ul> 
            <h3><?php the_title(); ?></h3>
            <div class="single-service-page__info-wrapper single-service-page__info-wrapper-first clearfix">
                <?php if( !empty(get_field('service_main_img')) ):  ?>
                <div class="single-service-page__icon float-left" style="background-image:url(<?= get_field('service_main_img')['url'] ?>);background-size:cover"></div>
                <?php endif; ?>
                <div class="single-service-page__info float-left">
                    <p class="single-service-page__price"><?php the_field('service_price') ?></p>
                    <button type="button" class="single-service-page__button button">Отправить заявку</button>
                    <?php if( !empty( carbon_get_the_post_meta( 'crb_service-links' ) ) ): ?> 
                        <?php $items = carbon_get_the_post_meta( 'crb_service-links' ); ?>
                        <?php  foreach ( $items as $item ):  ?>
                            <a target="_blank" href="<?=  $item['link'] ?>"><?=  $item['link-content'] ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <div class="footer-social-icons footer-social-icons-single-service">
                        <?php if( !empty(get_field('service_in_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_in_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
                            </a>
                        <?php endif; ?>

                        <?php if( !empty(get_field('service_fb_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_fb_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
                            </a>
                        <?php endif; ?>

                        <?php if( !empty(get_field('service_vk_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_vk_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="single-service-page__icon-phone" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/single-service.jpg);background-size:cover"></div>
            <div class="single-service-page__info-phone">
                <p class="single-service-page__price"><?php the_field('service_price') ?></p>
                <button type="button" class="single-service-page__button button">Отправить заявку</button>
                <p class="single-service-page__add"><img class="heart" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png"  alt="heart"> В избранное</p>
                <?php if( !empty( carbon_get_the_post_meta( 'crb_service-links' ) ) ): ?> 
                    <?php $items = carbon_get_the_post_meta( 'crb_service-links' ); ?>
                    <?php  foreach ( $items as $item ):  ?>
                        <a target="_blank" href="<?=  $item['link'] ?>"><?=  $item['link-content'] ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="footer-social-icons footer-social-icons-single-service">
                        <?php if( !empty(get_field('service_in_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_in_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/in2.svg" alt="icon">
                            </a>
                        <?php endif; ?>

                        <?php if( !empty(get_field('service_fb_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_fb_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/fb2.svg" alt="icon">
                            </a>
                        <?php endif; ?>

                        <?php if( !empty(get_field('service_vk_link')) ):  ?>
                            <a target="_blank" href="<?= get_field('service_vk_link'); ?>">
                            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/vk.svg" alt="icon">
                            </a>
                        <?php endif; ?>
                </div>
            </div>
            <div class="single-service-page__info-wrapper clearfix">
                <div class="single-service-page__icon-desc float-left">
                    <?php the_content(); ?>
                </div>
                <div class=" single-service-page__info-desc float-right">
                <?php if( !empty( carbon_get_the_post_meta( 'crb_media_gallery' ) ) ): ?> 

                    <?php $items = carbon_get_the_post_meta( 'crb_media_gallery' ); ?>
                    <?php  foreach ( $items as $item ):  ?>
                        <?php  echo wp_get_attachment_image( (int)$item ); ?>   
                    <?php endforeach; ?>
        
                <?php endif; ?>
                </div>
            </div>

            <div class="single-service-page__info-wrapper clearfix">
            <?php 
                if( !empty(get_field('service_review')) ){
                    $review_post_meta = get_post_meta(get_field('service_review')[0]); 
                    $review_avatar_id = $review_post_meta['_thumbnail_id'][0];   
                    $review_avatar_src = wp_get_attachment_image_src( $review_avatar_id )[0];
                    $review_post = get_post(get_field('service_review')[0], "ARRAY_A");
                    $review_post_date = explode(" ", $review_post['post_date'])[0];
                }
                if( !empty(get_field('service_project')) ){
                    $service_post_id = get_post(get_field('service_project')[0], "ARRAY_A")['ID'];
                    $service_post_meta = get_post(get_field('service_project')[0], "ARRAY_A"); 
                    $service_project_img = get_field('list_img',  $service_post_id);
                    $service_post_date =  explode(" ", $service_post_meta['post_date'])[0];
                    
                }

            ?>
                <?php if(!empty($review_post_meta)): ?>
                <div class="single-service-page__review float-left">
                    <h3 class="review-title">Отзыв</h3>
                    <div class="portfolio-page__review-content clearfix">
                        <p class="portfolio-page__review-date float-left"><?php  echo $review_post_date; ?></p>
                        <div class="portfolio-page__review-info float-left">
                            <img class="portfolio-page__title-small-avatar" src="<?php echo $review_avatar_src ?>" alt="boat">
                            <p class="review-info-name"> <b> <?php echo $review_post_meta['name'][0]; ?></b> <br> <?php echo $review_post_meta['city'][0];  ?> </p>
                            <p class="review-info-comment"><?php echo $review_post_meta['text'][0]; ?> </p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if(!empty($service_post_meta)): ?>
                    <div class="single-service-page__project float-left">
                    <a class="pojects-link-wrapper" href="<?php get_permalink($service_post_meta['ID']); ?>">
                        <h3>Проект</h3>
                        <p><?php echo $service_post_date; ?></p>
                        <img src="<?= $service_project_img['url'] ?>" alt="boat">
                        <p class="single-service-page__projec-text"><?php echo $service_post_meta['post_title']; ?></p>
                        <!-- <a href="">Подробнее</a> -->
                    </a>
                    </div>

                <?php endif; ?>                        
            </div>

            <div class="single-service-page__banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner3.jpg);background-size:cover">
                <p>При оказании услуги выполняется</p>
                <h3> Тестирование оборудования на воде. </h3>
            </div>
            </div>
        </div>
    </div>
<div class="grid-container">
<div class="portfolio-page__content">
    <div class="slider-wrapper">
        <div class="slider-nav clearfix">
                <h3 class="float-left">Электромоторы и комплектующие</h3>
                <div class="slider-products-right slider-products-next float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
                <div class="slider-products-left slider-products-prev float-right">
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slick-slider-icon.svg" alt="scheme">
                </div>
            </div>
            <div class="products-slider">
                <div class="sirvices-item">
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
                </div>
                <div class="sirvices-item">
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
                </div>
                <div class="sirvices-item">
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
                </div>
                <div class="sirvices-item">
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
                </div>
                <div class="sirvices-item">
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="another-services">
    <div class="portfolio-page__content">
        <h4>Другие услуги</h4>
        <section class="section-services">
            <div class="services-list">

                <?php
            
                    $ourCurrentPage = get_query_var('paged');
                    $args = array(

                        'paged' => $ourCurrentPage,
                        'post__not_in' => array( $post->ID ),
                        'posts_per_page' => 3,                
                        'post_type' => 'services-post' );
                    $postslist = new WP_Query( $args );

                    if ( $postslist->have_posts() ) :
                        while ( $postslist->have_posts() ) : $postslist->the_post();



                            ?>

                                <a class="sirvices-item-link-wrapper" href="<?php the_permalink(); ?>">
                                <div class="sirvices-item clearfix">
                                    <div class="sirvices-item-content float-left">
                                        <h5><?php the_title(); ?></h5>
                                        <button type="button" class="button">Заказать</button>
                                        <object data="" type="">
                                        <a>подробнее</a> 
                                        </object>
                                    </div>
                                    <div class="sirvices-item-icon float-right">
                                        <img src="<?= get_field('service_preview_icon')['url']; ?>" alt="icon">
                                    </div>
                                </div>
                                </a>

                            <?php

                                

                        endwhile;
                        wp_reset_postdata(); 
                    endif;
                ?>
            </div>
        </section>
    </div>
</div>
<?php get_footer();




























