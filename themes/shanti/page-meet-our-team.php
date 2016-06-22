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
            <div class="pink-header">
              <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
              <?php echo CFS()->get('excerpt'); ?>
            </div>
        	</header>

			<?php endwhile; // End of the loop. ?>

      <!-- Loop through the Custom Taxonomy (Team Roles) -->
			<div class="meet-our-team-content">

      	<?php $team_roles = get_terms('team_role', array('parent' => 0, 'orderby' => 'term_order', 'order' => 'ASC'));?>


				<?php foreach($team_roles as $team_role): ?>
					<section class="alternating equal <?php echo $team_role->slug ?>">
						<div class="alt-image">
							<?php $image_id = get_term_meta($team_role->term_id, 'image', true);
										$image_data = wp_get_attachment_image_src( $image_id, 'full');
										$image = $image_data[0];
							 ?>
							 <img src="<?php echo $image; ?>" alt="<?php echo $team_role->name; ?>" />

						</div>
						<div class="alt-info">
							<a href="<?php echo get_term_link($team_role, 'team_role') ?>"><h3><?php echo $team_role->name; ?></h3></a>

						</div>
					</section>
  			<?php endforeach; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
