<?php
/**
 * The template for displaying all Parent Pages, ie. pages that have a loop of their child pages below.
 *
 * @package Shanti_Uganda_Theme
 *
 * Template Name: Parent Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        	<header class="entry-header hero">

        		<div class="header-text">
              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
              <?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
            </div>

        	</header><!-- .entry-header -->

        	<div class="entry-content feature-color">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->

        </article><!-- #post-## -->

        <!-- loop of child pages -->
				<?php global $this_page; $this_page_ID = get_the_ID();?>

        <section class="child-pages">

  					<?php global $id;
  						$args = array( 'child_of' 		=> $id,
														 'post_type' 		=> 'page',
														 'sort_column' 	=> 'menu_order',
														 'sort_order' 	=> 'ASC');

  						$child_pages = get_pages($args); //returns an array of the child pages of the current page
  						foreach($child_pages as $post): setup_postdata($post); ?>

  						<section class="alternating equal">

								<div class="alt-image">
                  <?php the_post_thumbnail('large'); ?>
                </div>

                <div class="alt-info">
									<div class="our-story-headers">
                    <h3><?php the_title(); ?></h3>
								 </div>

								 <div class="alt-text">
                  <?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
							 	</div>

								<div class="alt-link">

									<!-- Different Parent pages get different customized links to their child pages -->

									<a class="discover-button" href="<?php the_permalink(); ?>">

										<?php if(get_the_title($this_page_ID) === 'Get Involved'): ?>

											<?php echo get_the_title($this_page_ID); ?>

										<?php elseif(get_the_title($this_page_ID) === 'Donate Now'): ?>

												Our <?php echo $post->post_name; ?>
										<?php else: ?>
									 		Discover More
								 		<?php endif; ?>
								 </a>

								</div>

							 </div>
  						</section>

  					<?php endforeach; wp_reset_postdata();?>

        </section>
			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
