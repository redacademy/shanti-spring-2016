<?php
/**
 * The template for displaying the footer on the blog page.
 *
 * @package Shanti_Uganda_Theme
 */

?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">


			<div class="subscribe">
				<div class="subscribe-content">
					<h3>
						Sign up to hear from us!
					</h3>
					<form>
						<div>
	     				<input type="email" placeholder="Your e-mail Address...."required></input>
	     				<button type="submit">Subscribe</button>
						</div>
					</form>
					<div class="socialMedia-links">
						<a href="https://twitter.com/shantiuganda"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Twitter_icon.png"></a>
						<a href="https://www.facebook.com/shantiuganda"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Facebook_icon.png"></a>
						<a href="https://www.flickr.com/photos/shantiugandasociety/sets/"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Flickr_icon.png"></a>
						<a href="https://www.pinterest.com/shantiuganda/"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Pinterest_icon.png"></a>
						<a href="https://www.youtube.com/user/shantiug"><img src="<?php echo get_template_directory_uri(); ?>/images\socialMedia_icons\Youtube_icon.png"></a>
				</div>
				<div class="insite-links">
					<a href="blog">Blog</a>
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
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
