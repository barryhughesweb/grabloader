<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file adds a Global Settings page to the Wordpress backend, along with
//  a number of options that can be used to easily customise the theme/
//
//  [_1_] Create the Options Page
//  [_2_] Options Page Styling (backend only)
//  [_3_] Options Page Markup
//    [_3.1_] Company Logo
//    [_3.2_] Contact Details
//    [_3.3_] Address
//    [_3.4_] Additional Schema
//    [_3.5_] Payment Methods
//    [_3.6_] Save/Submit Options
//  [_4_] Options Page Scripts (backend only)
//  [_5_] Sanitise and Validate Options

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Create the Options Page  //

function theme_options_init(){
  register_setting( 'theme_options', 'theme_options' ); //  Register settings  //
}

//add settings page to menu
function add_settings_page() {
  add_menu_page( __( 'Theme Options' ), __( 'Global' ), 'manage_options', 'settings', 'theme_settings_page'); //  Add to backend menu  //
}

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'add_settings_page' );


function theme_settings_page() { //  start settings page  //

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

global $color_scheme; //  get variables outside scope  //


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] Options Page Styling (backend only)  // ?>

<style>
  
  .theme-options .postbox { margin-right: 2em; }
  
  .theme-options h2 { 
    padding-bottom: 11px;
    font-size: 23px;
  }
  
  .theme-options h2 { 
    padding-bottom: 9px;
    font-size: 19px;
  }
  
  .hndle { 
    padding: 0.75em 1em;
    margin: 0;
  }
  
  .postbox .inside {
    /*border-bottom:1px solid #eee; */
    padding: 1em;
    margin: 0;
  }
  
  .selections .inside {
    display: inline-block;
    width: 12.5%;
  }
  
  .selections .inside label {
    margin-right: 12px;
  }
  
  @media only screen and (max-width : 500px) {
    .selections .inside {
      display: block;
      width: 100%;
    }
  }
  
  @media only screen and (max-width : 800px) {
    .selections .inside {
      width: 27%;
      padding-right: 0px !important;
    }
  }
  
  .postbox input, .postbox textarea {
    width: 100%;
    padding: 5px;
    margin: 10px 0;
  }
  
  .postbox input[type="checkbox"] {
    width: 16px !important;
    height: 16px !important;
    padding: 0px;
    margin: 0px;
  }
  
  .postbox textarea {
    min-width: 100%;
    max-width: 100%;
    min-height: 150px;
  }
  
  .postbox hr { 
    border: 0;
    border-top: 1px solid #eee;
  }
  
  .header_logo {
    max-width: 200px;
    height: auto;
    margin-top: 16px;
  }
  
  .logo-upload {
    margin-right: 80px;
  }
  
  .logo-choose {
    text-align: right;
    margin-top: -41px;
  }
  
</style>


<?php //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Options Page Markup  // ?>


