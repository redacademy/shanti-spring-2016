<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Team Role for Team Member custom post type
function shanti_team_role_taxonomy() {

	$labels = array(
		'name'                       => 'Team Roles',
		'singular_name'              => 'Team Role',
		'menu_name'                  => 'Team Role',
		'all_items'                  => 'All Team Roles',
		'parent_item'                => 'Parent Team Role',
		'parent_item_colon'          => 'Parent Team Role:',
		'new_item_name'              => 'New Team Role Name',
		'add_new_item'               => 'Add New Team Role',
		'edit_item'                  => 'Edit Team Role',
		'update_item'                => 'Update Team Role',
		'view_item'                  => 'View Team Role',
		'separate_items_with_commas' => 'Separate team roles with commas',
		'add_or_remove_items'        => 'Add or remove team roles',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Team Roles',
		'search_items'               => 'Search Team Roles',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No team roles',
		'items_list'                 => 'Team Roles list',
		'items_list_navigation'      => 'Team Roles list navigation',
	);
	$rewrite = array(
		'slug'									=> 'team',
		'with_front'						=> true,
		'pages'									=> true,
		'feeds'									=> true
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'										 => $rewrite
	);
	register_taxonomy( 'team_role', array( 'team_member' ), $args );

}
add_action( 'init', 'shanti_team_role_taxonomy', 0 );

// Register Custom Taxonomy
// Register Action Type for gift of action custom post type
function shanti_action_type_taxonomy() {

	$labels = array(
		'name'                       => 'Action Types',
		'singular_name'              => 'Action Type',
		'menu_name'                  => 'Action Type',
		'all_items'                  => 'All Action Types',
		'parent_item'                => 'Parent Action Type',
		'parent_item_colon'          => 'Parent Action Type:',
		'new_item_name'              => 'New Action Type Name',
		'add_new_item'               => 'Add New Action Type',
		'edit_item'                  => 'Edit Action Type',
		'update_item'                => 'Update Action Type',
		'view_item'                  => 'View Action Type',
		'separate_items_with_commas' => 'Separate action type with commas',
		'add_or_remove_items'        => 'Add or remove action type',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Action Types',
		'search_items'               => 'Search Action Type',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No action types',
		'items_list'                 => 'Action Types list',
		'items_list_navigation'      => 'Action Types list navigation',
	);
	$rewrite = array(
		'slug'									=> 'collection',
		'with_front'						=> true,
		'pages'									=> true,
		'feeds'									=> true
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'										 => $rewrite
	);
	register_taxonomy( 'action_types', array( 'gifts_of_action' ), $args );

}
add_action( 'init', 'shanti_action_type_taxonomy', 0 );

// Register Action Price Taxonomy
function shanti_action_price_taxonomy() {

	$labels = array(
		'name'                       => 'Action Prices',
		'singular_name'              => 'Action Price',
		'menu_name'                  => 'Action Price',
		'all_items'                  => 'All Action Prices',
		'parent_item'                => 'Parent Action Price',
		'parent_item_colon'          => 'Parent Action Price:',
		'new_item_name'              => 'New Action Price Name',
		'add_new_item'               => 'Add New Action Price',
		'edit_item'                  => 'Edit Action Price',
		'update_item'                => 'Update Action Price',
		'view_item'                  => 'View Action Price',
		'separate_items_with_commas' => 'Separate action price with commas',
		'add_or_remove_items'        => 'Add or remove action prices',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Action Prices',
		'search_items'               => 'Search Action Prices',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No action prices',
		'items_list'                 => 'Action Prices list',
		'items_list_navigation'      => 'Action Prices list navigation',
	);
	$rewrite = array(
		'slug'									=> 'gifts',
		'with_front'						=> true,
		'pages'									=> true,
		'feeds'									=> true
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'rewrite'										 => $rewrite
	);
	register_taxonomy( 'action_price', array( 'gifts_of_action' ), $args );

}
add_action( 'init', 'shanti_action_price_taxonomy', 0 );
