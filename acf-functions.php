<?php
#https://generatewp.com/generator/
#http://tgmpluginactivation.com/


// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Project', 'lam_theme' ),
		'name_admin_bar'        => __( 'Project', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$rewrite = array(
		'slug'                  => 'projetos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Project', 'lam_theme' ),
		'description'           => __( 'Projetos que acontecem dentro do lar assistencial matilde', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'project_lam', $args );

}
add_action( 'init', 'project_post_type', 0 );

// Register Custom Post Type
/**
function rifa_post_type() {

	$labels = array(
		'name'                  => _x( 'Rifas', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Rifa', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Rifas', 'lam_theme' ),
		'name_admin_bar'        => __( 'Rifas', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$args = array(
		'label'                 => __( 'Rifa', 'lam_theme' ),
		'description'           => __( 'Rifas realizadas', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-table-col-after',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'rifa', $args );

}
add_action( 'init', 'rifa_post_type', 0 );
*/

// Register Custom Post Type
/**
function kit_post_type() {

	$labels = array(
		'name'                  => _x( 'Kits', 'Post Type General Name', 'lam_theme' ),
		'singular_name'         => _x( 'Kit', 'Post Type Singular Name', 'lam_theme' ),
		'menu_name'             => __( 'Kits', 'lam_theme' ),
		'name_admin_bar'        => __( 'Kits', 'lam_theme' ),
		'archives'              => __( 'Item Archives', 'lam_theme' ),
		'attributes'            => __( 'Item Attributes', 'lam_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lam_theme' ),
		'all_items'             => __( 'All Items', 'lam_theme' ),
		'add_new_item'          => __( 'Add New Item', 'lam_theme' ),
		'add_new'               => __( 'Add New', 'lam_theme' ),
		'new_item'              => __( 'New Item', 'lam_theme' ),
		'edit_item'             => __( 'Edit Item', 'lam_theme' ),
		'update_item'           => __( 'Update Item', 'lam_theme' ),
		'view_item'             => __( 'View Item', 'lam_theme' ),
		'view_items'            => __( 'View Items', 'lam_theme' ),
		'search_items'          => __( 'Search Item', 'lam_theme' ),
		'not_found'             => __( 'Not found', 'lam_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lam_theme' ),
		'featured_image'        => __( 'Featured Image', 'lam_theme' ),
		'set_featured_image'    => __( 'Set featured image', 'lam_theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lam_theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'lam_theme' ),
		'insert_into_item'      => __( 'Insert into item', 'lam_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lam_theme' ),
		'items_list'            => __( 'Items list', 'lam_theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'lam_theme' ),
		'filter_items_list'     => __( 'Filter items list', 'lam_theme' ),
	);
	$args = array(
		'label'                 => __( 'Kit', 'lam_theme' ),
		'description'           => __( 'Kits necessários para projetos', 'lam_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-admin-customizer',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'kit_type', $args );

}
add_action( 'init', 'kit_post_type', 0 );
*/



// Register TGMPA
#require_once(get_template_directory() . '/includes/tgmpa/tgmpa-configuration.php');

// ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
