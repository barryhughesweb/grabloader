<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file acts as a manifest for theme functions and controllers.
//  These files live in the '_functions' folder.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  THEME SETUP
//
//  These files prepare the theme for us, overwriting a few Wordpress defaults
//  and adding some additional theme agnostic functionality.

require_once('_functions/setup/clean-head.php');      //  Remove junk from the head (rsd links etc.)
require_once('_functions/setup/add-filters.php');     //  Filters control the post output directly
require_once('_functions/setup/categories.php');      //  Sorts out the default categories functionality
require_once('_functions/setup/controllers.php');     //  Indirect theme controllers (permalinks etc.)
require_once('_functions/setup/enqueue-files.php');   //  Enqueue scripts and styles to wp_head
require_once('_functions/setup/footer-scripts.php');  //  Calls the footer specific scripts which require conditions
require_once('_functions/setup/head-scripts.php');    //  Calls the header specific scripts which require conditions
require_once('_functions/setup/head-styling.php');    //  Calls the header specific styling
require_once('_functions/setup/clean-nav.php');       //  Output a clean menu - no dirty classes


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  REGISTER
//
//  For lack of a better name, the files below register additional theme
//  specific functionality, including menus, sidebars and post types.

require_once('_functions/register/register-menus.php');    //  Register three preset menus
require_once('_functions/register/register-sidebar.php');  //  Register default widget area
require_once('_functions/register/options-pages.php');     //  Registers the options pages
require_once('_functions/register/custom-post-types.php'); //  Creates additional post types
require_once('_functions/register/custom-taxonomies.php'); //  Creates additional taxonomies



//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  TEMPLATE TAGS
//
//  The following template tags can be called to display specific reusable
//  content at any point during the theme.

require_once('_functions/template/json.php');                   //  Prints the full address and contact details for json
require_once('_functions/template/area-json.php');              //  Prints the contact details minus other area info for json
require_once('_functions/template/premises-json.php');          //  Prints the full premises address and contact details for json
require_once('_functions/template/logo.php');                   //  Add a logo with schema to the header
require_once('_functions/template/paging-nav.php');             //  Navigation for next/prev posts (home.php / index.php)
require_once('_functions/template/post-nav.php');               //  Navigation for next/prev post (single.php)
require_once('_functions/template/posted-on.php');              //  Post meta data (posted on, author etc.)
require_once('_functions/template/address.php');                //  Prints the address with schema
require_once('_functions/template/full-details.php');           //  Prints the full address and contact details
require_once('_functions/template/opening-times.php');          //  Prints the opening times
require_once('_functions/template/opening-times-footer.php');   //  Prints the opening times specifically for the footer
require_once('_functions/template/email.php');                  //  Add the company email address
require_once('_functions/template/phone-number.php');           //  Add a Click-to-Call phone number
require_once('_functions/template/phone-number-header.php');    //  Add a Click-to-Call phone number for the header
require_once('_functions/template/phone-number-footer.php');    //  Add a Click-to-Call phone number for the footer
require_once('_functions/template/company-number.php');         //  Print the company number from the global options
require_once('_functions/template/social.php');                 //  Print the social links with icons if they exist
require_once('_functions/template/payment-methods.php');        //  Print the payment methods with icons if they exist


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  ADMIN FUNCTIONS
//
//  Boosts functionality to the Wordpress backend

require_once('_functions/admin/global-options.php'); //  User controled global options (logo etc.)
require_once('_functions/admin/plugins.php');        //  This file adds any theme specific plugins