<?php
/**
 * The template for displaying the Upcoming Events page.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header hero">
            <div class="our-story-header">
              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
              <?php echo CFS()->get('excerpt'); ?>
            </div>
        	</header><!-- .entry-header -->

          <?php $args = array( 'post_type' => 'events', 'posts_per_page' => 2); ?>
          <?php $events = get_posts( $args ); ?>
          <?php foreach ($events as $post): setup_postdata($post); ?>
            <section>
              <div class="event-image">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'full' ); ?>
                <?php endif; ?>
              </div>
              <div class="event-subheader">
                <?php echo CFS()->get('excerpt'); ?>
              </div>
              <div class="event-info">
                <?php the_content(); ?>
              </div>

            </section>
          <?php endforeach; wp_reset_postdata(); // end events loop ?>

			<?php endwhile;// End of the loop. ?>


      <!-- start loop of events -->

<?php get_footer(); ?>
