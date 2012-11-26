<?php

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
