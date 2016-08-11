<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints a clickable phone number as spcified in the global
//  options page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_phone_number' ) ) :

function hobbes_phone_number($string) {
  
  $areatel_number = get_field('area_telephone');
  
  $areatel_meta = str_replace( " ", "", $areatel_number );
  
  $premisestel_number = get_field('premises_telephone');
  
  $premisestel_meta = str_replace( " ", "", $premisestel_number );
  
  $options = get_option( 'theme_options' );
  
  $tel_number = $options['phone_number'];
  
  $tel_meta = str_replace( " ", "", $tel_number );
  
  if ( !empty($areatel_number) ) { ?>
    
    <?php _e( $string, 'hobbes' ); ?> <a class="telephone" href="tel:<?php echo $areatel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - <?php the_title(); ?>');"><?php echo $areatel_number; ?></a>
    
  <?php } elseif ( !empty($premisestel_number) ) { ?>
    
    <?php _e( $string, 'hobbes' ); ?> <a class="telephone" href="tel:<?php echo $premisestel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - <?php the_title(); ?>');"><?php echo $premisestel_number; ?></a>
    
  <?php } else { ?>
    
    <?php _e( $string, 'hobbes' ); ?> <a class="telephone" href="tel:<?php echo $tel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone');"><?php echo $tel_number; ?></a>
    
  <?php } }
  
endif;