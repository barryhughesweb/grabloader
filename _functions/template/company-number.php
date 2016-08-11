<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the company number as spcified in the global
//  options page, if it exists

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_company_number' ) ) :

function hobbes_company_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['company_number'] != '' ) {
    
     _e( $string, 'hobbes' ); echo $options['company_number'];
    
  } }
  
endif;