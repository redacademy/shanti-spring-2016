<?php
/**
 * The template for displaying all single posts.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="blog-post">
					<h3>
						<?php the_title(); ?>
						<span class="date"><?php shanti_posted_on(); ?></span>
					</h3>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="circle-image">
							<?php the_post_thumbnail( 'medium' ); ?>
						</div>
					<?php endif; ?>

					<?php the_content(); ?>

				</div>

				<footer class="entry-footer">
					<?php shanti_entry_footer(); ?>
				</footer><!-- .entry-footer -->

			</article><!-- #post-## -->


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
