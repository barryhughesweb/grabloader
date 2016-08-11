<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints the address as per 'schema.org' recommendation.
//  The address is set in the Global settings menu of the admin panel.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_address' ) ) :

function hobbes_address($itemscope = 'ul', $itemprop = 'li') {
  
  $options = get_option( 'theme_options' );
  $address_line_1 = get_field( 'address_line_1' );
  $address_line_2 = get_field( 'address_line_2' );
  $address_city = get_field( 'address_city' );
  $address_county = get_field( 'address_county' );
  $address_postcode = get_field( 'address_postcode' ); ?>
   
    <?php if ( is_singular('premises') ) { ?><?php // IF STATEMENT START ?>
      
      <<?php echo $itemscope; ?> class="premises-address">
     
        <?php
          //  Address Line 1  //
          if ( !empty($address_line_1) ) { 
            echo'<'. $itemprop .'>'. $address_line_1 .',&nbsp;</'. $itemprop .'>';
          }

          //  Address Line 2  //
          if ( !empty($address_line_2) ) { 
            echo'<'. $itemprop .'>'. $address_line_2 .',&nbsp;</'. $itemprop .'>'; 
          }

          //  Town/City  //
          if ( !empty($address_city) ) { 
            echo'<'. $itemprop .'>'. $address_city .',&nbsp;</'. $itemprop .'>';
          }

          //  County/State  //
          if ( !empty($address_county) ) { 
            echo'<'. $itemprop .'>'. $address_county .',&nbsp;</'. $itemprop .'>';
          }

          //  Postcode/Zip  //
          if ( !empty($address_postcode) ) { 
            echo'<'. $itemprop .'>'. $address_postcode .'</'. $itemprop .'>';
          }
        ?>

      </<?php echo $itemscope; ?>>
      
    <?php } else { ?>
    
      <<?php echo $itemscope; ?> class="premises-address">
     
        <?php
          //  Address Line 1  //
          if ( $options['address_line_1'] != '' ) { 
            echo'<'. $itemprop .'>'. $options['address_line_1'] .',&nbsp;</'. $itemprop .'>';
          }

          //  Address Line 2  //
          if ( $options['address_line_2'] != '' ) { 
            echo'<'. $itemprop .'>'. $options['address_line_2'] .',&nbsp;</'. $itemprop .'>'; 
          }

          //  Town/City  //
          if ( 
            $options['address_city'] != '' ) { echo'<'. $itemprop .'>'. $options['address_city'] .',&nbsp;</'. $itemprop .'>';
          }

          //  County/State  //
          if ( $options['address_county'] != '' ) { 
            echo'<'. $itemprop .'>'. $options['address_county'] .',&nbsp;</'. $itemprop .'>';
          }

          //  Postcode/Zip  //
          if ( $options['address_postcode'] != '' ) { 
            echo'<'. $itemprop .'>'. $options['address_postcode'] .'</'. $itemprop .'>';
          }
        ?>

      </<?php echo $itemscope; ?>>
    
    <?php } ?><?php // IF STATEMENT END ?>
    
  <?php }
  
endif;