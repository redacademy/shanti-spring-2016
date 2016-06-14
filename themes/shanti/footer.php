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
				recent post loop goes here
				</div>
			</div>
			<div class="subscribe">
				<div class="subscribe-content">
					<h2>
						Sign up to hear from us!
					</h2>
					<form>
	     			<input type="text" required></input>
	     			<button type="submit">Subscribe</button>
					</form>
					<div class="socialMedia-links">
						<a href="#"><img src="wp-content\themes\shanti\images\socialMedia_icons\Facebook_icon.png"></a>
						<a href="#"><img src="wp-content\themes\shanti\images\socialMedia_icons\Flickr_icon.png"></a>
						<a href="#"><img src="wp-content\themes\shanti\images\socialMedia_icons\Pinterest_icon.png"></a>
						<a href="#"><img src="wp-content\themes\shanti\images\socialMedia_icons\Twitter_icon.png"></a>
						<a href="#"><img src="wp-content\themes\shanti\images\socialMedia_icons\Youtube_icon.png"></a>
				</div>
				<ul class="insite-links">
					<li> <a href="#">Blog</a>
  				<li> <a href="#">Press</a>
					<li> <a href="#">Careers</a>
 					<li> <a href="#">Events</a>
					<li> <a href="#">Newsletter</a>
					<li> <a href="#">Contact Us</a>
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
