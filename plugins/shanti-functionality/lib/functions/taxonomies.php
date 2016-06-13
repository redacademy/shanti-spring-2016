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
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'team_role', array( 'team_member' ), $args );

}
add_action( 'init', 'shanti_team_role_taxonomy', 0 );
