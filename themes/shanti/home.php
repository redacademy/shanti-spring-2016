<?php
/**
* The main template file.
*
* @package Shanti_Uganda_Theme
*/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>



            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>


     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="blog-title-date"
                    <header class="entry-header">
               <?php if ( has_post_thumbnail() ) : ?>
                   <div class="circle-image">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </div>
               <?php endif; ?>
               <?php the_title( sprintf( '<h2 class="entry-title blog-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

               <?php if ( 'post' === get_post_type() ) : ?>
               <div class="entry-meta">
                   <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
               </div><!-- .entry-meta -->
               <?php endif; ?>
           </header><!-- .entry-header -->
                </div>
                <div class="entry-content">
               <?php the_content(); ?>
           </div><!-- .entry-content -->
     </article><!-- #post-## -->

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
<p>Sign up for our newsletter</p>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
