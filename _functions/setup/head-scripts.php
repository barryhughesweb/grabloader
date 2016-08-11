<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Calls the header specific scripts which may include IF statements etc.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_head_scripts' ) ) :

function hobbes_head_scripts() { ?>
  
  <?php if ( is_front_page ) { ?><?php // IF STATEMENT EXAMPLE START ?>
    
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $('.bxslider--small').bxSlider({
          auto: true,
          mode: 'fade',
          controls: true,
          speed: 1000,
          pause: 4000,
          pager: false,
          adaptiveHeight: false,
          responsive: true,
        });
      });
    </script>
    
  <?php } ?><?php // IF STATEMENT EXAMPLE END ?>
  
  <?php if ( is_singular('services') ) { ?><?php // IF STATEMENT EXAMPLE START ?>
    
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $('.bxslider--service').bxSlider({
          auto: true,
          mode: 'fade',
          controls: true,
          speed: 1000,
          pause: 4000,
          pager: false,
          adaptiveHeight: false,
          responsive: true,
        });
      });
    </script>
    
  <?php } ?><?php // IF STATEMENT EXAMPLE END ?>
  
  <?php if ( is_singular('areas') ) { ?><?php // JSON IF STATEMENT START ?>

    <?php  //  Calls the json function from '_functions/template/area-json.php'  //

    hobbes_area_json(); ?>

  <?php } elseif ( is_singular('premises') ) { ?>

    <?php  //  Calls the json function from '_functions/template/premises-json.php'  //

    hobbes_premises_json(); ?>

  <?php } else { ?>
  
    <?php  //  Calls the json function from '_functions/template/json.php'  //

    hobbes_json(); ?>

  <?php } ?><?php // JSON IF STATEMENT END ?>
  
<?php } endif;