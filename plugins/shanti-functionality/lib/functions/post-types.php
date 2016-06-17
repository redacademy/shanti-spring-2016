<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type

// Our Team

function shanti_team_roster() {

	$labels = array(
		'name'                  => 'Our Team',
		'singular_name'         => 'Our Team',
		'menu_name'             => 'Our Team',
		'name_admin_bar'        => 'Our Team',
		'archives'              => 'Our Team Archives',
		'parent_item_colon'     => 'Parent Team Member:',
		'all_items'             => 'All Team Members',
		'add_new_item'          => 'Add New Team Member',
		'add_new'               => 'Add New',
		'new_item'              => 'New Team Member',
		'edit_item'             => 'Edit Team Member',
		'update_item'           => 'Update Team Member',
		'view_item'             => 'View Team Member',
		'search_items'          => 'Search Our Team',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Team Member',
		'uploaded_to_this_item' => 'Uploaded to this Team Member',
		'items_list'            => 'Team Members list',
		'items_list_navigation' => 'Team Members list navigation',
		'filter_items_list'     => 'Filter Team Members list',
	);
	$rewrite = array(
		'slug'									=> 'our-team',
		'with_front'						=> true,
		'pages'									=> true,
		'feeds'									=> true
	);
	$args = array(
		'label'                 => 'Our Team',
		'description'           => 'Shanti Team members',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'team_role' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'our-team',
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'								=> $rewrite
	);
	register_post_type( 'team_member', $args );

}
add_action( 'init', 'shanti_team_roster', 0 );

// Events

// Register Custom Post Type
function shanti_events() {

	$labels = array(
		'name'                  => 'Events',
		'singular_name'         => 'Event',
		'menu_name'             => 'Events',
		'name_admin_bar'        => 'Event',
		'archives'              => 'Event Archives',
		'parent_item_colon'     => 'Parent Event:',
		'all_items'             => 'All Events',
		'add_new_item'          => 'Add New Event',
		'add_new'               => 'Add New',
		'new_item'              => 'New Event',
		'edit_item'             => 'Edit Event',
		'update_item'           => 'Update Event',
		'view_item'             => 'View Event',
		'search_items'          => 'Search Event',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into event',
		'uploaded_to_this_item' => 'Uploaded to this event',
		'items_list'            => 'Events list',
		'items_list_navigation' => 'Events list navigation',
		'filter_items_list'     => 'Filter events list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Events organized by Shanti Uganda',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'events',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'shanti_events', 0 );

// Gifts of Action

// Register Custom Post Type
function shanti_gifts_of_action() {

	$labels = array(
		'name'                  => 'Gifts of Action',
		'singular_name'         => 'Gift of Action',
		'menu_name'             => 'Gifts of Action',
		'name_admin_bar'        => 'Gifts of Action',
		'archives'              => 'Gifts of Action Archives',
		'parent_item_colon'     => 'Parent Gift of Action:',
		'all_items'             => 'All Gifts of Action',
		'add_new_item'          => 'Add New Gift of Action',
		'add_new'               => 'Add New',
		'new_item'              => 'New Gift of Action',
		'edit_item'             => 'Edit Gift of Action',
		'update_item'           => 'Update Gift of Action',
		'view_item'             => 'View Gift of Action',
		'search_items'          => 'Search Gift of Action',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Gift of Action',
		'uploaded_to_this_item' => 'Uploaded to this Gift of Action',
		'items_list'            => 'Gifts of Action list',
		'items_list_navigation' => 'Gifts of Action list navigation',
		'filter_items_list'     => 'Filter Gifts of Action list',
	);
	$args = array(
		'label'                 => 'Gift of Action',
		'description'           => 'These are the potential gifts of action for potential supporters of Shanti',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'gifts-of-action',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gifts_of_action', $args );

}
add_action( 'init', 'shanti_gifts_of_action', 0 );
