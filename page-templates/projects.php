<?php
/*
Template Name: Проекты
*/

get_header(); ?>

<div class="services_page-content">
    <div class="grid-container">
        <h3>Наши проекты</h3>   
    </div>
    

    <div class="project-list">
        
        <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => 9,                
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

    <div class="grid-container">
        <div class="pagination-wrapper">
            <div class="pagination"  role="navigation" aria-label="Pagination">
                <?php echo paginate_links(array('total' => $postslist->max_num_pages));  ?>
            </div>   
        </div>
    </div>



    <div class="grid-container">
        <section class="callout section-form" data-closable>
            <button class="close-button"  data-close aria-label="Dismiss alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4>Не нашли подходящую услугу, <br>  отправте запрос нашему специалисту</h4>   
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
                    <div class="form-right form-last float-left">
                        <label for="desc">Описание задачи</label>
                        <input  require placeholder="Введите данные" id="desc" type="text">
                    </div>
                    <div class="form-last-phone form-right form-last">
                        <label for="desc">Описание задачи</label>
                        <textarea require placeholder="Введите данные"  id="desc" cols="20" rows="7"></textarea>
                    </div>
                    <button class="desktop float-right section-title-submit" type="submit">Отправть</button>
                </div>

                <div class="file-wrapper">
                    <input class="input-file" id="my-file" type="file">
                    <label tabindex="0" for="my-file" class="input-file-trigger">+ Прикрепите фото катера</label>

                    <input class="css-checkbox" id="checkbox7" type="checkbox">
                    <label id="checkbox77" for="checkbox7" class="css-label lite-x-green">Согласен с "политикой конфидециальности"</label>
                    <p class="file-return"></p>
                </div>
                <button class="section-title-submit section-title-submit-tablet" type="submit">Отправть</button>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="242" title="Форма на списке проектов"]'); ?>
        </section>
    </div>
    <div class="grid-container">
        <div class="services_page-banner" style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/front_background.jpg);background-size:cover;background-position:0">
            <div class="services_page-banner-content">
                <h2>Нам доверяют чемпионы!</h2>
                <p>Многолетний опыт позволяет работать разными материалами, выполнять макетные работы. Уделяем особое внимание силовой проводке, настройке и установке оборудования.</p>
            </div>
        </div>
    </div>

</div>


<?php get_footer();
