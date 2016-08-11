<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints company information as per 'schema.org',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_footer_opening_times' ) ) :

function hobbes_footer_opening_times($itemscope = 'ul', $itemprop = 'li') {
  
  $options = get_option( 'theme_options' );
  $opening_times = get_field( 'opening_times' );
  $opening_times_2 = get_field( 'opening_times_2' );
  $opening_times_3 = get_field( 'opening_times_3' );
  $opening_times_4 = get_field( 'opening_times_4' );
  $opening_times_5 = get_field( 'opening_times_5' );
  $opening_times_6 = get_field( 'opening_times_6' );
  $opening_times_7 = get_field( 'opening_times_7' ); ?>
  
    <?php if ( is_singular('premises') ) { ?>
   
    <div class="premises-opening-times">
      
      <?php if ( !empty($opening_times) ) { ?>
        
        <ul class="opening-times">
          <?php //  Monday  //
            if ( !empty($opening_times) ) { 
              echo'<'. $itemprop .'>Monday: '. $opening_times .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Tuesday  //
            if ( !empty($opening_times_2) ) { 
              echo'<'. $itemprop .'>Tuesday: '. $opening_times_2 .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Wednesday  //
            if ( !empty($opening_times_3) ) { 
              echo'<'. $itemprop .'>Wednesday: '. $opening_times_3 .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Thursday  //
            if ( !empty($opening_times_4) ) { 
              echo'<'. $itemprop .'>Thursday: '. $opening_times_4 .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Friday  //
            if ( !empty($opening_times_5) ) { 
              echo'<'. $itemprop .'>Friday: '. $opening_times_5 .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Saturday  //
            if ( !empty($opening_times_6) ) { 
              echo'<'. $itemprop .'>Saturday: '. $opening_times_6 .'</'. $itemprop .'>';
            }
          ?>
          <?php //  Sunday  //
            if ( !empty($opening_times_7) ) { 
              echo'<'. $itemprop .'>Sunday: '. $opening_times_7 .'</'. $itemprop .'>';
            }
          ?>
        </ul>
        
      <?php } ?>
    
    </div>
    
    <?php } else { ?>
    
    <ul class="opening-times">
      <?php //  Monday  //
        if ( $options['opening_times'] != '' ) { 
          echo'<'. $itemprop .'>Monday: '. $options['opening_times'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Tuesday  //
        if ( $options['opening_times_2'] != '' ) { 
          echo'<'. $itemprop .'>Tuesday: '. $options['opening_times_2'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Wednesday  //
        if ( $options['opening_times_3'] != '' ) { 
          echo'<'. $itemprop .'>Wednesday: '. $options['opening_times_3'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Thursday  //
        if ( $options['opening_times_4'] != '' ) { 
          echo'<'. $itemprop .'>Thursday: '. $options['opening_times_4'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Friday  //
        if ( $options['opening_times_5'] != '' ) { 
          echo'<'. $itemprop .'>Friday: '. $options['opening_times_5'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Saturday  //
        if ( $options['opening_times_6'] != '' ) { 
          echo'<'. $itemprop .'>Saturday: '. $options['opening_times_6'] .'</'. $itemprop .'>';
        }
      ?>
      <?php //  Sunday  //
        if ( $options['opening_times_7'] != '' ) { 
          echo'<'. $itemprop .'>Sunday: '. $options['opening_times_7'] .'</'. $itemprop .'>';
        }
      ?>
    </ul>
    
    <?php } ?>
    
  <?php } endif;