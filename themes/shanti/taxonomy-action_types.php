<?php
/**
 * The template for displaying custom taxonomy .
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="tax-header">

			</header>
			<div class="gift-header">
				<?php
					the_archive_title( '<h3 class="page-title">', '</h3>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

			</div><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="alternating">
					<div class="alt-image">
						<?php the_post_thumbnail('full'); ?>
					</div>
					<div class="alt-info">
						<h3><?php the_title(); ?></h3>
						<?php $term_list = wp_get_post_terms($post->ID, 'action_price');?>
						<h4><?php echo $term_list[0]->name; ?></h4>
						<div class="alt-text"><?php the_excerpt(); ?></div>
						<div class="alt-link">
							<a href="" class="cta buy">Buy</a>
						</div>
					</div>
				</section>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
