<?php
/**
 * The template for displaying the Our Story page.
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
              <?php echo wp_kses_post( CFS()->get('excerpt') ); ?>
            </div>
        	</header><!-- .entry-header -->

        	<div class="entry-content">

            <div class="story-content container">
              <?php the_content(); ?>
            </div>
            <ul class="values">
              <?php $values = CFS()->get('value'); ?>
              <?php foreach($values as $value): ?>
                 <li>
                   	<img src="<?php echo esc_url( $value['image'] ); ?>" alt="graphical icon of <?php echo esc_attr( $value['label'] ); ?>" />
                   <h4><?php echo wp_kses_post( $value['label'] ); ?></h4>
                   <p><?php echo wp_kses_post( $value['text'] ); ?></p>
                 </li>
              <?php endforeach; ?>
            </ul>

            <div class="history">
              <div class="history-header">
                <img src="<?php echo esc_url( CFS()->get('history_image') ); ?>" alt="Our History">
                <h3>History</h3>
              </div>
							<div class="history-content container">
								<?php echo wp_kses_post( CFS()->get('history') ); ?>
							</div>
            </div>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
