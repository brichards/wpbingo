<?php

function wpbingo_init() {
	register_post_type( 'wpbingo', array(
		'labels'            => array(
			'name'                => __( 'Bingo Squares', 'wpbingo' ),
			'singular_name'       => __( 'Bingo Square', 'wpbingo' ),
			'all_items'           => __( 'All Bingo Squares', 'wpbingo' ),
			'new_item'            => __( 'New Bingo Square', 'wpbingo' ),
			'add_new'             => __( 'Add New', 'wpbingo' ),
			'add_new_item'        => __( 'Add New Bingo Square', 'wpbingo' ),
			'edit_item'           => __( 'Edit Bingo Square', 'wpbingo' ),
			'view_item'           => __( 'View Bingo Square', 'wpbingo' ),
			'search_items'        => __( 'Search Bingo Squares', 'wpbingo' ),
			'not_found'           => __( 'No Bingo Squares found', 'wpbingo' ),
			'not_found_in_trash'  => __( 'No Bingo Squares found in trash', 'wpbingo' ),
			'parent_item_colon'   => __( 'Parent Bingo Square', 'wpbingo' ),
			'menu_name'           => __( 'Bingo Squares', 'wpbingo' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => false,
		'supports'          => array( 'title' ),
		'has_archive'       => false,
		'rewrite'           => false,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-grid-view',
		'show_in_rest'      => true,
		'rest_base'         => 'wpbingo',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'wpbingo_init' );

function wpbingo_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['wpbingo'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Bingo Square updated. <a target="_blank" href="%s">View Bingo Square</a>', 'wpbingo'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'wpbingo'),
		3 => __('Custom field deleted.', 'wpbingo'),
		4 => __('Bingo Square updated.', 'wpbingo'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Bingo Square restored to revision from %s', 'wpbingo'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Bingo Square published. <a href="%s">View Bingo Square</a>', 'wpbingo'), esc_url( $permalink ) ),
		7 => __('Bingo Square saved.', 'wpbingo'),
		8 => sprintf( __('Bingo Square submitted. <a target="_blank" href="%s">Preview Bingo Square</a>', 'wpbingo'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Bingo Square scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Bingo Square</a>', 'wpbingo'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Bingo Square draft updated. <a target="_blank" href="%s">Preview Bingo Square</a>', 'wpbingo'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'wpbingo_updated_messages' );
