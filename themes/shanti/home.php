<?php
/**
* The template for the blog archive.
*
* @package Shanti_Uganda_Theme
*/

get_header(); ?>

<header class="blog-header">
  <div class="text">
    <h2>Our Blog</h2>
    <p>Read our blog posts and articles to stay updated on what we're working on, and see how our wonderful staff and volunteers are making a difference</p>
  </div>

</header>
<div class="blog-color-block">
    <h3>Recent Posts</h3>
</div>

    <div id="primary" class="content-area container">
        <main id="main" class="site-main" role="main">


        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>


     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

               <?php if ( has_post_thumbnail() ) : ?>
                 <div class="circle-image">
                              <?php the_post_thumbnail( 'large' ); ?>
                 </div>
               <?php endif; ?>

                <div class="container">

                  <div class="blog-post">
                    <h3>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                      <span class="date"><?php shanti_posted_on(); ?></span>
                    </h3>
                    <?php the_content(); ?>
                  </div>

           </div><!-- .entry-content -->
         </article><!-- #post-## -->

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        <div class="newsletter-tag">

          <h5>Stay updated and sign up for our newsletter and blog!<h5>
        </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php get_footer('blog'); ?>
