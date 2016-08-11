<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Register navigation menus for our theme.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function register_hobbes_menus() {
  
  register_nav_menus(
    array(
      'header-menu'   => __( 'Header Menu' ),
      'footer-menu-1' => __( 'First Footer Menu' ),
      'footer-menu-2' => __( 'Second Footer Menu' ),
      'first-sitemap-menu' => __( 'First Sitemap Menu' ),
      'second-sitemap-menu' => __( 'Second Sitemap Menu' ),
      'third-sitemap-menu' => __( 'Third Sitemap Menu' )
      
      //  Add additional navigation menus here  //
    )
  );
  
}

add_action( 'init', 'register_hobbes_menus' );