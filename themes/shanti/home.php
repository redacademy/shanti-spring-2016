<?php
/**
 * The main template file.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>



			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="blog-wrap">
						<header class="entry-header">

							<?php if ( has_post_thumbnail() ) : ?>
								<div class="circle-image">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>

						</header><!-- .entry-header -->

					<div class="entry-content">
						 <div class="blog-post-title"><?php the_title( ); ?>
						 </div>

            <div class="blog-date-title">
							<?php red_starter_posted_on(); ?>
						</div>
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- .blog-wrap -->
      </article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
<div class="newsletter-tag">
	<p>Stay updated and sign up for our newsletter and blog</p>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
