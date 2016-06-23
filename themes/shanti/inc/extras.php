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

	if( !has_post_thumbnail()) {
		$thumb_url = get_template_directory_uri() . '/images/home-header.jpg';
	} else {
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		$thumb_url = $thumb_url_array[0];
	}

	if( is_page_template('parentpage.php') ) {

		$custom_css = ".entry-header.hero {
				background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
				url('$thumb_url') no-repeat center center;
				background-size: cover;
				filter: grayscale(1);
		}";

	} else {
		$custom_css = ".entry-header.hero {
				background: url('$thumb_url') no-repeat center center;
				background-size: cover;
		}";
	}


	wp_add_inline_style('shanti-style', $custom_css);
}
add_action( 'wp_enqueue_scripts', 'shanti_featured_image_header' );

function shanti_taxonomy_archive_header() {

	if(!is_tax('action_types') && !is_tax('action_price') && !is_tax('team_role')) {
		return;
	}

	$term_id = get_queried_object_id();
	$image_id = get_term_meta($term_id, 'image', true);
	$image_data = wp_get_attachment_image_src( $image_id, 'full');
	$image = $image_data[0];

	if ( !empty($image) ) {
		$custom_css = ".tax-header { background: url('$image') no-repeat center center; background-size: cover;
		height: 100vh; width: 100%;}";
	}

	wp_add_inline_style('shanti-style', $custom_css);
}

add_action ( 'wp_enqueue_scripts', 'shanti_taxonomy_archive_header' );


// add the custom coloured block to just below the header
function shanti_featured_color_css() {

	if(!is_page_template('parentpage.php') && !is_page()) {
		return;
	}
	$color = CFS()->get('color');
	$text_color = CFS()->get('text_color');
	$custom_css = ".feature-color { background: $color; color: $text_color;}
									.feature-color h2 {color: $text_color;}";

	wp_add_inline_style('shanti-style', $custom_css);

}

add_action( 'wp_enqueue_scripts', 'shanti_featured_color_css' );

// add a search field to the navigation menu
add_filter( 'wp_nav_menu_items', 'shanti_add_search_form_to_nav');

function shanti_add_search_form_to_nav($items) {

  return $items . '<li class="nav-search">' . get_search_form(false) . '</li>';
}

// Fix the team members archive that isn't showing the posts

function shanti_add_team_members_to_tax_archive( $query ) {
	if ( is_tax( 'team_role' ) && !is_admin() && $query->is_main_query() ) {
			$query->set( 'post_type', array( 'team_member' ) );
			$query->set( 'order', 'ASC' );
			$query->set( 'posts_per_page', -1);
	}
}
add_action( 'pre_get_posts', 'shanti_add_team_members_to_tax_archive' );

// Sort the gifts of action by price

function shanti_sort_gift_action_by_price( $query ) {
	if ( is_tax('action_types') && !is_admin() &&  $query->is_main_query() ) {

		$query->set( 'order', 'ASC');
	}
}

add_action( 'pre_get_posts', "shanti_sort_gift_action_by_price");

// Change how the action type taxonomy archive titles display

function shanti_filter_action_archive_titles() {
	if (!is_tax('action_types') && !is_tax('action_price')) {
		return;
	}

	if(	is_tax('action_types', 'knowledge') ) {
		return 'Gifts of Knowledge';
	} elseif ( is_tax('action_types', 'community') ) {
		return 'Gifts of Community';
	} elseif (is_tax('action_types', 'empowerment')) {
		return 'Gifts of Empowerment';
	} elseif (is_tax('action_types', 'family')) {
		return 'Gifts of Family';
	} elseif (is_tax('action_price')) {
		return 'Gifts of Action';
	}
}

add_filter( 'get_the_archive_title', 'shanti_filter_action_archive_titles');
