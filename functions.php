<?php

if ( ! function_exists( '_mbbasetheme_setup' ) ):
function mattbanks_setup() {
	// Custom Template Tags
	require( get_template_directory() . '/inc/template-tags.php' );

	// Custom functions
	// require( get_template_directory() . '/inc/tweaks.php' );

	// Add RSS links to head
	add_theme_support( 'automatic-feed-links' );

	// Enable Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add Post Formats Theme Support
	// add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));

	// Clean up the head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');

	// Register menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mattbanks' ),
	) );
}
endif; // mattbanks_setup
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
	wp_enqueue_style( 'style', get_stylesheet_uri() );
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
	$allWidgetizedAreas = array("Sidebar Widgets", "Footer");
	foreach ($allWidgetizedAreas as $WidgetAreaName) {
		register_sidebar( array(
			'name' => __( $WidgetAreaName, 'mattbanks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		) );
	}
}
add_action( 'widgets_init', '_mbbasetheme_widgets_init' );



?>
