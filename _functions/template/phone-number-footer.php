<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints a clickable phone number as spcified in the global
//  options page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_footer_phone_number' ) ) :

function hobbes_footer_phone_number($string) {
  
  $areatel_number = get_field('area_telephone');
  
  $areatel_meta = str_replace( " ", "", $areatel_number );
  
  $premisestel_number = get_field('premises_telephone');
  
  $premisestel_meta = str_replace( " ", "", $premisestel_number );
  
  $options = get_option( 'theme_options' );
  
  $tel_number = $options['phone_number'];
  
  $tel_meta = str_replace( " ", "", $tel_number );
  
  if ( !empty($areatel_number) ) { ?>
    
  <p><?php _e( $string, 'hobbes' ); ?><a id="area-footer-telephone" href="tel:<?php echo $areatel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - <?php the_title(); ?> Footer');"><?php echo $areatel_number; ?></a></p>
    
  <?php } elseif ( !empty($premisestel_number) ) { ?>
    
  <p class="is-uppercase">Tel: <a id="premises-footer-telephone" href="tel:<?php echo $premisestel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - <?php the_title(); ?> Footer');"><?php echo $premisestel_number; ?></a>
    
  <?php } else { ?>
    
  <p><?php _e( $string, 'hobbes' ); ?><a id="footer-telephone" href="tel:<?php echo $tel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - Footer');"><?php echo $tel_number; ?></a></p>
    
  <?php } }
  
endif;