<div class="theme-options">
  
  <h2><?php _e( 'Global Settings' ) //  Your admin panel title  // ?></h2>
  
  <?php
    //  show saved options message  //
    if ( false !== $_REQUEST['updated'] ) : ?>
    <div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; ?>
  
  <form method="post" action="options.php"> <?php //  Start of the options form  // ?>

  <?php settings_fields( 'theme_options' ); ?>
  <?php $options = get_option( 'theme_options' );
  
  //  [_3.1_] Company Logo  //  ?>
  
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Custom Logo</h3>
    <div class="inside">
      
      <?php
      //  Load the scripts required for the media uploader  //
      
      if(function_exists( 'wp_enqueue_media' )){
        wp_enqueue_media();
        
      }else{
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        
      } ?>
      
      <label for="theme_options[custom_logo]"><b><?php _e( 'Enter a URL or upload an image' ); ?></b></label><br>
      
      <div class="logo-upload">
        <?php //  Logo URL Field  // ?>
        <input class="header_logo_url" type="text" name="theme_options[custom_logo]" value="<?php esc_attr_e( $options['custom_logo'] ); ?>">
      </div>
      
      <div class="logo-choose">
        <?php //  Logo Uploader Button  // ?>
        <a class="button button-primary button-large header_logo_upload" href="#">Upload</a>
      </div>
      
      <img class="header_logo" src="<?php esc_attr_e( $options['custom_logo'] ); ?>" />
    </div>
  </div>
  
  <?php //  [_3.2_] Contact Details  // ?>
  
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Contact Details</h3>
    <div class="inside">
      
      <?php //  Phone Number Field  // ?>
      <label for="theme_options[phone_number]"><b><?php _e( 'Telephone Number' ); ?></b></label><br>
      <input id="theme_options[phone_number]" type="text" name="theme_options[phone_number]" value="<?php esc_attr_e( $options['phone_number'] ); ?>" />
      
    </div>

    <hr>
    
    <div class="inside">
      
      <?php //  Company Email  // ?>
      <label for="theme_options[company_email]"><b><?php _e( 'Company Email' ); ?></b></label><br>
      <input id="theme_options[company_email]" type="text" name="theme_options[company_email]" value="<?php esc_attr_e( $options['company_email'] ); ?>" />
      
    </div>

    <hr>

    <div class="inside">
      
      <?php //  Registered Company Number Field  // ?>
      <label for="theme_options[company_number]"><b><?php _e( 'Company Number' ); ?></b></label><br>
      <input id="theme_options[company_number]" type="text" name="theme_options[company_number]" value="<?php esc_attr_e( $options['company_number'] ); ?>" />
      
    </div>
    
    <hr>

    <div class="inside">
      
      <?php //  Registered VAT Number Field  // ?>
      <label for="theme_options[vat_number]"><b><?php _e( 'VAT Number' ); ?></b></label><br>
      <input id="theme_options[vat_number]" type="text" name="theme_options[vat_number]" value="<?php esc_attr_e( $options['vat_number'] ); ?>" />
      
    </div>
  </div>
  
  <?php //  [_3.3_] Address  // ?>
  
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Company Details</h3>
    
    <div class="inside">
       
      <?php //  Schema Business Type  // ?>
      <label for="theme_options[schema_type]"><b><?php _e( 'Schema Type' ); ?></b></label><br>
      <input id="theme_options[schema_type]" type="text" name="theme_options[schema_type]" value="<?php esc_attr_e( $options['schema_type'] ); ?>" />
       
    </div>
    
    <hr>
    
    <div class="inside">
       
      <?php //  Latitude  // ?>
      <label for="theme_options[latitude]"><b><?php _e( 'Latitude' ); ?></b></label><br>
      <input id="theme_options[latitude]" type="text" name="theme_options[latitude]" value="<?php esc_attr_e( $options['latitude'] ); ?>" />
       
    </div>
    
    <hr>
    
    <div class="inside">
       
      <?php //  Longitude  // ?>
      <label for="theme_options[longitude]"><b><?php _e( 'Longitude' ); ?></b></label><br>
      <input id="theme_options[longitude]" type="text" name="theme_options[longitude]" value="<?php esc_attr_e( $options['longitude'] ); ?>" />
       
    </div>
    
    <h3 class="hndle">Address</h3>
    
    <div class="inside">
      
      <?php //  Address Line 1 Field  // ?>
      <label for="theme_options[address_line_1]"><b><?php _e( 'Address Line 1' ); ?></b></label><br>
      <input id="theme_options[address_line_1]" type="text" name="theme_options[address_line_1]" value="<?php esc_attr_e( $options['address_line_1'] ); ?>" />
      
    </div>

    <hr>

    <div class="inside">
     
      <?php //  Address Line 2 Field  // ?>
      <label for="theme_options[address_line_2]"><b><?php _e( 'Address Line 2' ); ?></b></label><br>
      <input id="theme_options[address_line_2]" type="text" name="theme_options[address_line_2]" value="<?php esc_attr_e( $options['address_line_2'] ); ?>" />
      
    </div>

    <hr>

    <div class="inside">
     
      <?php //  City/Town Field  // ?>
      <label for="theme_options[address_city]"><b><?php _e( 'City / Town' ); ?></b></label><br>
      <input id="theme_options[address_city]" type="text" name="theme_options[address_city]" value="<?php esc_attr_e( $options['address_city'] ); ?>" />
      
    </div>

    <hr>

    <div class="inside">
     
      <?php //  County/State Field  // ?>
      <label for="theme_options[address_county]"><b><?php _e( 'County' ); ?></b></label><br>
      <input id="theme_options[address_county]" type="text" name="theme_options[address_county]" value="<?php esc_attr_e( $options['address_county'] ); ?>" />
      
    </div>
    
    <hr>

    <div class="inside">
     
      <?php //  Postcode/Zip Field  // ?>
      <label for="theme_options[address_postcode]"><b><?php _e( 'Postcode' ); ?></b></label><br>
      <input id="theme_options[address_postcode]" type="text" name="theme_options[address_postcode]" value="<?php esc_attr_e( $options['address_postcode'] ); ?>" />
      
    </div>
    
  </div>
  
  <?php //  [_3.4_] Additional Schema  // ?>
    
  <div id="postimgdiv" class="postbox">
    
    <h3 class="hndle">Opening Times</h3>
     
    <div class="inside">
       
      <?php //  Opening Times Monday  // ?>
      <label for="theme_options[opening_times]"><b><?php _e( 'Monday:' ); ?></b></label><br>
      <input id="theme_options[opening_times]" type="text" name="theme_options[opening_times]" value="<?php esc_attr_e( $options['opening_times'] ); ?>" />
       
      <?php //  Formatted Opening Times Monday  // ?>
      <label for="theme_options[formatted_opening_times]"><b><?php _e( 'Formatted Opening Times Monday' ); ?></b> <em>eg. Mo 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times]" type="text" name="theme_options[formatted_opening_times]" value="<?php esc_attr_e( $options['formatted_opening_times'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Tuesday  // ?>
      <label for="theme_options[opening_times_2]"><b><?php _e( 'Tuesday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_2]" type="text" name="theme_options[opening_times_2]" value="<?php esc_attr_e( $options['opening_times_2'] ); ?>" />
       
      <?php //  Formatted Opening Times Tuesday  // ?>
      <label for="theme_options[formatted_opening_times_2]"><b><?php _e( 'Formatted Opening Times Tuesday' ); ?></b> <em>eg. Tu 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_2]" type="text" name="theme_options[formatted_opening_times_2]" value="<?php esc_attr_e( $options['formatted_opening_times_2'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Wednesday  // ?>
      <label for="theme_options[opening_times_3]"><b><?php _e( 'Wednesday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_3]" type="text" name="theme_options[opening_times_3]" value="<?php esc_attr_e( $options['opening_times_3'] ); ?>" />
       
      <?php //  Formatted Opening Times Wednesday  // ?>
      <label for="theme_options[formatted_opening_times_3]"><b><?php _e( 'Formatted Opening Times Wednesday' ); ?></b> <em>eg. We 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_3]" type="text" name="theme_options[formatted_opening_times_3]" value="<?php esc_attr_e( $options['formatted_opening_times_3'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Thursday  // ?>
      <label for="theme_options[opening_times_4]"><b><?php _e( 'Thursday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_4]" type="text" name="theme_options[opening_times_4]" value="<?php esc_attr_e( $options['opening_times_4'] ); ?>" />
       
      <?php //  Formatted Opening Times Thursday  // ?>
      <label for="theme_options[formatted_opening_times_4]"><b><?php _e( 'Formatted Opening Times Thursday' ); ?></b> <em>eg. Th 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_4]" type="text" name="theme_options[formatted_opening_times_4]" value="<?php esc_attr_e( $options['formatted_opening_times_4'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Friday  // ?>
      <label for="theme_options[opening_times_5]"><b><?php _e( 'Friday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_5]" type="text" name="theme_options[opening_times_5]" value="<?php esc_attr_e( $options['opening_times_5'] ); ?>" />
       
      <?php //  Formatted Opening Times Friday  // ?>
      <label for="theme_options[formatted_opening_times_5]"><b><?php _e( 'Formatted Opening Times Friday' ); ?></b> <em>eg. Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_5]" type="text" name="theme_options[formatted_opening_times_5]" value="<?php esc_attr_e( $options['formatted_opening_times_5'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Saturday  // ?>
      <label for="theme_options[opening_times_6]"><b><?php _e( 'Saturday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_6]" type="text" name="theme_options[opening_times_6]" value="<?php esc_attr_e( $options['opening_times_6'] ); ?>" />
       
      <?php //  Formatted Opening Times Saturday  // ?>
      <label for="theme_options[formatted_opening_times_6]"><b><?php _e( 'Formatted Opening Times Saturday' ); ?></b> <em>eg. Sa 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_6]" type="text" name="theme_options[formatted_opening_times_6]" value="<?php esc_attr_e( $options['formatted_opening_times_6'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Opening Times Sunday  // ?>
      <label for="theme_options[opening_times_7]"><b><?php _e( 'Sunday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_7]" type="text" name="theme_options[opening_times_7]" value="<?php esc_attr_e( $options['opening_times_7'] ); ?>" />
       
      <?php //  Formatted Opening Times Sunday  // ?>
      <label for="theme_options[formatted_opening_times_7]"><b><?php _e( 'Formatted Opening Times Sunday' ); ?></b> <em>eg. Su 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_7]" type="text" name="theme_options[formatted_opening_times_7]" value="<?php esc_attr_e( $options['formatted_opening_times_7'] ); ?>" />
       
    </div>

    <hr>
    
    <h3 class="hndle">Additional Information</h3>
    
    <div class="inside">
      
      <?php //  Maps Link  // ?>
      <label for="theme_options[maps_link]"><b><?php _e( 'Google Maps Link' ); ?></b></label><br>
      <input id="theme_options[maps_link]" type="text" name="theme_options[maps_link]" value="<?php esc_attr_e( $options['maps_link'] ); ?>" />
      
    </div>

    <hr>
    
    <div class="inside">
      
      <?php //  Google+ Page  // ?>
      <label for="theme_options[g_plus_link]"><b><?php _e( 'Google+ Page' ); ?></b></label><br>
      <input id="theme_options[g_plus_link]" type="text" name="theme_options[g_plus_link]" value="<?php esc_attr_e( $options['g_plus_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Twitter Profile  // ?>
      <label for="theme_options[twitter_link]"><b><?php _e( 'Twitter Profile' ); ?></b></label><br>
      <input id="theme_options[twitter_link]" type="text" name="theme_options[twitter_link]" value="<?php esc_attr_e( $options['twitter_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Facebook Page  // ?>
      <label for="theme_options[facebook_link]"><b><?php _e( 'Facebook Page' ); ?></b></label><br>
      <input id="theme_options[facebook_link]" type="text" name="theme_options[facebook_link]" value="<?php esc_attr_e( $options['facebook_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Instagram Account  // ?>
      <label for="theme_options[instagram_link]"><b><?php _e( 'Instagram Account' ); ?></b></label><br>
      <input id="theme_options[instagram_link]" type="text" name="theme_options[instagram_link]" value="<?php esc_attr_e( $options['instagram_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Youtube Channel  // ?>
      <label for="theme_options[youtube_link]"><b><?php _e( 'Youtube Channel' ); ?></b></label><br>
      <input id="theme_options[youtube_link]" type="text" name="theme_options[youtube_link]" value="<?php esc_attr_e( $options['youtube_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Pinterest Account  // ?>
      <label for="theme_options[pinterest_link]"><b><?php _e( 'Pinterest Account' ); ?></b></label><br>
      <input id="theme_options[pinterest_link]" type="text" name="theme_options[pinterest_link]" value="<?php esc_attr_e( $options['pinterest_link'] ); ?>" />
      
    </div>
    
    <hr>
    
    <div class="inside">
      
      <?php //  Snapchat Account  // ?>
      <label for="theme_options[snapchat_link]"><b><?php _e( 'Snapchat Account' ); ?></b></label><br>
      <input id="theme_options[snapchat_link]" type="text" name="theme_options[snapchat_link]" value="<?php esc_attr_e( $options['snapchat_link'] ); ?>" />
      
    </div>
  </div>
  
  <?php //  [_3.5_] Payment Methods  // ?>
  
  <div id="postimgdiv" class="postbox selections">
    <h3 class="hndle">Payment Methods</h3>
    <?php $select_options = get_option( 'theme_options' ); ?>
    <div class="inside">
      <?php //  Cash  // ?>
      <label for="theme_options[cash_selection]"><b><?php _e( 'Cash' ); ?></b></label>
      <input id="theme_options[cash_selection]" type="checkbox" name="theme_options[cash_selection]" value="Cash" <?php checked( isset( $select_options['cash_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Cheque  // ?>
      <label for="theme_options[cheque_selection]"><b><?php _e( 'Cheque' ); ?></b></label>
      <input id="theme_options[cheque_selection]" type="checkbox" name="theme_options[cheque_selection]" value="Cheque" <?php checked( isset( $select_options['cheque_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Direct Debit  // ?>
      <label for="theme_options[directdebit_selection]"><b><?php _e( 'Direct Debit' ); ?></b></label>
      <input id="theme_options[directdebit_selection]" type="checkbox" name="theme_options[directdebit_selection]" value="Direct Debit" <?php checked( isset( $select_options['directdebit_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Bacs  // ?>
      <label for="theme_options[bacs_selection]"><b><?php _e( 'Bacs' ); ?></b></label>
      <input id="theme_options[bacs_selection]" type="checkbox" name="theme_options[bacs_selection]" value="Bacs" <?php checked( isset( $select_options['bacs_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Visa  // ?>
      <label for="theme_options[visa_selection]"><b><?php _e( 'Visa' ); ?></b></label>
      <input id="theme_options[visa_selection]" type="checkbox" name="theme_options[visa_selection]" value="Visa" <?php checked( isset( $select_options['visa_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  MasterCard  // ?>
      <label for="theme_options[mastercard_selection]"><b><?php _e( 'MasterCard' ); ?></b></label>
      <input id="theme_options[mastercard_selection]" type="checkbox" name="theme_options[mastercard_selection]" value="MasterCard" <?php checked( isset( $select_options['mastercard_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Maestro  // ?>
      <label for="theme_options[maestro_selection]"><b><?php _e( 'Maestro' ); ?></b></label>
      <input id="theme_options[maestro_selection]" type="checkbox" name="theme_options[maestro_selection]" value="Maestro" <?php checked( isset( $select_options['maestro_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Cirrus  // ?>
      <label for="theme_options[cirrus_selection]"><b><?php _e( 'Cirrus' ); ?></b></label>
      <input id="theme_options[cirrus_selection]" type="checkbox" name="theme_options[cirrus_selection]" value="Cirrus" <?php checked( isset( $select_options['cirrus_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  American Express  // ?>
      <label for="theme_options[americanexpress_selection]"><b><?php _e( 'American Express' ); ?></b></label>
      <input id="theme_options[americanexpress_selection]" type="checkbox" name="theme_options[americanexpress_selection]" value="American Express" <?php checked( isset( $select_options['americanexpress_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Solo  // ?>
      <label for="theme_options[solo_selection]"><b><?php _e( 'Solo' ); ?></b></label>
      <input id="theme_options[solo_selection]" type="checkbox" name="theme_options[solo_selection]" value="Solo" <?php checked( isset( $select_options['solo_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Switch  // ?>
      <label for="theme_options[switch_selection]"><b><?php _e( 'Switch' ); ?></b></label>
      <input id="theme_options[switch_selection]" type="checkbox" name="theme_options[switch_selection]" value="Switch" <?php checked( isset( $select_options['switch_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Paypal  // ?>
      <label for="theme_options[paypal_selection]"><b><?php _e( 'PayPal' ); ?></b></label>
      <input id="theme_options[paypal_selection]" type="checkbox" name="theme_options[paypal_selection]" value="PayPal" <?php checked( isset( $select_options['paypal_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Square  // ?>
      <label for="theme_options[square_selection]"><b><?php _e( 'Square' ); ?></b></label>
      <input id="theme_options[square_selection]" type="checkbox" name="theme_options[square_selection]" value="Square" <?php checked( isset( $select_options['square_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Apple Pay  // ?>
      <label for="theme_options[applepay_selection]"><b><?php _e( 'Apple Pay' ); ?></b></label>
      <input id="theme_options[applepay_selection]" type="checkbox" name="theme_options[applepay_selection]" value="Apple Pay" <?php checked( isset( $select_options['applepay_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Sage  // ?>
      <label for="theme_options[sage_selection]"><b><?php _e( 'Sage' ); ?></b></label>
      <input id="theme_options[sage_selection]" type="checkbox" name="theme_options[sage_selection]" value="Sage" <?php checked( isset( $select_options['sage_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  Worldpay  // ?>
      <label for="theme_options[worldpay_selection]"><b><?php _e( 'Worldpay' ); ?></b></label>
      <input id="theme_options[worldpay_selection]" type="checkbox" name="theme_options[worldpay_selection]" value="Worldpay" <?php checked( isset( $select_options['worldpay_selection'] ) ); ?> />
    </div>
    <div class="inside">
      <?php //  VeriSign Secured  // ?>
      <label for="theme_options[verisignsecured_selection]"><b><?php _e( 'VeriSign Secured' ); ?></b></label>
      <input id="theme_options[verisignsecured_selection]" type="checkbox" name="theme_options[verisignsecured_selection]" value="VeriSign Secured" <?php checked( isset( $select_options['verisignsecured_selection'] ) ); ?> />
    </div>
  </div>
  
  <?php //  [_3.6_] Save/Submit Options  // ?>
  
  <p><input class="button button-primary button-large" name="submit" id="submit" value="Save Changes" type="submit"></p>
  </form>
  
</div>


<?php //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Options Page Scripts (backend only)  // ?>


<script>
  jQuery(document).ready(function($) {
    $('.header_logo_upload').click(function(e) {
      e.preventDefault();
      
      var custom_uploader = wp.media({
        title: 'Custom Logo',
        button: {
          text: 'Upload Logo'
        },
        multiple: false  //  Set this to true to allow multiple files to be selected  //
      })
      .on('select', function() {
        var attachment = custom_uploader.state().get('selection').first().toJSON();
        $('.header_logo').attr('src', attachment.url);
        $('.header_logo_url').val(attachment.url);
        
      })
      .open();
    });
  });
</script>


<?php } //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_5_] Sanitise and Validate Options  //


function options_validate( $input ) {
  
  global $select_options, $radio_options;
  
  if ( ! isset( $input['option1'] ) )
    $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
  
  if ( ! isset( $input['radioinput'] ) )
    $input['radioinput'] = null;
  
  if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
    $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
  
  return $input;
}