<?php

/****************************************
Backend Functions
*****************************************/

/**
 * Customize Contact Methods
 * @since 1.0.0
 *
 * @author Bill Erickson
 * @link http://sillybean.net/2010/01/creating-a-user-directory-part-1-changing-user-contact-fields/
 *
 * @param array $contactmethods
 * @return array
 */
function mb_contactmethods( $contactmethods ) {
	unset( $contactmethods['aim'] );
	unset( $contactmethods['yim'] );
	unset( $contactmethods['jabber'] );

	return $contactmethods;
}

/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar(array(
		'name'          => __( 'Main Sidebar', 'mb' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets for Main Sidebar.', 'mb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	// Footer
	register_sidebar(array(
		'name'          => __( 'Footer', 'mb' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Widgets for Footer.', 'mb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

/**
 * Don't Update Theme
 * @since 1.0.0
 *
 * If there is a theme in the repo with the same name,
 * this prevents WP from prompting an update.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function mb_dont_update_theme( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page('link-manager.php');
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink($args) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

/****************************************
Frontend
*****************************************/

/**
 * Enqueue scripts
 */
function mb_scripts() {
	// CSS first
	wp_register_style('mb_style', get_stylesheet_directory_uri().'/style.css', null, '1.0', 'all' );
	wp_enqueue_style( 'mb_style' );
	// JavaScript
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, NULL );
		wp_enqueue_script('customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script('customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );
	}
}

/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version($src){
	$parts = explode('?', $src);
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
