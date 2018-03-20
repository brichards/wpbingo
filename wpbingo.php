<?php
/**
 * Plugin Name:     WPBingo
 * Plugin URI:      https://WPBingo.com
 * Description:     Adds support for randomly-generated bingo cards.
 * Author:          WPSessions
 * Author URI:      https://WPSessions.com
 * Text Domain:     wpbingo
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wpbingo
 */

// register CPT
require_once plugin_dir_path( __FILE__ ) . '/post-types/wpbingo.php';
require_once plugin_dir_path( __FILE__ ) . '/taxonomies/wpbingo-card.php';
require_once plugin_dir_path( __FILE__ ) . '/taxonomies/wpbingo-category.php';

// allow random ordering in REST endpoint
function wpbingo_rest_allow_rand_orderby( $params ) {
	$params['orderby']['enum'][] = 'rand';
	return $params;
}
add_filter( 'rest_wpbingo_collection_params', 'wpbingo_rest_allow_rand_orderby', 10, 1 );

function wpbingo_rest_modify_fields( $data, $post, $context ) {
	return [
		'label' => $data->data['title']['rendered'],
		'found' => 0,
	];
}
add_filter( 'rest_prepare_wpbingo', 'wpbingo_rest_modify_fields', 12, 3 );
