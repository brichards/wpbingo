<?php

function wpbingo_category_init() {
	register_taxonomy( 'wpbingo-category', array( 'wpbingo' ), array(
		'hierarchical'      => true,
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Square Categories', 'wpbingo' ),
			'singular_name'              => _x( 'Square Category', 'taxonomy general name', 'wpbingo' ),
			'search_items'               => __( 'Search Square Categories', 'wpbingo' ),
			'popular_items'              => __( 'Popular Square Categories', 'wpbingo' ),
			'all_items'                  => __( 'All Square Categories', 'wpbingo' ),
			'parent_item'                => __( 'Parent Square Category', 'wpbingo' ),
			'parent_item_colon'          => __( 'Parent Square Category:', 'wpbingo' ),
			'edit_item'                  => __( 'Edit Square Category', 'wpbingo' ),
			'update_item'                => __( 'Update Square Category', 'wpbingo' ),
			'add_new_item'               => __( 'New Square Category', 'wpbingo' ),
			'new_item_name'              => __( 'New Square Category', 'wpbingo' ),
			'separate_items_with_commas' => __( 'Separate Square Categories with commas', 'wpbingo' ),
			'add_or_remove_items'        => __( 'Add or remove Square Categories', 'wpbingo' ),
			'choose_from_most_used'      => __( 'Choose from the most used Square Categories', 'wpbingo' ),
			'not_found'                  => __( 'No Square Categories found.', 'wpbingo' ),
			'menu_name'                  => __( 'Square Categories', 'wpbingo' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'wpbingo-category',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'wpbingo_category_init' );
