<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	
	// Enable Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	
	
	// Add Post Formats Theme Support
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));
	
	
	// Remove default link for images
	$image_set = get_option( 'image_default_link_type' );
    if (!$image_set == 'none') {
        update_option('image_default_link_type', 'none');
    }
	
	
	// Remove Read More Jump
	function remove_more_jump_link($link) { 
		$offset = strpos($link, '#more-');
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}
		return $link;
	}
	add_filter('the_content_more_link', 'remove_more_jump_link');

	
	// Fix rel="category tag" validation error (remove when fixed in WordPress Core)
	add_filter( 'the_category', 'add_nofollow_cat' ); 
	function add_nofollow_cat( $text ) {
		$text = str_replace('rel="category tag"', "", $text); return $text;
	}	
	
	
	// Enqueue comment reply script
	if ( ! function_exists( '_mbbasetheme_comment_reply' ) ) {
		function kernelmedia_comment_reply() {
			if ( is_singular() ) wp_enqueue_script( 'comment-reply', '', false, NULL );
		}
	}
	add_action( 'get_header', '_mbbasetheme_comment_reply', 10 );
	
	
	// Load JavaScript
	if ( !is_admin() ) add_action( "wp_enqueue_scripts", "_mbbasetheme_js_enqueue", 11 );
	function _mbbasetheme_js_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr', get_bloginfo('template_directory').'/js/libs/modernizr-2.0.6.min.js', false, NULL );
		wp_enqueue_script('customplugins', get_bloginfo('template_directory').'/js/plugins.js', array('jquery'), NULL, true );
		wp_enqueue_script('customscripts', get_bloginfo('template_directory').'/js/script.js', array('jquery'), NULL, true );
	}
	
	
	// Remove query strings from all JavaScript files
	function _remove_script_version( $src ){
		$parts = explode( '?', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	
	
	// Clean up the <head>
	remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');

    
    // Register Sidebar Widgets
    if (function_exists('register_sidebar')) {
    	$allWidgetizedAreas = array("Sidebar Widgets", "Footer");
		foreach ($allWidgetizedAreas as $WidgetAreaName) {
	    	register_sidebar(array(
				'name' => $WidgetAreaName,
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h4 class="widgettitle">',
				'after_title' => '</h4>',
	    	));	
	    }
    }
	
	
	// Register Menus
	function register_my_menus() {
		register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );
	
	
?>