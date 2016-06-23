<?php
/**
 * The template for displaying all Gifts of Action posts.
 *
 * @package Shanti_Uganda_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


		<div class="cart-header container">

			<h4>Your Cart</h4>
			<p>
				Thank you for supporting Shanti Uganda Society. Your generous donation will help pave the road to a bright future for young women.
			</p>
		</div>

		<div class="cart container">
			<div class="image">
				<?php the_post_thumbnail('medium'); ?>
			</div>
			<div class="form-wrapper">
				<h3><?php the_title(); ?></h3>

				<div class="cart-table">

					<div class="price">
						<h4>Price</h4>
						<?php $term_list = wp_get_post_terms($post->ID, 'action_price');?>
						<?php $price = $term_list[0]->name; ?>
						<p><?php echo wp_kses_post( $price ); ?></p>
					</div>

					<div class="qty">
						<h4>Qty</h4>
						<form>
							<input type="number" name="qty" value="1">
						</form>
					</div>

					<div class="line-total">
						<p><?php echo wp_kses_post( $price ); ?></p>
					</div>

				</div>

				<div class="subtotal">
					<h3>Subtotal</h3>
					<h3 class="price"><?php wp_kses_post( $price ); ?></h3>
				</div>

				<button type="button" name="check-out">Check Out</button>
			</div>
		</div>

		<div class="gift-form container">
			<p>
				Shopping for a friend? Each gift includes a photo card highlighting the program your gift supports. You can choose to hand deliver your gift or have it directly to your recipient.
			</p>
			<form class="" action="index.html" method="post">
				<input type="checkbox" name="is-gift" value="is-gift" id="is-gift">
				<label class="checkbox" for="is-gift">Gift of Action</label>

				<!-- The field is hidden on loading, shows when the checkbox is clicked  -->
				<fieldset>
					<label for="from"><span>From:</span>
						<input type="text" name="from" value="" id="from">
					</label>
					<label for="to"><span>To:</span>
						<input type="text" name="to" value="" id="to">
					</label>
					<textarea name="message"></textarea>

				</fieldset>
				<fieldset class="button">
					<button type="submit" name="check-out">Check Out</button>
				</fieldset>
			</form>
		</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
