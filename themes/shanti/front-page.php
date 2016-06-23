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
						<div class="border">
							<!-- transparent bottom border of the header image on home page  -->
						</div>
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

		<div class="front-page-content">
			<section class="who-we-are">
				<div class="who-we-are-content">
					<?php
						$my_id = 16;
						$post_id_16 = get_post($my_id);
						$title = $post_id_16->post_title;
						$title = apply_filters('the_title', $title);
						$title = str_replace(']]>', ']]>', $title);
						$link = get_page_link($my_id);
					?>
					<div class="section-content">
						<a href="<?php echo esc_url( $link ); ?>">
						<h3 class="title">
							<?php
								echo $title;
								?>
							</h3>
						</a>
						</div>

					<div class="thumbnail">
						<?php
							$my_id = 16;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<a href="<?php echo $link ?>">
						<img src="<?php echo $feat_image ?>" alt="<?php echo $title;?>" />
							</a>
					</div>


				</div>
			</section>
			<section class="why-uganda">
				<div class="why-uganda-content">
					<?php
					$my_id = 24;
					$post_id_24 = get_post($my_id);
					$title = $post_id_24->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					$link = get_page_link($my_id);
					?>
					<div class="section-content">
						<a href="<?php echo $link ?>">
						<h3 class="title">
							<?php
								echo $title;
								?>
							</h3>
						</a>
						</div>
					<div class="thumbnail">
						<?php
							$my_id = 24;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<a href="<?php echo $link ?>">
							<img src="<?php echo $feat_image ?>" alt="<?php echo $title;?>" />
							</a>
						</div>
				</div>
			</section>
			<section class="our-projects">
				<div class="our-projects-content">
					<?php
					$my_id = 30;
					$post_id_30 = get_post($my_id);
					$title = $post_id_30->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					$link = get_page_link($my_id);
					 ?>

					<div class="section-content">
					<a href="<?php echo $link ?>">
					<h3 class="title">
						<?php
							echo $title;
							?>
						</h3>
					</a>

						</div>

					<div class="thumbnail">
						<?php
							$my_id = 30;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<a href="<?php echo $link ?>">
							<img src="<?php echo $feat_image ?>" alt="<?php echo $title;?>" />
							</a>
						</div>
				</div>
			</section>
			<section class="get-involved">
				<div class="get-involved-content">
					<?php
					$my_id = 40;
					$post_id_40 = get_post($my_id);
					$title = $post_id_40->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					$link = get_page_link($my_id);
					?>
					<div class="section-content">
						<a href="<?php echo $link ?>">
						<h3 class="title">
							<?php
								echo $title;
								?>
							</h3>
						</a>

						</div>

					<div class="thumbnail">
						<?php
							$my_id = 40;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<a href="<?php echo $link ?>">
							<img src="<?php echo $feat_image ?>" alt="<?php echo $title;?>" />
							</a>
						</div>
				</div>
			</section>
			<section class="donate">
				<div class="donate-content">
					<?php
					$my_id = 52;
					$post_id_16 = get_post($my_id);
					$title = $post_id_16->post_title;
					$title = apply_filters('the_title', $title);
					$title = str_replace(']]>', ']]>', $title);
					$link = get_page_link($my_id);
					?>
					<div class="section-content">
						<a href="<?php echo $link ?>">
						<h3 class="title">
							<?php
								echo $title;
								?>
							</h3>
						</a>

						</div>

					<div class="thumbnail">
						<?php
							$my_id = 52;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<a href="<?php echo $link ?>">
							<img src="<?php echo $feat_image ?>" alt="<?php echo $title;?>" />
							</a>
						</div>
				</div>
			</section>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
