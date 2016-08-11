<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the contact page sidebar. Called in via the sidebar.php file.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<aside id="contact" class="grid-item is-third">

  <div class="content no-overflow is-card-2">

    <div class="grid is-multiline">

      <div class="widget grid-item is-whole">
        
        <div class="heading-container has-margin--bottom">
          <h2 class="is-marginless">Contact Information</h2>
          <span>Get your free quote today</span>
        </div>

        <?php //  Calls the schema address from the global options page, if there is one  //
        hobbes_full_details(); ?>
        
        <?php //  Calls the social account links from the global options page, if they exist  //
          
        hobbes_social(); ?>

      </div>
      
      <div class="widget grid-item is-whole">
        
        <div class="heading-container has-margin--bottom">
          <h2 class="is-marginless">Find Us</h2>
          <span>Near? Drop in and see us</span>
        </div>
        
        <?php $options = get_option( 'theme_options' ); if( $options['maps_link'] != '' ): ?>
        <iframe class="googlemap" src="<?php echo''. $options['maps_link'] .''; ?>"></iframe>
        <?php endif; ?><?php //  Content Section End  // ?>
        
      </div>

    </div>

  </div>

</aside>