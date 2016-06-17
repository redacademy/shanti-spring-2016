<?php
/**
 * The template for displaying the Meet Our Team page.
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

			<?php endwhile; // End of the loop. ?>

      <!-- Loop through the Custom Taxonomy (Team Roles) -->

      <?php $team_roles = get_terms('team_role', array('parent' => 0)); ?>
      <?php foreach($team_roles as $role): ?>
        <section class="">
          <a href="<?php echo get_term_link($role, 'our-team'); ?>"
          <div class="section-content">
            <h3><?php echo $role->name; ?></h3>
          </div>
          <div class="thumbnail">

          </div>
        </section>
      <?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
