<?php

// Add "Home Page" option to menu system in WP 3+
function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


// Filter classes from WP theme to allow sidebar on posts page
add_filter('body_class', 'blacklist_body_class', 20, 2);
function blacklist_body_class($wp_classes, $extra_classes) {
if( is_single() || is_page() ) :
// List of the classes to remove from the WP generated classes
$blacklist = array('singular');
// Filter the body classes
  foreach( $blacklist as $val ) {
    if (!in_array($val, $wp_classes)) : continue;
    else:
      foreach($wp_classes as $key => $value) {
      if ($value == $val) unset($wp_classes[$key]);
      }
    endif;
  }
endif;   // Add the extra classes back untouched
return array_merge($wp_classes, (array) $extra_classes);
}

//deregister the header images of Twenty Eleven, and register a new header image
add_action( 'after_setup_theme', 'raw_theme_header_images', 11 ); 

function raw_theme_header_images() {
unregister_default_headers( array( 'wheel', 'shore', 'trolley', 'pine-cone', 'chessboard', 'lanterns', 'willow', 'hanoi' ) ); 
$folder = get_stylesheet_directory_uri();
	register_default_headers( array(
	    'staytuned' => array(
	        'url' => $folder.'/images/staytuned.jpg',
	        'thumbnail_url' => $folder.'/images/staytuned-thumb.jpg',
	        /* translators: header image description */
	        'description' => __( 'Stay Tuned', 'twentyeleven' )
	    ),
	    'standby' => array(
	        'url' => $folder.'/images/standby.jpg',
	        'thumbnail_url' => $folder.'/images/standby-thumb.jpg',
	        /* translators: header image description */
	        'description' => __( 'Please Stand By', 'twentyeleven' )
	    )
	));

$custom_header_changes = array(
	'random-default' => false,
	);
add_theme_support( 'custom-header', $custom_header_changes );
}


?>