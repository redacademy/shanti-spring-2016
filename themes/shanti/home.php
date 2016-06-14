<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

<<<<<<< HEAD

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

        <?php
        /**
         * Template part for displaying posts.
         *
         * @package RED_Starter_Theme
         */

        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php if ( has_post_thumbnail() ) : ?>
        			<?php the_post_thumbnail( 'large' ); ?>
        		<?php endif; ?>

        		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        		<?php if ( 'post' === get_post_type() ) : ?>
        		<div class="entry-meta">
        			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        		</div><!-- .entry-meta -->
        		<?php endif; ?>
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
=======
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
					</header><!-- .entry-header -->

					<div class="entry-content">

						<section class="infographic">
							<h2>Our Accomplishments</h2>
							<ul>
								<?php $infographic = CFS()->get('infographic'); //create an array of the infographic images
										foreach($infographic as $pic):?>

										<li><img src="<?php echo $pic['image']; ?>" alt="<?php echo esc_attr($pic['text']); ?>" /></li>
								 <?php endforeach;?>
						 </ul>
						</section>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

>>>>>>> be193945b0a68e790b2aecf84924693f6bd15a56

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<<<<<<< HEAD

=======
>>>>>>> be193945b0a68e790b2aecf84924693f6bd15a56
<?php get_sidebar(); ?>
<?php get_footer(); ?>
