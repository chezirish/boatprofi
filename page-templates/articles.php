<?php
/*
Template Name: Статьи
*/

get_header(); ?>

<div class="articles_page-content">
    <div class="grid-container">
        <h3>Статьи</h3>
    </div>
    

    <div class="articles_page-articles-list">

         <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => 12,                
                'post_type' => 'articles-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                     ?>
                        
                        <div class="articles_page-article-item">
                        <a class="sirvices-item-link-wrapper" href="<?php echo the_permalink() ?>">
                            <p><?php  echo get_the_date('j F Y'); ?></p>
                            <div class="articles_page-article-item-img">
                                <?php the_post_thumbnail('', array( 'class' => "")) ?>                                
                                <button type="button" class="button">Подробнее о статье</button>
                            </div>
                            <?php the_excerpt() ?>
                        </a>
                        </div>
                        
                    <?php

                        

                endwhile;
                wp_reset_postdata(); 
            endif;
        ?>

        



        

    </div>

    <div class="pagination"  role="navigation" aria-label="Pagination">
        <?php echo paginate_links(array('total' => $postslist->max_num_pages));  ?>
    </div>   
</div>

<?php get_footer();
