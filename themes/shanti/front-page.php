<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header hero">
					</header><!-- .entry-header -->

					<div class="entry-content">

						<section class="infographic">
							<h2>Our Accomplishments</h2>
							<ul>
								<?php $infographic = CFS()->get('infographic'); //create an array of the infographic images
										foreach($infographic as $pic):?>

										<li><img src="<?php echo $pic['image']; ?>" alt="<?php echo esc_attr($pic['text']); ?>" /></li>
								 <?php endforeach;?>
						 </ul>
						</section>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
