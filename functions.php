<?php

/////////////// Add "Home Page" option to menu system /////////////////////////
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

///////////////  Default Header Image Replacement  //////////////////////////////

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

///////////////  Post Limit Override  /////////////////////////////

// Function to override the set value of Post Limit in Wordpress
function ursa_post_override ( $query ) {
	if ( is_author() ) {
		//Display ALL posts for author pages
		$query->set( 'posts_per_page', -1 );
		return;
	}
}
add_action( 'pre_get_posts', 'ursa_post_override', 1);

/////////////// Remove Showcase Sidebar Option ////////////////////
function ursa_disable_showcase() {
	//Unregister sidebar-2 (Showcase Sidebar) -- declared in functions.php of /twentyeleven
	unregister_sidebar( 'sidebar-2' );
}
add_action( 'widgets_init', 'ursa_disable_showcase', 11);


//End of file
?>