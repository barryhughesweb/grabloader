<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Sets up theme defaults and registers support for various WordPress features.
// 
//  Note that this function is hooked into the after_setup_theme hook, which
//  runs before the init hook. The init hook is too late for some features, such
//  as indicating support for post thumbnails.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_setup' ) ) :
  
  function hobbes_setup() {
    
    //  Add default posts and comments RSS feed links to head  //
    add_theme_support( 'automatic-feed-links' );
    
    //  Switch core markup for search form, comment form, and comments to output HTML5  //
    add_theme_support( 'html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );
    
    //  Enable support for Post Formats (http://codex.wordpress.org/Post_Formats)  //
    add_theme_support( 'post-formats',
      array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
      )
    );
    
  }
  
endif;

add_action( 'after_setup_theme', 'hobbes_setup' );

//  Finally, we will automatically set the permalink structure  //

function hobbes_update_permalinks() {
  
  if (get_option('permalink_structure') == '') {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%');
    $wp_rewrite->flush_rules();
  }
  
}

add_action( 'after_switch_theme', 'hobbes_update_permalinks' );