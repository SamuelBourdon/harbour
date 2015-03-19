<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package harbour
 */

get_header(); ?>
	<div class="container">

				<?php get_sidebar('left'); ?>

		<!-- Start site-content -->
		<?php get_template_part( 'parts/layout', 'two-sidebars' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php //get_template_part( 'content', 'none' ); ?>
			<p>Nothing here</p>

		<?php endif; ?>

		

		</div><!-- End site-content -->

<?php get_sidebar('right'); ?>

	</div><!-- End site-container -->
<?php get_footer(); ?>