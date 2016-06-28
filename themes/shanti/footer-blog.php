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

						<form action="<?php echo get_page_link(559); ?>">
							<div>
								<div class="subscribe-input">
									<i class="fa fa-envelope" aria-hidden="true"></i>
		     					<input type="email" placeholder="Your e-mail Address...."required></input>
								</div>
		     				<button type="submit">Subscribe</button>
							</div>
						</form>

						<div class="socialMedia-links">
							<a href="https://twitter.com/shantiuganda"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://www.facebook.com/shantiuganda"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://www.flickr.com/photos/shantiugandasociety/sets/"><i class="fa fa-flickr" aria-hidden="true"></i></a>
							<a href="https://www.pinterest.com/shantiuganda/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="https://www.youtube.com/user/shantiug"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					</div>

					<div class="insite-links">
						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">Blog</a>
							<span> &bull; </span>
	  				<a href="http://shantiuganda.org/about/press/">Press</a>
							<span> &bull; </span>
						<a href="http://shantiuganda.org/get-involved/job-opportunities/">Careers</a>
							<span> &bull; </span>
	 					<a href="#">Events</a>
							<span class="hiddenBullet"> &bull; </span>
						<a href="http://shantiuganda.org/contact/newsletter/">Newsletter</a>
							<span> &bull; </span>
						<a href="http://shantiuganda.org/contact/">Contact Us</a>
					</div>

				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
