<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls the company information which is outputted via 'json',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_json' ) ) :

function hobbes_json() {
  
  $options = get_option( 'theme_options' ); ?>
  
  <script type="application/ld+json"> 
    {
      "@context": "http://schema.org",
      <?php
      //  Address Line One  //
      if ( $options['schema_type'] != '' ) { 
        echo'"@type": "'. $options['schema_type'] .'",';
      } ?>
      "legalName": "<?php bloginfo( 'name' ); ?>",
      "url": "<?php echo site_url(); ?>",
      <?php
      //  Logo  //
      if ( $options['custom_logo'] != '' ) { 
        echo'"logo": "'. $options['custom_logo'] .'",';
      } ?>
      "address": {
        "@type": "PostalAddress",
        <?php
        //  Address Line 1  //
        if ( $options['address_line_1'] != '' ) { 
          echo'"streetAddress": "'. $options['address_line_1'] .'",';
        } ?>
        <?php
        //  Address Line 2  //
        if ( $options['address_line_2'] != '' ) { 
          echo'"streetAddress": "'. $options['address_line_2'] .'",'; 
        } ?>
        <?php
        //  Town/City  //
        if ( $options['address_city'] != '' ) { 
          echo'"addressLocality": "'. $options['address_city'] .'",';
        } ?>
        <?php
        //  County/State  //
        if ( $options['address_county'] != '' ) { 
          echo'"addressRegion": "'. $options['address_county'] .'",';
        } ?>
        <?php
        //  Postcode/Zip  //
        if ( $options['address_postcode'] != '' ) { 
          echo'"postalCode": "'. $options['address_postcode'] .'"';
        } ?>
      },
      <?php
      //  Telephone  //
      if ( $options['phone_number'] != '' ) { 
        echo'"telephone": "'. $options['phone_number'] .'"';
      } ?>,
      <?php
      //  Email  //
      if ( $options['company_email'] != '' ) { 
        echo'"email": "'. $options['company_email'] .'';
      } ?>",
      "openingHours": [
        <?php
        //  Opening Times Monday  //
        if ( $options['formatted_opening_times'] != '' ) { 
          echo'"'. $options['formatted_opening_times'] .'"';
        } ?>
        <?php
        //  Opening Times Tuesday  //
        if ( $options['formatted_opening_times_2'] != '' ) { 
          echo',"'. $options['formatted_opening_times_2'] .'"';
        } ?>
        <?php
        //  Opening Times Wednesday  //
        if ( $options['formatted_opening_times_3'] != '' ) { 
          echo',"'. $options['formatted_opening_times_3'] .'"';
        } ?>
        <?php
        //  Opening Times Thursday  //
        if ( $options['formatted_opening_times_4'] != '' ) { 
          echo',"'. $options['formatted_opening_times_4'] .'"';
        } ?>
        <?php
        //  Opening Times Friday  //
        if ( $options['formatted_opening_times_5'] != '' ) { 
          echo',"'. $options['formatted_opening_times_5'] .'"';
        } ?>
        <?php
        //  Opening Times Saturday  //
        if ( $options['formatted_opening_times_6'] != '' ) { 
          echo',"'. $options['formatted_opening_times_6'] .'"';
        } ?>
        <?php
        //  Opening Times Sunday  //
        if ( $options['formatted_opening_times_7'] != '' ) { 
          echo',"'. $options['formatted_opening_times_7'] .'"';
        } ?>
      ],
      "geo": {
        "@type": "GeoCoordinates",
        <?php
        //  Latitude  //
        if ( $options['latitude'] != '' ) { 
          echo'"latitude": "'. $options['latitude'] .'",';
        } ?>

        <?php
        //  Longitude  //
        if ( $options['longitude'] != '' ) { 
          echo'"longitude": "'. $options['longitude'] .'"';
        } ?>
      },
      "sameAs": [
        <?php
        //  Google+ Link  //
        if ( $options['g_plus_link'] != '' ) { 
          echo'"'. $options['g_plus_link'] .'"';
        } ?>
        <?php
        //  Twitter Link  //
        if ( $options['twitter_link'] != '' ) { 
          echo',"'. $options['twitter_link'] .'"';
        } ?>
        <?php
        //  Facebook link  //
        if ( $options['facebook_link'] != '' ) { 
          echo',"'. $options['facebook_link'] .'"';
        } ?>
        <?php
        //  Instagram link  //
        if ( $options['instagram_link'] != '' ) { 
          echo',"'. $options['instagram_link'] .'"';
        } ?>
        <?php
        //  YouTube Link  //
        if ( $options['youtube_link'] != '' ) { 
          echo',"'. $options['youtube_link'] .'"';
        } ?>
        <?php
        //  Pinterest Link  //
        if ( $options['pinterest_link'] != '' ) { 
          echo',"'. $options['pinterest_link'] .'"';
        } ?>
        <?php
        //  Snapchat Link  //
        if ( $options['snapchat_link'] != '' ) { 
          echo',"'. $options['snapchat_link'] .'"';
        } ?>
      ]
    }
    
  </script>
  
<?php } endif;