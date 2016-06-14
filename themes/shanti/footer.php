<?php
/**
 * The template for displaying the footer.
 *
 * @package Shanti_Uganda_Theme
 */

?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="recentPosts">
				<div class="recentPosts-content">
					<h2> Recent Blog Posts! </h2>
					<ul class="blogPosts">
						<?php
			   $args = array( 'post_type' => 'post',
											 	'posts_per_page' => 3);
			   $blog_posts = get_posts( $args ); // returns an array of posts
			 ?>
			 <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
				 <li>

					 <div>
						 <?php if ( has_post_thumbnail() ) : ?>
							 <?php the_post_thumbnail( 'thumbnail' ); ?>
						 <?php endif; ?>
				 	</div>

				</li>
		 	 <?php endforeach; wp_reset_postdata(); ?>

					</ul>

				</div>
			</div>
			<div class="subscribe">
				<div class="subscribe-content">
					<h2>
						Sign up to hear from us!
					</h2>
					<form>
	     			<input type="text" placeholder="Your Email Address...."required></input>
	     			<button type="submit">Subscribe</button>
					</form>
					<div class="socialMedia-links">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Facebook_icon.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Flickr_icon.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Pinterest_icon.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Twitter_icon.png"></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Youtube_icon.png"></a>
				</div>
				<div class="insite-links">
					<a href="#">Blog</a>
						<span> &bull; </span>
  				<a href="#">Press</a>
						<span> &bull; </span>
					<a href="#">Careers</a>
						<span> &bull; </span>
 					<a href="#">Events</a>
						<span class="hiddenBullet"> &bull; </span>
					<a href="#">Newsletter</a>
						<span> &bull; </span>
					<a href="#">Contact Us</a>
				</div>
			</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
