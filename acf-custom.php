<?php
#https://generatewp.com/generator/
#http://tgmpluginactivation.com/


// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'materialize-css' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'materialize-css' ),
		'menu_name'             => __( 'Project', 'materialize-css' ),
		'name_admin_bar'        => __( 'Project', 'materialize-css' ),
		'archives'              => __( 'Item Archives', 'materialize-css' ),
		'attributes'            => __( 'Item Attributes', 'materialize-css' ),
		'parent_item_colon'     => __( 'Parent Item:', 'materialize-css' ),
		'all_items'             => __( 'All Items', 'materialize-css' ),
		'add_new_item'          => __( 'Add New Item', 'materialize-css' ),
		'add_new'               => __( 'Add New', 'materialize-css' ),
		'new_item'              => __( 'New Item', 'materialize-css' ),
		'edit_item'             => __( 'Edit Item', 'materialize-css' ),
		'update_item'           => __( 'Update Item', 'materialize-css' ),
		'view_item'             => __( 'View Item', 'materialize-css' ),
		'view_items'            => __( 'View Items', 'materialize-css' ),
		'search_items'          => __( 'Search Item', 'materialize-css' ),
		'not_found'             => __( 'Not found', 'materialize-css' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'materialize-css' ),
		'featured_image'        => __( 'Featured Image', 'materialize-css' ),
		'set_featured_image'    => __( 'Set featured image', 'materialize-css' ),
		'remove_featured_image' => __( 'Remove featured image', 'materialize-css' ),
		'use_featured_image'    => __( 'Use as featured image', 'materialize-css' ),
		'insert_into_item'      => __( 'Insert into item', 'materialize-css' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'materialize-css' ),
		'items_list'            => __( 'Items list', 'materialize-css' ),
		'items_list_navigation' => __( 'Items list navigation', 'materialize-css' ),
		'filter_items_list'     => __( 'Filter items list', 'materialize-css' ),
	);
	$rewrite = array(
		'slug'                  => 'projetos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Project', 'materialize-css' ),
		'description'           => __( 'Projetos que acontecem dentro do lar assistencial matilde', 'materialize-css' ),
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
	register_post_type( 'projects', $args );

}
add_action( 'init', 'project_post_type', 0 );

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
