<?php
/**
 * The template for displaying all single posts.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

        <header class="entry-header hero"></header>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="event-post-container">
          <?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
				</div>

				<div class="event-entry-content container">

					<?php the_content(); ?>

				</div><!-- .entry-content -->


				<footer class="entry-footer">
						<?php shanti_entry_footer(); ?>
				</footer><!-- .entry-footer -->

			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
