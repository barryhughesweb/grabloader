<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Equeues theme scripts and stylesheets to wp_head.
//
//  NB. Because our theme does not use the default 'styles.css' file, our
//  global stylesheet (/build/css/global.css) must be enqueued here.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function enqueue_hobbes_files() {
  //  Register jQuery from Google Libraries, not locally
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false);
  
  //  Register Global files  //
  wp_register_style( 'add-global-styles', get_template_directory_uri() . '/build/css/global.css','','', 'all' );
  wp_register_script( 'add-global-scripts', get_template_directory_uri() . '/build/js/global.min.js', '', null,''  );
  
  // Make any CSS changes via the shame file if you do not know SASS //
  wp_register_style( 'add-edited-styles', get_template_directory_uri() . '/build/css/shame.css','','', 'all' );
  
  //  Register Browser Files  //
  wp_register_style( 'add-outdatedbrowser-styles', get_template_directory_uri() . '/build/browser/outdatedbrowser.min.css','','', 'all' );
  
  //  Enqueue BX Slider Scripts //
  wp_register_script( 'add-bxslider', get_template_directory_uri() . '/build/js/bxslider.min.js', '', null,''  );
  
  //  Register Owl Script  //
  wp_register_style( 'add-owl-styles', get_template_directory_uri() . '/build/css/owl.css','','', 'all' );
  wp_register_script( 'add-owl-script', get_template_directory_uri() . '/build/js/owl.min.js', '', null,''  );
  
  //  Enqueue Global Styles  //
  wp_enqueue_style( 'add-global-styles' );
  
  //  Enqueue Shame Styles  //
  wp_enqueue_style( 'add-edited-styles' );
  
  //  Enqueue Browser Update Files  //
  wp_enqueue_style( 'add-outdatedbrowser-styles' );
  
  //  Enqueue Global Scripts  //
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'add-global-scripts' );
  
  //  Enqueue Front Page Specific Scripts  //
  if ( is_front_page() ) {
    wp_enqueue_style( 'add-owl-styles' );
    wp_enqueue_script( 'add-owl-script' );
  }
  
  //  Enqueue BX Slider Scripts  //
  if ( is_front_page() || is_singular('services') || is_singular('areas') || is_singular('premises') ) {
    wp_enqueue_script( 'add-bxslider' );
  }
  
}
add_action( 'wp_enqueue_scripts', 'enqueue_hobbes_files' );

function my_login_stylesheet() {
  
  //  Register log in page styles file  //
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/build/css/login.css','', null,'' );
  
  //  Enqueue Global Styles  //
  wp_enqueue_style( 'custom-login' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Scripts used for adding support for older browers should not be enqueued
//  as normal. Instead they are added to wp_head below.


function enqueue_hobbes_fallback_files() {
  
  echo '<!--[if lt IE 11]>';
  echo '<script src="'. get_template_directory_uri() .'/build/js/default.min.js"></script>';
  echo '<![endif]-->';
  
}
add_action('wp_head', 'enqueue_hobbes_fallback_files');