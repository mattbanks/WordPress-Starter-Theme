<?php

// Remove default link for images
function _mbbasetheme_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', '_mbbasetheme_imagelink_setup', 10);


// Remove Query Strings From Static Resources
function _mbbasetheme_remove_script_version($src){
	$parts = explode('?', $src);
	return $parts[0];
}
add_filter('script_loader_src', '_mbbasetheme_remove_script_version', 15, 1);
add_filter('style_loader_src', '_mbbasetheme_remove_script_version', 15, 1);


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

?>
