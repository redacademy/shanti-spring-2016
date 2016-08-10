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



			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<div class="event-post-container">
          <?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
					<p><?php echo wp_kses_post( CFS()->get('date') ); ?></p>
					<p>
						<?php echo wp_kses_post( CFS()->get('location') ); ?>
					</p>
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
