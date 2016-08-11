<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying the footer. It is used universally,
//  for all posts and page templates.
//
//  It contains the closing tags for <main> and for the opening .container div.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="advicecentre" class="is-primary--solid has-stretcher--triple">
  
  <div class="container--xlarge">
    
    <div class="grid is-wide">
      
      <div class="grid-item is-two-thirds">
        <h2 class="is-fancy is-blank-colour has-margin-bottom--half is-uppercase">Information Advice Centre</h2>
        <span class="is-block has-margin--bottom is-xlarge is-uppercase">Call now for free help and support</span>
        <p>We understand that it isn't always easy to specify what you are looking for, so we are happy to take time to discuss your specific needs and requirements.</p>
      </div><!--
      --><div class="grid-item is-third">
        <?php //  Calls the phone number from the global options page, if it exists  //
        
        hobbes_phone_number(); ?>
        <div class="bordered has-padding-top--half has-padding--right has-padding-bottom--half has-padding--left is-blank-colour is-centered is-uppercase is-large">
          <p class="has-margin-bottom--half">Mon-Fri 8am to 6pm</p>
          <p class="is-marginless">Sat 9am to 12pm</p>
        </div>
      </div>
      
    </div>
    
  </div>
  
</section>

</main><?php //  End  // ?>

<footer class="has-stretcher--double">
  
  <div class="container--xlarge">
    
    <div class="grid is-uppercase">
      
      <div class="grid-item is-two-thirds">
        <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //
        
        hobbes_clean_nav('footer-menu-1','footer-nav'); ?>
        <?php //  This calls just the address  //
        
        hobbes_address(); ?>
        <?php //  Calls the phone number from the global options page, if it exists  //
          
        hobbes_email_address('Email: '); ?>
        <?php //  Calls the phone number from the global options page, if it exists  //
          
        hobbes_footer_phone_number('Tel: '); ?>
        <p class="is-small is-marginless"><?php
        $options = get_option( 'theme_options' );
        //  Comapny Number  //
        if ( $options['company_number'] != '' ) { 
          echo'Company No. '. $options['company_number'] .'';
        } ?>
        <?php
        $options = get_option( 'theme_options' );
        //  VAT Number  //
        if ( $options['vat_number'] != '' ) { 
          echo'<br>VAT No. '. $options['vat_number'] .'';
        } ?></p>
        <p class="is-small is-marginless">Copyright &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?><br>Website by <a class="is-borderless" href="http://www.optimumwebdesign.co.uk" target="_blank">Optimum Web Design</a>
      </div><!--
      --><div class="grid-item is-third has-margin--top is-marginless-top--tablet">
        <?php  //  Calls the logo schema function from '_default/template-tags.php'  //
    
        hobbes_logo(); ?>
      </div>
      
    </div>
    
  </div>
  
</footer>

<?php get_template_part( '_partials/update', 'browser' ); ?>

<?php  //  Calls the footer specific scripts function from '_functions/setup/footer-scripts.php'  //
  
hobbes_footer_scripts(); ?>

<?php wp_footer(); ?>

</body>
</html>