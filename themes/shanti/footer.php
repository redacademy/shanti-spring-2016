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

					<h3><a href="blog">Recent Blog Post</a></h3>


						<?php
						   $args = array( 'post_type' => 'post',
														 	'posts_per_page' => 1);
						   $blog_posts = get_posts( $args ); // returns an array of posts
			 			?>
					 <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
						<div class="blog-post-alignment">
						 <li>
							 <a href="<?php esc_url(the_permalink()); ?>">
								 	<?php if ( has_post_thumbnail() ) : ?>
									 	<?php the_post_thumbnail( 'thumbnail' ); ?>
								 	<?php endif; ?>
									<div class="blog-link">
								<h4>
									<?php echo the_title() ?>
								</h4>
								<p>
									<?php echo wp_kses_post( CFS()->get( 'subtitle' ) ); ?>
								</p>
								<p>
								<?php the_excerpt(); ?>
								<button type="button" name="read-more">Read More</button>
							 </p>
							</a>
							</li>
						</div>
		 	 			<?php endforeach; wp_reset_postdata(); ?>



				</div>
			</div>

			<div class="subscribe">
				<div class="subscribe-content">


						<h3>Sign up to hear from us</h3>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form action="//shantiuganda.us4.list-manage.com/subscribe/post?u=7df0836172416a8e1004ce852&amp;id=4cb86194a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">

					<div class="mc-field-group subscribe-input">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<label for="mce-EMAIL" class="screen-reader-text">Email Address
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your e-mail Address....">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7df0836172416a8e1004ce852_4cb86194a6" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
					</div>

					<!--End mc_embed_signup-->



					<div class="socialMedia-links">
						<a href="https://twitter.com/shantiuganda">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="https://www.facebook.com/shantiuganda">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
						<a href="https://www.youtube.com/user/shantiug">
							<i class="fa fa-youtube-play" aria-hidden="true"></i>
						</a>
						<a href="https://www.instagram.com/shantiuganda/">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</div> <!-- end socialmedia links -->

					<div class="insite-links">

						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">
							Blog
						</a>
							<span> &bull; </span>

	  				<a href="<?php echo get_page_link(577); ?>">
							Press
						</a>
							<span> &bull; </span>

						<a href="<?php echo get_page_link(42); ?>">
							Careers
						</a>
							<span> &bull; </span>

	 					<a href="<?php echo get_page_link(50); ?>">
							Events
						</a>
							<span class="hiddenBullet"> &bull; </span>

						<a href="<?php echo get_page_link(575); ?>">
							Newsletter
						</a>
							<span> &bull; </span>

						<a href="<?php echo get_page_link(4204); ?>">
							Contact Us
						</a>

					</div> <!-- end insite-links -->

				</div> <!-- end subscribe content -->
			</div> <!-- end subscribe -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
