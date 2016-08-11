<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Calls the header specific scripts which may include IF statements etc.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_footer_scripts' ) ) :

function hobbes_footer_scripts() { ?>
 
  <script src="<?php bloginfo('template_directory'); ?>/build/browser/outdatedbrowser.min.js"></script>
  
  <script type="text/javascript">
    $( document ).ready(function() {
      outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: ''
      })
    })
  </script>
  
  <!--[if lt IE 10]>
  <script>svgeezy.init(false, 'png');</script>
  <![endif]-->
  
<?php } endif;