<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				<?php //the_post_navigation(); ?>
				<?php //comments_template(); ?>
			<?php endwhile; ?>
		<?php //get_sidebar(); ?>
<?php get_footer();
