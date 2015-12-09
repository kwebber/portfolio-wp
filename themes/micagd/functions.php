<?php 
// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails
add_image_size( 'big-thumb', 500, 500, true );

// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	'social' => __( 'Social Navigation', 'wpfme' ),
	'dept' => __( 'Department Navigation', 'wpfme'),
) );

?>