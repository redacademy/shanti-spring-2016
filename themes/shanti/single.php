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

								<?php if ( has_post_thumbnail() ) : ?>
									<div class="circle-image">
															 <?php the_post_thumbnail( 'large' ); ?>
									</div>
								<?php endif; ?>

								 <div class="entry-content container">
									 <div class="blog-date-title">
										 <span class="blog-post-title"><?php the_title(); ?></span>
										 <span><?php shanti_posted_on(); ?></span>
									 </div>
								<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->
<!-- <div class="article-content">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="circle-image">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="entry-meta">
						<?php shanti_posted_on(); ?> / <?php shanti_comment_count(); ?> / <?php shanti_posted_by(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

				<div class="blog-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
</div>
				<footer class="entry-footer">
					<?php shanti_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## --> -->


			<?php the_post_navigation(); ?>

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
