<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Filters and fucntions that output wp_nav_menu with clean HTML5 markup
//  Removes redundant containers and classses and renames necessary ones.
//
//  [_1_] Filters
//  [_2_] Function

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Filters  //

//  First, we remove all the classes from wp_nav_menu generated code  //

function hobbes_remove_menu_attributes( $menu ){
  return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu );
}

add_filter( 'wp_nav_menu', 'hobbes_remove_menu_attributes' );


//  Next we list those items that are useful and that we want to keep  //

function hobbes_allow_menu_attributes($var) {
  
  return is_array($var) ? array_intersect($var,
    array(
      // List of allowed menu classes
      'current_page_item',
      'current_page_parent',
      'current_page_ancestor',
      'first',
      'last',
      'vertical',
      'horizontal'
    )
  ) : '';
}
add_filter('nav_menu_css_class', 'hobbes_allow_menu_attributes');
add_filter('nav_menu_item_id', 'hobbes_allow_menu_attributes');
add_filter('page_css_class', 'hobbes_allow_menu_attributes');


////  Then rename the 'current_page' classes to 'active' - much better!  //
//
//function hobbes_current_to_active($text){
//  
//  $replace = array(
//    'current_page_item' => 'active',
//    'current_page_parent' => 'active',
//    'current_page_ancestor' => 'active',
//  );
//  
//  $text = str_replace(array_keys($replace), $replace, $text);
//  return $text;
//}
//
//add_filter ('wp_nav_menu','hobbes_current_to_active');

//  But wait we need to remove the class on the default posts section of the site  //

function is_hobbes_blog() {
	global $post;
	$posttype = get_post_type( $post );
	return ( ( $posttype == 'post' ) && ( is_home() || is_single() || is_archive() || is_category() || is_tag() || is_author() ) ) ? true : false;
}

function hobbes_fix_blog_link_on_cpt( $classes, $item, $args ) {
	if( !is_hobbes_blog() ) {
		$blog_page_id = intval( get_option('page_for_posts') );
		if( $blog_page_id != 0 && $item->object_id == $blog_page_id )
			unset($classes[array_search('current_page_parent', $classes)]);
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'hobbes_fix_blog_link_on_cpt', 10, 3 );

//  Now let's finally add a class to a menu which contains a menu itself - even better!  //

function hobbes_nav_menu_item_parent_classing( $classes, $item ){
  
  global $wpdb;
  $has_children = $wpdb -> get_var( "SELECT COUNT(meta_id) FROM {$wpdb->prefix}postmeta WHERE meta_key='_menu_item_menu_item_parent' AND meta_value='" . $item->ID . "'" );
  
  if ( $has_children > 0 ){
    array_push( $classes, "has-submenu" );
  }
  return $classes;
}

add_filter( "nav_menu_css_class", "hobbes_nav_menu_item_parent_classing", 10, 2 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] Function
//
//  Now we create a function that will set wp_nav_menu defaults as we call it
//  and allow us to choose a class for the container <nav>

if ( ! function_exists( 'hobbes_clean_nav' ) ) :

function hobbes_clean_nav($nav_location, $nav_class) {
  
  $hobbes_nav_defaults = array(
    'theme_location' => $nav_location,
    'container' => 'nav',
    'container_class' => $nav_class,
    'container_id' => '',
  );
  
  wp_nav_menu( $hobbes_nav_defaults );
  
}

endif;