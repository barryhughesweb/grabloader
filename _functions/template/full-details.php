<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints company information as per 'schema.org',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_full_details' ) ) :

function hobbes_full_details() {
  
  $options = get_option( 'theme_options' ); ?>
   
    <div id="full-details">
    
      <p class="is-marginless"><b><?php bloginfo( 'name' ); ?></b></p>
     
      <p class="address">
        
        <?php
          //  Address Line One  //
          if ( $options['address_line_1'] != '' ) { 
            echo'<span>'. $options['address_line_1'] .'</span><br>';
          }

          //  Address Line Two  //
          if ( $options['address_line_2'] != '' ) { 
            echo'<span>'. $options['address_line_2'] .'</span><br>'; 
          }

          //  Town/City  //
          if ( $options['address_city'] != '' ) { 
            echo'<span>'. $options['address_city'] .'</span><br>';
          }

          //  County/State  //
          if ( $options['address_county'] != '' ) { 
            echo'<span>'. $options['address_county'] .'</span><br>';
          }

          //  Postcode/Zip  //
          if ( $options['address_postcode'] != '' ) { 
            echo'<span>'. $options['address_postcode'] .'</span><br>';
          }
          
          //  Company Number  //
          if ( $options['company_number'] != '' ) { 
            echo'<span>Company No. '. $options['company_number'] .'</span><br>';
          }
          
          //  VAT Number  //
          if ( $options['vat_number'] != '' ) { 
            echo'<span>VAT No. '. $options['vat_number'] .'</span>';
          }
        ?>
      </p>
       
      <?php $tel_number = $options['phone_number'];
      $tel_meta = str_replace( " ", "", $tel_number ); ?>
        
      <p>Tel: <a id="aside-telephone" href="tel:<?php echo $tel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone - Contact Page Aside');"><?php echo $tel_number; ?></a></p>
      
      <?php $company_email = $options['company_email']; ?>
      
      <p>Email: <a class="email" href="email:<?php echo $company_email; ?>"><?php echo $company_email; ?></a></p>
      
      <?php if ( $options['opening_times'] != '' ) { ?>
        
        <table class="table openingtimes has-margin--top">
          <thead>
            <tr>
              <th colspan="2">Opening Times:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td><?php echo $options['opening_times']; ?></td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td><?php echo $options['opening_times_2']; ?></td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td><?php echo $options['opening_times_3']; ?></td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td><?php echo $options['opening_times_4']; ?></td>
            </tr>
            <tr>
              <td>Friday</td>
              <td><?php echo $options['opening_times_5']; ?></td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td><?php echo $options['opening_times_6']; ?></td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td><?php echo $options['opening_times_7']; ?></td>
            </tr>
          </tbody>
        </table>
        
      <?php } ?>
    
    </div>
    
  <?php }
  
endif;