<?php
/**
 * The template for displaying the Gifts of Action page.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header hero">
            <div class="pink-header">
              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
              <?php echo CFS()->get('excerpt'); ?>
            </div>
        	</header><!-- .entry-header -->

			<?php endwhile; // End of the loop. ?>

      <!-- Loop through the Custom Taxonomy (Action Types) -->

			<div class="gifts-of-action">

	      <?php $gift_types = get_terms('action_types'); ?>
	      <?php foreach( $gift_types as $gift): ?>
	        <section class="alternating">
	          <div class="alt-image">
	            <?php $image_id = get_term_meta($gift->term_id, 'image', true);
	                  $image_data = wp_get_attachment_image_src( $image_id, 'full');
	                  $image = $image_data[0];
	             ?>
	             <img src="<?php echo $image; ?>" alt="<?php echo $gift->name; ?>" />

	          </div>
	          <div class="alt-info">
	            <a href="<?php echo get_term_link($gift, 'action_types') ?>"><h3>Gifts of <?php echo $gift->name; ?></h3></a>
	            <div class="alt-text">
	              <?php echo $gift->description; ?>
	            </div>
	            <div class="alt-link">
	              <a class="cta buy" href="<?php echo get_term_link($gift, 'action_types') ?>">Buy Now</a>
	            </div>
	          </div>
	        </section>
	      <?php endforeach; ?>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
