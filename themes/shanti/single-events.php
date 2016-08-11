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
				<div class="event-image">
					<?php if(CFS()->get('poster')): ?>
						<img src="<?php echo esc_url(CFS()->get('poster')); ?>" alt="Poster for this event. See below for details" />
					<?php endif; ?>
				</div>

				<div class="event-post-container">
          <?php if (CFS()->get('excerpt')): ?>
						<?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
				<?php endif; if (CFS()->get('date')):?>
					<p><?php echo wp_kses_post( CFS()->get('date') ); ?></p>
				<?php endif; if ( CFS()->get('location')): ?>

					<p>
						<?php echo wp_kses_post( CFS()->get('location') ); ?>
					</p>
				<?php endif; ?>
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
