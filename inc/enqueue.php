<?php

// Enqueue scripts and styles
function _mbbasetheme_scripts() {
	// CSS first
	wp_register_style('_mbbasetheme_style', get_stylesheet_directory_uri().'/style.css', null, '1.0', 'all' );
	wp_enqueue_style( '_mbbasetheme_style' );
	// JavaScript
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', false, NULL );
		wp_enqueue_script('customplugins', get_template_directory_uri() . '/js/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script('customscripts', get_template_directory_uri() . '/js/main.min.js', array('jquery'), NULL, true );
	}
}
add_action( 'wp_enqueue_scripts', '_mbbasetheme_scripts' );

?>
