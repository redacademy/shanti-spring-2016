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
			<div class="role-header">

					<h2><?php single_term_title(); ?></h2>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<?php $terms = get_the_terms($post->ID, 'team_role');
                         $term = array_shift($terms);?>

            <div class="partners">
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="partner">
					<a href="#"><?php the_post_thumbnail('medium'); ?></a>

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
