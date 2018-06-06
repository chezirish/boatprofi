<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container search-products">
	<!-- <div class="main-grid"> -->
		<!-- <main id="search-results" class="main-content"> -->

		<header>
			<h3 class="entry-title"><?php _e( 'Результат поиска:', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h3>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="services-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>			
			<?php endwhile; ?>
			</div>
			<?php else : ?>
				<p class="no-result">Товары не найдены<br><br><a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="button">Назад</a></p>

		<?php endif; ?>

		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>


	<?php //get_sidebar(); ?>


</div>
<?php get_footer();
