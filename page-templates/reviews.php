<?php
/*
Template Name: Отзывы
*/

get_header(); ?>

<div class="contacts-reviews-page">
    <div class="grid-container">
        <h3>Отзывы</h3>
    </div>
        <div class="portfolio-page__content">   


            <?php
            
                $ourCurrentPage = get_query_var('paged');
                $args = array(

                    'paged' => $ourCurrentPage,
                    'posts_per_page' => 3,                
                    'post_type' => 'reviews-post' );
                $postslist = new WP_Query( $args );

                if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();
                    

                        ?>



                            <div class="portfolio-page__review-content clearfix">
                                <p class="portfolio-page__review-date portfolio-page__review-date-root float-left"><?php  echo get_the_date('j F'); ?></p>
                                <div class="portfolio-page__review-info float-left">
                                    <?php the_post_thumbnail('', array( 'class' => "portfolio-page__title-small-avatar")) ?> 
                                    <p class="review-info-name"> <b> <?php the_field('name') ?></b> <br> <?php the_field('city') ?> </p>
                                    <?php if(get_field('link_project') != ''): ?>
                                    <a class="review-project-name-link" href="<?php the_field('link_project') ?>"> <span class="review-project-name" >Проект:</span> <?php the_field('project_name'); ?></a>
                                    <?php endif; ?>
                                    <p class="review-info-comment"><?php the_field('text') ?></p>
                                </div>
                            </div>

                            <hr class="reviews-devide">

                        <?php

                            

                    endwhile;
                    wp_reset_postdata(); 
                endif;
            ?>



        </div>


        <div class="contacts-reviews-page__show-more">
            <a class="reviews-ajax"><img class="svg-green" src="<?= get_template_directory_uri() ?>/dist/assets/images/more-comments.svg">   Показать еще отзывы</a>
        </div>
</div>

<?php get_footer();
