<?php
/*
Template Name: Главная
*/

?>
<div class="wrapper" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg);background-size:cover;background-position:center">
</div>

<?php /* <img class="main_background" src="<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg" alt="boat"> */ ?>

<?php
get_header(); ?>



<section class="section-title">
    <h1>Подготовим  Ваш катер к рыбалке</h1>
    <p>За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера. </p>
</section>




<!-- <div class="section-form-wrapper"> -->

<!-- <div class="grid-container"> -->
<section class="callout section-form section-form-main">
    
        <button class="close-button" aria-label="Dismiss alert" type="button">
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
                <input class="input-file" id="my-file" type="file">
                <label tabindex="0" for="my-file" class="input-file-trigger">+ Прикрепите фото катера</label>

                <input class="css-checkbox" id="checkbox7" type="checkbox">
                <label for="checkbox7" class="css-label lite-x-green">Согласен с "политикой конфидециальности"</label>
                <p class="file-return"></p>
            </div>
            <button class="section-title-submit section-title-submit-tablet" type="submit">Отправть заявку</button>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="335" title="Форма на главной"]'); ?>
        <?php //echo do_shortcode('[contact-form-7 id="238" title="Контактная форма 1"]'); ?>


        <?php $politics = carbon_get_theme_option( 'crb_politics' ); ?>
        <?php if($politics != ''): ?>
            <a target="_blank" href="<?php echo $politics;  ?>">Пользовательское соглашение</a>
        <?php endif; ?>	
        
</section>
<!-- </div> -->
<!-- </div> -->

<div class="section-services-wrapper">
<section class="section-services">
    <div class="section-headline">
        <h2>Наши услуги</h2>
    </div>

    <div class="services-list">  

         <?php
                
                $ourCurrentPage = get_query_var('paged');
                $args = array(

                    'paged' => $ourCurrentPage,
                    'posts_per_page' => 9,
                    'category__in' => array(33),                
                    'post_type' => 'services-post' );
                $postslist = new WP_Query( $args );

                if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();
                    

                        ?>
                            <a class="sirvices-item-link-wrapper" href="<?php the_permalink(); ?>">
                            <div class="sirvices-item clearfix">
                                <div class="sirvices-item-content float-left">
                                    <h3 class="custom-size-h3"><?php the_title(); ?></h3>
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


<section class="section-projects">
<div class="section-projects-content">
    <div class="section-headline">
        <h3>Наши проекты</h3>
    </div>
    <div class="project-slider">
        <!-- <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat1.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Установить электро  мотор с функцией gps  якоря и автопилота</p>
            </div>
        </div>
        <div class="project-slider-item">
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat2.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
            <div class="project-slider-item-icon">
                <div class="project-slider-modal">
                    <div class="project-slider-modal-content">
                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                        <p>Еще проекты</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/boat3.jpg" alt="boat">
                <p class="project-slider-item-bottom-text">Совсем скоро снимем  тент и покажем,  что внутри.</p>
            </div>
        </div> -->
        
        <?php 
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => -1,      
                'category__in' => array(33),            
                'post_type' => 'project-post' );
            $postslist = new WP_Query( $args );

            $count = 1;
            $previous = false;
            $lastStep = false;
            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();


                    if ( $count == $postslist->post_count ){
                        $lastStep = true;
                    }
                    $count++
                     ?>

                        <?php if( !$previous || $previous == 3 ): ?>
                        <div class="project-slider-item">
                            <a href="<?php the_permalink(); ?>" class="sirvices-item-link-wrapper">
                            <div class="project-slider-item-icon">
                                <div class="project-slider-modal">
                                    <div class="project-slider-modal-content">
                                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                                        <p>Еще проекты</p>
                                    </div>
                                </div>
                                <img src="<?=  get_field('front_page_img')['url']; ?>" alt="boat">
                                <p class="project-slider-item-bottom-text"> <?php the_title(); ?></p>
                            </div>
                            </a>
                        </div>
                            <?php 
                                $previous = 1;
                                continue;
                            ?>
                        
                        <?php endif; ?>
                      
                        <?php if( $previous == 1 ): ?>
                        <?php if($lastStep)  break; ?>
                        <div class="project-slider-item">
                            <a href="<?php the_permalink(); ?>" class="sirvices-item-link-wrapper">
                            <div class="project-slider-item-icon">
                                <div class="project-slider-modal">
                                    <div class="project-slider-modal-content">
                                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                                        <p>Еще проекты</p>
                                    </div>
                                </div>
                                <img src="<?=  get_field('front_page_img')['url']; ?>" alt="boat">
                                <p class="project-slider-item-bottom-text"><?php the_title(); ?></p>
                            </div>
                            </a>

                            <?php
                                $previous = 2;
                                continue;
                            ?>
                        <?php endif; ?>

                        <?php if( $previous == 2 ): ?>   
                            <?php if( ($count - 1) % 6 == 0):  ?>
                                <a href="<?= get_page_link(151); ?>" class="sirvices-item-link-wrapper">                                                   
                            <?php else:  ?> 
                                <a href="<?php the_permalink(); ?>" class="sirvices-item-link-wrapper">  
                            <?php endif;  ?>                     
                            <div class="project-slider-item-icon">
                                <div class="project-slider-modal">
                                    <div class="project-slider-modal-content">
                                        <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slider-modal-icon.png" alt="arrow">
                                        <p>Еще проекты</p>
                                    </div>
                                </div>
                                <img src="<?=  get_field('front_page_img')['url']; ?>" alt="boat">
                                <p class="project-slider-item-bottom-text"><?php the_title(); ?></p>
                            </div>
                            </a>
                        </div>


                            <?php 
                                $previous = 3;
                                continue;
                            ?>
                        <?php endif; ?>
                    <?php

                endwhile;
                wp_reset_postdata(); 
            endif;
        ?>



    </div>
