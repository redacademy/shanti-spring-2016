<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Shanti_Uganda_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function shanti_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'shanti_body_classes' );

function shanti_featured_image_header() {


		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		$thumb_url = $thumb_url_array[0];

	$custom_css = ".entry-header.hero {
			background: url('$thumb_url') no-repeat center center;
			background-size: cover;
	}";

	wp_add_inline_style('shanti-style', $custom_css);
}
add_action( 'wp_enqueue_scripts', 'shanti_featured_image_header' );

function shanti_featured_color_css() {

	if(!is_page_template('parentpage.php')) {
		return;
	}
	$color = CFS()->get('color');
	$custom_css = ".feature-color { background: $color;}";

	wp_add_inline_style('shanti-style', $custom_css);

}

add_action( 'wp_enqueue_scripts', 'shanti_featured_color_css' );

// add a search field to the navigation menu
add_filter( 'wp_nav_menu_items', 'shanti_add_search_form_to_nav');

function shanti_add_search_form_to_nav($items) {

  return $items . '<li class="nav-search">' . get_search_form(false) . '</li>';
}

function shanti_add_team_members_to_tax_archive( $query ) {
	if ( is_tax( 'team_role' ) && !is_admin() && $query->is_main_query() ) {
			$query->set( 'post_type', array( 'team_member' ) );
			$query->set( 'order', 'ASC' );
			$query->set( 'posts_per_page', -1);
	}
}
add_action( 'pre_get_posts', 'shanti_add_team_members_to_tax_archive' );
