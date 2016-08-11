<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the header for our theme. It is used universally, for all posts
//  and page templates.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?><!doctype html>
<!--[if lt IE 8 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-GB" class=""> <!--<![endif]-->

<head>
 
  <meta charset="<?php bloginfo('charset'); ?>" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/img/_default/favicon@2x.ico" />
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/_default/apple-touch-icon@2x.png" />
  
  <!--
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'TRACKING CODE HERE', 'auto');
    ga('send', 'pageview');
  </script>
  -->
  
  <?php wp_head(); ?>
  
  <?php  //  Calls the header specific scripts function from '_functions/setup/head-scripts.php'  //
  
  hobbes_head_scripts(); ?>
  
  <?php  //  Calls the header specific styling function from '_functions/setup/head-styling.php'  //
  
  hobbes_head_styling(); ?>
  
</head>

<body <?php body_class(); ?>>

<header class="is-relative">
  
  <div id="top" class="container--xlarge is-relative has-clearfix has-padding--top">
    
    <div class="grid is-narrow">
      
      <div class="grid-item">
        
        <?php  //  Calls the logo schema function from '_default/template-tags.php'  //
    
        hobbes_logo(); ?>
        
      </div>
      
      <div class="grid-item is-fifth has-margin-bottom--half">
        
        <p class="tagline is-centered is-left--tablet">Berkshire's Number One <span class="is-tertiary-colour">Grab Hire &amp; Aggregate Company</span></p>
        
      </div>
      
      <div class="grid-item is-two-fifths has-margin-bottom--half">
        
        <img class="vehicles" src="<?php bloginfo('template_directory'); ?>/img/threegrabloadervehicles.jpg" alt="Grabloader Vehicles">
        
      </div>
      
      <div class="grid-item is-fifth has-margin-bottom--half is-right--tablet">
        
        <?php //  Calls the phone number from the global options page, if it exists  //

        hobbes_header_phone_number('Free Quotations '); ?>
        
      </div>
      
    </div>
    
    <span id="header-toggle" class="header-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    
  </div>
  
  <div id="navigation">
    
    <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //

    hobbes_clean_nav('header-menu','header-nav'); ?>
    
  </div>
  
</header>

<main><?php //  This is closed in 'footer.php'  // ?>