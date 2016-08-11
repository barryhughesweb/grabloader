<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints a clickable email address as spcified in the global
//  options page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_email_address' ) ) :

function hobbes_email_address($string) {
  
  $options = get_option( 'theme_options' );
  $email_address = $options['company_email'];
  $premises_email_address = get_field( 'premises_email_address' );
  
  if ( !empty($premises_email_address) ) { ?>
  
  <a href="mailto:<?php echo $premises_email_address; ?>"><?php echo $premises_email_address; ?></a>

  <?php } else { ?>

    <?php _e( $string, 'hobbes' ); ?><a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>

  <?php } 

} endif;