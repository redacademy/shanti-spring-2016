<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Shanti_Uganda_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero">



	</header><!-- .entry-header -->
	<div class="feature-color sub-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php echo CFS()->get('excerpt'); ?>
	</div>

	<div class="entry-content container">
		<?php the_content(); ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
