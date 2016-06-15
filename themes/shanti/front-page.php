<?php
/**
 * The main template file.
 *
 * @package shanti_Theme
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

		<div class="front-page-content">
			<section class="who-we-are">
				<div class="who-we-are-content">
				</div>
			</section>
			<section class="why-uganda">
				<div class="why-uganda-content">
				</div>
			</section>
			<section class="our-projects">
				<div class="our-projects-content">
				</div>
			</section>
			<section class="get-involved">
				<div class="get-involved-content">
				</div>
			</section>
			<section class="donate">
				<div class="donate-content">
				</div>
			</section>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
