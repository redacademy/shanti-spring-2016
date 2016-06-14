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
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php echo CFS()->get('excerpt'); ?>
            </div>
        	</header><!-- .entry-header -->

        	<div class="entry-content feature-color">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

        <!-- loop of child pages -->


  					<?php global $id;
  						$args = array( 'child_of' => $id, 'post_type' => 'page');
  						$child_pages = get_pages($args);
  						foreach($child_pages as $post): setup_postdata($post); ?>
  						<div class="child-page">
                <div class="child-page-text">
                  <h3><?php the_title(); ?></h3>
                  <?php echo CFS()->get('excerpt'); ?>
                </div>
                <div class="child-page-image">
                  <?php the_post_thumbnail('large'); ?>
                </div>

  						</div>

  					<?php endforeach; wp_reset_postdata();?>

			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
