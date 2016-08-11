<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls the company information which is outputted via 'json',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_area_json' ) ) :

function hobbes_area_json() {
  
  $options = get_option( 'theme_options' );
  $area_telephone_number = get_field( 'area_telephone' ); ?>
  
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
      if ( !empty($area_telephone_number) ) { 
        echo'"telephone": "'. $area_telephone_number .'",';
      } ?>
      <?php
      //  Email  //
      if ( $options['company_email'] != '' ) { 
        echo'"email": "'. $options['company_email'] .'",';
      } ?>
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