</div>
</section>


<section class="section-catalog">
    <div class="section-headline">
        <h3>Каталог товаров</h3>
    </div>

     <div class="services-list">
        <!-- <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Элетрические   <br> троллинговые моторы</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Эхолоты и картоплоттеры</h5>
                <a href="">Lowrance</a>
                <a href="">Humminbird</a>
                <a href="">RayMarine</a>
                <a href="">Garmin</a>
                <a href="">StarMaps</a> 
            </div>
            <div style="width:190px" class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool10.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Аккумуляторы <br> и зарядные устройства</h5>
                <a href="">Аккумуляторные батареи</a>
                <a href="">Зарядные устройства</a>
                <a href="">Аксессуары</a>
                   
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool11.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Моторы для лодок</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool12.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Аксессуары для прицепов</h5>

                <a href="">Опора</a>
                <a href="">Опорное колесо</a>
                <a href="">Колпачок на фаркоп </a>
                <a href="">Светодиодные</a>
                <a href="">габариты</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool13.png" alt="icon">
            </div>
        </div>
        <div class="sirvices-item">
            <div class="sirvices-item-content">
                <h5>Сопутствующие товары</h5>
                <a href="#">Minn kota</a>
                <a href="#">MotorGuide</a>
            </div>
            <div class="sirvices-item-icon">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/tool14.png" alt="icon">
            </div>
        </div> -->


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
                    // var_dump($cat);

                    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );

                    ?>


                            

                            <a class="sirvices-item-link-wrapper" href="<?php echo get_term_link( $cat->term_id ,'product_cat'); ?>">
                            <div class="sirvices-item">
                                <div class="sirvices-item-content">
                                    <h5><?php echo $cat->name ?></h5>
                                    <?php if( !empty($childs) ): ?>
                                        <?php foreach($childs as $child): ?>
                                        <object>
                                            <a href="<?php echo get_term_link( $child->term_id ,'product_cat'); ?>"><?php echo $child->name ?></a>
                                        </object>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="sirvices-item-icon">
                                    <?php echo wp_get_attachment_image($thumbnail_id, array(200,200)); ?>
                                </div>
                            </div> 
                            </a>
                <?php }

            ?>
    </div>
</section>

<section class="section-products">
<div class="section-products-content">
    <div class="section-headline">
        <h3>Товары нашего магазина</h3>
    </div>
    <div class="grid-container">
        <nav class="clearfix">
            <div class="products-filter float-left">
                <p class="share">Акционные</p>
                <p class="new">Новинки</p>
                <p class="hit">Хиты продаж</p>
            </div>
            <div class="linkto-catalog float-right">
                <a href="<?= get_permalink( woocommerce_get_page_id( 'shop' ) );?>">Перейти в каталог</a>
            </div>
        </nav>
    </div>


    <div class="services-list">



        	<?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10
                    );
                $loop = new WP_Query( $args );
                $count = 0;

                // var_dump($loop);
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                    //var_dump($count);
                        if($count == 6){
                            ?>
                            <div class="banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/banner1.jpg);background-size:cover">
                                <h3>Разборный якорь  </h3>
                                <p>специальной формы литая, кованая или сварная конструкция, предназначенная для удержания корабля, подлодки, плота или другого плавающего объекта на одном месте за счёт сцепления с грунтом и связанная </p>
                                <button type="button" class="button">Подробнее</button>
                            </div>
                            <?php
                        }

                        ?>
                        <?php //echo has_term( 'Новинка', 'product_tag' ); ?>
                        <div class="sirvices-item">
                            <?php echo has_term( 'Новинка', 'product_tag' ) ? '<p class="sirvices-item-tag">Новинка</p>' : ''; ?>
                            <?php echo has_term( 'аукционный', 'product_tag' ) ? '<p class="sirvices-item-tag">Акция</p>' : ''; ?>
                            <?php echo has_term( 'хит продаж', 'product_tag' ) ? '<p class="sirvices-item-tag">Хит продаж</p>' : ''; ?>

                            <?php //do_action( 'woocommerce_before_shop_loop_item_title' ); ?>

                            <div class="sirvices-item-modal-basket reveal" data-closable>
                                <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4>Товар оправлен в корзину!</h4>
                                <object data="" type="">
                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">перейти в корзину</a>
                                </object>
                                <p>Список будет очищен по завершению сессии</p>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="sirvices-item-icon" <div class="sirvices-item-icon"  style="background-image:url(<?php the_post_thumbnail_url( ); ?>);background-size:contain;background-position:center;background-repeat:no-repeat">
                                </div>
                            </a>
                            <div class="sirvices-item-content">
                                <p><?php echo $product->get_title(); ?></p>
                                <p><span class="sirvices-item-costs"><?php echo $product->get_price() != '' ? $product->get_price() . ' руб.' : ''; ?></span></p>
                                <div class="bottom-block">
                                    <!-- <button type="button" class="button add-basket">В корзину</button> -->
                                    <!-- <img class="heart-icon change" src="<?= get_template_directory_uri() ?>/dist/assets/images/heart_white.png" alt="heart"  data-tooltip tabindex="1" title="В избранное" data-position="bottom" data-alignment="center"> -->
                                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    <?php  echo do_shortcode('[ti_wishlists_addtowishlist product_id="' . $product->get_id() . '" ]'); ?>
                                    <!-- <img class="scheme-icon" data-tooltip tabindex="1" title="В сравнение" data-position="bottom" data-alignment="center" src="<?= get_template_directory_uri() ?>/dist/assets/images/scheme-icon.png" alt="scheme"> -->
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
            ?>
    </div>
