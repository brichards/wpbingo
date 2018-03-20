<?php

function wpbingo_card_init() {
	register_taxonomy( 'wpbingo-card', array( 'wpbingo' ), array(
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
			'name'                       => __( 'Bingo Cards', 'wpbingo' ),
			'singular_name'              => _x( 'Bingo Card', 'taxonomy general name', 'wpbingo' ),
			'search_items'               => __( 'Search Bingo Cards', 'wpbingo' ),
			'popular_items'              => __( 'Popular Bingo Cards', 'wpbingo' ),
			'all_items'                  => __( 'All Bingo Cards', 'wpbingo' ),
			'parent_item'                => __( 'Parent Bingo Card', 'wpbingo' ),
			'parent_item_colon'          => __( 'Parent Bingo Card:', 'wpbingo' ),
			'edit_item'                  => __( 'Edit Bingo Card', 'wpbingo' ),
			'update_item'                => __( 'Update Bingo Card', 'wpbingo' ),
			'add_new_item'               => __( 'New Bingo Card', 'wpbingo' ),
			'new_item_name'              => __( 'New Bingo Card', 'wpbingo' ),
			'separate_items_with_commas' => __( 'Separate Bingo Cards with commas', 'wpbingo' ),
			'add_or_remove_items'        => __( 'Add or remove Bingo Cards', 'wpbingo' ),
			'choose_from_most_used'      => __( 'Choose from the most used Bingo Cards', 'wpbingo' ),
			'not_found'                  => __( 'No Bingo Cards found.', 'wpbingo' ),
			'menu_name'                  => __( 'Bingo Cards', 'wpbingo' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'wpbingo-card',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'wpbingo_card_init' );
