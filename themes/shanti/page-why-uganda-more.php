<?php
/**
 * The template for displaying the Why Uganda? Page.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        	<header class="entry-header hero">

        	</header><!-- .entry-header -->

            <div class="feature-color sub-header why">
              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
          		<?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
            </div>

        		<div class="entry-content">

	            <div class="why-uganda text">
	              <?php echo wp_kses_post( CFS()->get('pull-quote')); ?>
	            </div>

            	<section class="why-uganda infographic">

	              <ul>
	                <?php $infographic = CFS()->get('infographic'); //create an array of the infographic images
	                    foreach($infographic as $pic):?>

	                    <li><img src="<?php echo esc_url( $pic['image'] ); ?>" alt="<?php echo esc_attr($pic['text']); ?>" /></li>
	                 <?php endforeach;?>
	             </ul>
	            </section>

            	<div class="why-uganda-footer">

            	</div>

							<div class="why-uganda text">
	              <?php the_content(); ?>
	            </div>

        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
