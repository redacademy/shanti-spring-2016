<?php
/**
 * The template for displaying all single Team Member posts.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="blog-post-container">
					<h2><?php the_title(); ?></h2>
				</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="staff-circle">
															 <?php the_post_thumbnail( 'thumbnail' ); ?>
									</div>
								<?php endif; ?>

								 <div class="entry-content container">

								<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
