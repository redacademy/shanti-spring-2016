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
            <div class="our-story-header">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              <?php echo CFS()->get('excerpt'); ?>
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
                   <img src="<?php echo $value['image']; ?>" alt="graphical icon of value" />
                   <h4><?php echo $value['label']; ?></h4>
                   <p><?php echo $value['text']; ?></p>
                 </li>
              <?php endforeach; ?>
            </ul>

            <div class="history">
              <div class="history-header">
                <img src="<?php echo CFS()->get('history_image'); ?>" alt="Our History">
                <h3>History</h3>
              </div>
							<div class="history-content container">
								<?php echo CFS()->get('history'); ?>
							</div>
            </div>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
