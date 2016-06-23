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

						<div class="container"> <?php the_content(); ?></div>

							<h3>Our Accomplishments</h3>

						<section class="infographic">

							<ul>
								<?php $infographic = CFS()->get('infographic'); //create an array of the infographic images
										foreach($infographic as $pic):?>

										<li>
											<img src="<?php echo esc_url( $pic['image'] ); ?>" alt="<?php echo esc_attr($pic['text']); ?>" />
										</li>
								 <?php endforeach;?>
						 </ul>

						</section>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<!-- Start loop of child pages -->

		<?php $args = array('post_type' => 'page',
												'meta_key' => 'homepage',
												'meta_value' => 1,
												'order' => 'ASC',
												'orderby' => 'date'
											 );
					$child_pages = get_posts($args);
		?>

		<?php foreach( $child_pages as $post ): setup_postdata( $post); ?>

			<section class="alternating equal <?php echo esc_attr( $post->post_name ); ?>">
				<div class="alt-image">
					<?php the_post_thumbnail('large'); ?>
				</div>
				<div class="alt-info">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				</div>

			</section>
		<?php endforeach; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
