<?php
/**
 * The template for displaying the footer.
 *
 * @package Shanti_Uganda_Theme
 */

?>

		</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer_recent-posts">
				<div class="footer_recent-posts_content">
				recent post loop goes here
				</div>
			</div>
			<div class="footer_subscribe">
				<div class="footer_subscribe_content">
					<h2>
						Sign up to hear from us!
					</h2>
					<form>
	     			<input type="text" required></input>
	     			<button type="submit">Subscribe</button>
					</form>
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
