<?php
/**
 * The template for displaying the partners term of the team role custom taxonomy.
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

<?php get_footer(); ?>