</div>
</section>

<section class="section-reviews">
<div class="section-reviews-content">
    <div class="section-headline">
        <h3>Отзывы о нас</h3>
    </div>
    <div class="reviews-slider">
        
        <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => -1,
                'category__in' => array(33),                 
                'post_type' => 'reviews-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                    ?>

                        <div class="reviews-slider-content grid-x grid-padding-x">
                            <div class="reviews-slider-name cell medium-12 large-auto">
                                <p><?php the_field('name') ?></p>
                                <p class="reviews-slogan"><?php the_field('review_slogan'); ?> </p>
                            </div>
                            <div class="reviews-slider-media cell medium-12 large-auto">
                                <?php echo wp_get_attachment_image((int)get_field('review_front_img')['id'], 'full'); ?> 
                            </div>
                            <div class="reviews-slider-text cell medium-12 large-5">
                               <?php the_field('text') ?>
                            </div>
                        </div>

                    <?php

                        

                endwhile;
                wp_reset_postdata(); 
            endif;
        ?>

    </div>
    <div class="reviews-slider-buttons clearfix">
        <div class="slider-arrows-wrapper">
            <a class="arrow-up arrow-up-left">
                <span class="left-arm"></span>
                <span class="right-arm"></span>
                <span class="arrow-slide"></span>
            </a>
            <a class="arrow-up arrow-up-right">
                <span class="left-arm"></span>
                <span class="right-arm"></span>
                <span class="arrow-slide"></span>
            </a>
            <p class="reviews-slider-count-sliders"><span class="current-slider"></span> из <span class="total-sliders"></span></p>
        </div>
        <a class="reviews-slider-link" href="<?= get_page_link(45); ?>">
            <button type="button" class="button">Все отзывы</button>
        </a>
    </div>

</div>
</section>


<section class="section-about">
    <div class="section-about-content grid-x grid-margin-x">
        <div class="about cell medium-12 large-6">
            <h3>Коротко о нас</h3>
            <p>Профессиональная подготовка катеров для рыбалке - это не просто красивый маркетинговый слоган. За этими словами стоят десятки тысяч моточасов проведенных нашими спортсменами на водоемах, сотни нестандартных ситуаций и испытаний, которые выпадают на долю рыболова и его катера.</p>
            <p>Именно спорт дает стимул быть лучшим во всем. Самым быстрым на воде. Самым знающим в рыбопоисковой технике. Самым опытным в подготовке спортивных катеров.  Именно спорт дает стимул быть лучшим во всем. Самым быстрым на воде. Самым знающим в рыбопоисковой технике </p>
            <a href="<?= get_page_link(18); ?>">
                <button type="button" class="button">Подробнее</button>
            </a>
        </div>
        <div class="articles cell medium-12 large-6">
            <h3>Статьи</h3>

            <?php
            
                $ourCurrentPage = get_query_var('paged');
                $args = array(

                    'paged' => $ourCurrentPage,
                    'posts_per_page' => 4,
                    'category__in' => array(33),                 
                    'post_type' => 'articles-post' );
                $postslist = new WP_Query( $args );

                if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();
                    

                        ?>


                            <a href="<?php the_permalink(); ?>">
                            <div class="article-item">
                                <div class="clearfix">
                                    <div class="article-item-icon float-left">
                                       <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="article-item-content float-left">
                                        <p> <?php the_title(); ?></p>
                                        <span><?php  echo get_the_date('j F') . ' в ' . get_the_time();  ?></span>
                                    </div>
                                </div>
                            </div>
                            </a>
                        <?php

                            

                    endwhile;
                    wp_reset_postdata(); 
                endif;
            ?>

            <a href="<?= get_page_link(12); ?>"> 
                <button type="button" class="button">Все статьи</button>
            </a>
        </div>
    </div>
</section>


<div class="grid-container">
    <?php the_field('seo-text'); ?>
</div>

<?php get_footer();
