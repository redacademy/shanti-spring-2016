<?php
/**
 * The template for displaying archive pages.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="tax-header">

			</header>
			<divclass="role-header">
				<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<div class="staff container">
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="staff-member">
					<?php the_post_thumbnail('thumbnail'); ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

						<?php the_excerpt(); ?>

				</div>


				<?php endwhile; ?>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
