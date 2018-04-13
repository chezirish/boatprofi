<?php
/*
Template Name: Контакты
*/

get_header(); ?>

<div class="contacts_page-content">
    <h3>Контакты</h3>
    <div class="contacts_page-map">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Карта не установлена.</p>
    <?php endif; ?>

    </div>

</div>

<?php get_footer();
