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
						<h3><a href="blog">Recent Blog Posts!</a></h3>
						<ul class="blogPosts">
							<?php
				   $args = array( 'post_type' => 'post',
												 	'posts_per_page' => 1);
				   $blog_posts = get_posts( $args ); // returns an array of posts
				 ?>
				 <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
					 <li>
						 <a href="<?php the_permalink(); ?>">
						 	<div>
							 	<?php if ( has_post_thumbnail() ) : ?>
								 	<?php the_post_thumbnail( 'thumbnail' ); ?>
							 	<?php endif; ?>
					 		</div>
							<p>
								<?php echo CFS()->get( 'subtitle' ); ?>
							</p>
						</a>
					</li>
			 	 <?php endforeach; wp_reset_postdata(); ?>

						</ul>

					</div>
				</div>

			<div class="subscribe">
				<div class="subscribe-content">
					<h3>
						Sign up to hear from us!
					</h3>
					<form>
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
