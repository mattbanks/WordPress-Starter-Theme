<?php

if ( ! function_exists( '_mbbasetheme_setup' ) ):
function _mbbasetheme_setup() {
	// Add RSS links to head
	add_theme_support( 'automatic-feed-links' );

	// Enable Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Enable Custom Headers
	// add_theme_support( 'custom-header' );

	// Enable Custom Backgrounds
	// add_theme_support( 'custom-background' );

	// Add Editor Style
	// add_editor_style( editor-style.css );

	// Set Content Width
	if ( ! isset( $content_width ) ) $content_width = 900;

	// Add Post Formats Theme Support
	// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));

	// Clean up the head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');

	// Register menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mbbasetheme' ),
	) );
}
endif; // _mbbasetheme_setup
add_action('after_setup_theme', '_mbbasetheme_setup');


// Remove default link for images
function _mbbasetheme_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', '_mbbasetheme_imagelink_setup', 10);


// Remove Read More Jump
function _mbbasetheme_remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', '_mbbasetheme_remove_more_jump_link');


// Show Kitchen Sink in WYSIWYG Editor
function _mbbasetheme_unhide_kitchensink($args) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}
add_filter( 'tiny_mce_before_init', '_mbbasetheme_unhide_kitchensink' );


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


// Register Sidebar Widgets
function _mbbasetheme_widgets_init() {
	// Main Sidebar
	register_sidebar(array(
		'name'          => __( 'Main Sidebar' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets for Main Sidebar.' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	// Footer
	register_sidebar(array(
		'name'          => __( 'Footer' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Widgets for Footer.' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}
add_action( 'widgets_init', '_mbbasetheme_widgets_init' );


?>
