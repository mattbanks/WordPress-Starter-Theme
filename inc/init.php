<?php

if ( ! function_exists( '_mbbasetheme_setup' ) ):
function _mbbasetheme_setup() {
	// Add RSS links to head
	add_theme_support( 'automatic-feed-links' );

	// Enable Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add Image Sizes
	// add_image_size( $name, $width = 0, $height = 0, $crop = false );

	// Enable Custom Headers
	// add_theme_support( 'custom-header' );

	// Enable Custom Backgrounds
	// add_theme_support( 'custom-background' );

	// Add Editor Style
	add_editor_style( 'editor-style.css' );

	// Set Content Width
	if ( ! isset( $content_width ) ) $content_width = 900;

	// Add Post Formats Theme Support
	// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video') );

	// Clean up the head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'wp_shortlink_wp_head');

	// Register menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mbbasetheme' ),
	) );
}
endif; // _mbbasetheme_setup
add_action('after_setup_theme', '_mbbasetheme_setup');

?>
