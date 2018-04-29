
<div class="single-article_page">
    <div class="grid-container">
    <h3><?php the_title() ?></h3>
    <div class="single-article_page-content">
        <p class="date"><?php the_date('j F Y'); ?></p>
        <div class="article-title grid-x grid-margin-x">
            <div class="single-article_page-avatar cell medium-6 large-6" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>);background-size:cover"></div>
            <div class="cell medium-6 large-6">
              <?php the_content(); ?>
            </div>
        </div>
        <div class="single-article_page-info">
           <?php  the_field('article_text_below') ?>
        </div>
        <div class="single-article_page-facts clearfix">
            <div class="facts-list float-left">
                <?php  echo apply_filters("the_content", get_field('article_marked_list')); ?>
            </div>
            <div class="facts-list float-left">
                <?php  echo apply_filters("the_content", get_field('article_digital_list')); ?>
            </div>
        </div>

        <div class="single-article_page-another-articles">
            <h3>Другие интересные статьи</h3>
            <div class="articles_page-articles-list">

                     <?php
            
                    $ourCurrentPage = get_query_var('paged');
                    $args = array(

                        'paged' => $ourCurrentPage,
                        'posts_per_page' => 4,   
                        'post_type' => 'articles-post' );
                    $postslist = new WP_Query( $args );

                    if ( $postslist->have_posts() ) :
                        while ( $postslist->have_posts() ) : $postslist->the_post();
                        

                            ?>


                                <div class="articles_page-article-item">
                                <a class="sirvices-item-link-wrapper" href="<?php echo the_permalink() ?>">
                                    <p><?php  echo get_the_date('j F Y'); ?></p>
                                    <div class="articles_page-article-item-img">
                                    <?php the_post_thumbnail('', array('class' => "")); ?>
                                        <a href="<?php the_permalink(); ?>">
                                        <button type="button" class="button">Подробнее о статье</button>
                                        </a>
                                    </div>
                                    <p><?php the_title() ?> </p>
                                </a>
                                </div>

                            <?php

                                

                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                
            </div>
        </div>
    </div>
    </div>
</div>




        <?php //the_post_thumbnail('', array( 'class' => "",)) ?>

        <h4><?php //the_title() ?></h4>
        <p><?php //the_content(); ?></p>
