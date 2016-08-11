<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls the premises information which is outputted via 'json',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_premises_json' ) ) :

function hobbes_premises_json() {
  
  $options = get_option( 'theme_options' );
  $premises_telephone_number = get_field( 'premises_telephone' );
  $address_line_1 = get_field( 'address_line_1' );
  $address_line_2 = get_field( 'address_line_2' );
  $address_city = get_field( 'address_city' );
  $address_county = get_field( 'address_county' );
  $address_postcode = get_field( 'address_postcode' );
  $formatted_opening_times = get_field( 'formatted_opening_times' );
  $formatted_opening_times_2 = get_field( 'formatted_opening_times_2' );
  $formatted_opening_times_3 = get_field( 'formatted_opening_times_3' );
  $formatted_opening_times_4 = get_field( 'formatted_opening_times_4' );
  $formatted_opening_times_5 = get_field( 'formatted_opening_times_5' );
  $formatted_opening_times_6 = get_field( 'formatted_opening_times_6' );
  $formatted_opening_times_7 = get_field( 'formatted_opening_times_7' );
  $latitude = get_field( 'latitude' );
  $longitude = get_field( 'longitude' ); ?>
  
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
      <?php
      //  Telephone  //
      if ( !empty($premises_telephone_number) ) { 
        echo'"telephone": "'. $premises_telephone_number .'",';
      } ?>
      <?php
      //  Email  //
      if ( $options['company_email'] != '' ) { 
        echo'"email": "'. $options['company_email'] .'",';
      } ?>
      "address": {
        "@type": "PostalAddress",
        <?php
        //  Address Line 1  //
        if ( !empty($address_line_1) ) { 
          echo'"streetAddress": "'. $address_line_1 .'"';
        } ?>
        <?php
        //  Address Line 2  //
        if ( !empty($address_line_2) ) { 
          echo', "streetAddress": "'. $address_line_2 .'"';
        } ?>
        <?php
        //  Town/City  //
        if ( !empty($address_city) ) { 
          echo', "addressLocality": "'. $address_city .'"';
        } ?>
        <?php
        //  County  //
        if ( !empty($address_county) ) { 
          echo', "addressRegion": "'. $address_county .'"';
        } ?>
        <?php
        //  County  //
        if ( !empty($address_postcode) ) { 
          echo', "postalCode": "'. $address_postcode .'"';
        } ?>
      },
      "openingHours": [
        <?php
        //  Opening Times Monday  //
        if ( !empty($formatted_opening_times) ) { 
          echo'"'. $formatted_opening_times .'"';
        } ?>
        <?php
        //  Opening Times Tuesday  //
        if ( !empty($formatted_opening_times_2) ) { 
          echo',"'. $formatted_opening_times_2 .'"';
        } ?>
        <?php
        //  Opening Times Wednesday  //
        if ( !empty($formatted_opening_times_3) ) { 
          echo',"'. $formatted_opening_times_3 .'"';
        } ?>
        <?php
        //  Opening Times Thursday  //
        if ( !empty($formatted_opening_times_4) ) { 
          echo',"'. $formatted_opening_times_4 .'"';
        } ?>
        <?php
        //  Opening Times Friday  //
        if ( !empty($formatted_opening_times_5) ) { 
          echo',"'. $formatted_opening_times_5 .'"';
        } ?>
        <?php
        //  Opening Times Saturday  //
        if ( !empty($formatted_opening_times_6) ) { 
          echo',"'. $formatted_opening_times_6 .'"';
        } ?>
        <?php
        //  Opening Times Sunday  //
        if ( !empty($formatted_opening_times_7) ) { 
          echo',"'. $formatted_opening_times_7 .'"';
        } ?>
      ],
      "geo": {
        "@type": "GeoCoordinates",
        <?php
        //  Latitude  //
        if ( !empty($latitude) ) { 
          echo'"latitude": "'. $latitude .'"';
        } ?>
        <?php
        //  Longitude  //
        if ( !empty($longitude) ) { 
          echo', "longitude": "'. $longitude .'"';
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