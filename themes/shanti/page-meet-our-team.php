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


      <?php $team_roles = get_terms('team_role', array('parent' => 0));
			$advisory_board = $team_roles[0];
			$board_of_directors = $team_roles[1];
			$our_partners = $team_roles[2];
			$our_staff = $team_roles[3];
			$wigg = $team_roles[4];
			?>

			<div class="meet-our-team-content">
        <section class="board_of_directors">
					<div class="board_of_directors-content">
          	<!-- <a href="<?php echo get_term_link($board_of_directors, 'our-team');?>"> -->
          		<div class="section-content">
            		<h3><?php echo $board_of_directors->name; ?></h3>
          		</div>
          		<div class="thumbnail">
								<?php
									$my_id = 16;
									$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
									?>
									<img src="<?php echo $feat_image ?>" alt="test" />
          		</div>
						<!-- </a> -->
					</div>
        </section>

				<section class="advisory_board">
          <a href="<?php echo get_term_link($advisory_board, 'our-team');?>"
          <div class="section-content">
            <h3><?php echo $advisory_board->name; ?></h3>
          </div>
					<div class="thumbnail">
						<?php
							$my_id = 16;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<img src="<?php echo $feat_image ?>" alt="test" />
          </div>
				</a>
        </section>

				<section class="our_staff">
          <a href="<?php echo get_term_link($our_staff, 'our-team');?>"
          <div class="section-content">
            <h3><?php echo $our_staff->name; ?></h3>
          </div>
					<div class="thumbnail">
						<?php
							$my_id = 16;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<img src="<?php echo $feat_image ?>" alt="test" />
          </div>
				</a>
        </section>

				<section class="our_partners">
          <a href="<?php echo get_term_link($our_partners, 'our-team');?>"
          <div class="section-content">
            <h3><?php echo $our_partners->name; ?></h3>
          </div>
					<div class="thumbnail">
						<?php
							$my_id = 16;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<img src="<?php echo $feat_image ?>" alt="test" />
          </div>
				</a>
        </section>

				<section class="wigg">
          <a href="<?php echo get_term_link($wigg, 'our-team');?>"
          <div class="section-content">
            <h3><?php echo $wigg->name; ?></h3>
          </div>
					<div class="thumbnail">
						<?php
							$my_id = 16;
							$feat_image = wp_get_attachment_url(get_post_thumbnail_id($my_id));
						?>
						<img src="<?php echo $feat_image ?>" alt="test" />
          </div>
				</a>
        </section>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
