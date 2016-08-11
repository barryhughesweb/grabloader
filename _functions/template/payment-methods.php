<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the payment methods

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_payment_methods' ) ) :

function hobbes_payment_methods() {
  
  $options = get_option( 'theme_options' ); ?>
  
  <div id="payment-methods">
    
    <div class="grid is-narrow is-mobile is-multiline">
      
      <?php if( $options['cash_selection'] == 'Cash' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/cash.svg" alt="Cash">
      </div>
      <?php endif; ?>
      <?php if( $options['cheque_selection'] == 'Cheque' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/cheque.svg" alt="Cheque">
      </div>
      <?php endif; ?>
      <?php if( $options['directdebit_selection'] == 'Direct Debit' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/directdebit.svg" alt="Direct Debit">
      </div>
      <?php endif; ?>
      <?php if( $options['bacs_selection'] == 'Bacs' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/bacs.svg" alt="Bacs">
      </div>
      <?php endif; ?>
      <?php if( $options['visa_selection'] == 'Visa' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/visa.svg" alt="Visa">
      </div>
      <?php endif; ?>
      <?php if( $options['mastercard_selection'] == 'MasterCard' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/mastercard.svg" alt="MasterCard">
      </div>
      <?php endif; ?>
      <?php if( $options['maestro_selection'] == 'Maestro' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/maestro.svg" alt="Maestro">
      </div>
      <?php endif; ?>
      <?php if( $options['cirrus_selection'] == 'Cirrus' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/cirrus.svg" alt="Cirrus">
      </div>
      <?php endif; ?>
      <?php if( $options['americanexpress_selection'] == 'American Express' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/americanexpress.svg" alt="American Express">
      </div>
      <?php endif; ?>
      <?php if( $options['solo_selection'] == 'Solo' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/solo.svg" alt="Solo">
      </div>
      <?php endif; ?>
      <?php if( $options['switch_selection'] == 'Switch' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/switch.svg" alt="Switch">
      </div>
      <?php endif; ?>
      <?php if( $options['paypal_selection'] == 'PayPal' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/paypal.svg" alt="PayPal">
      </div>
      <?php endif; ?>
      <?php if( $options['square_selection'] == 'Square' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/square.svg" alt="Square">
      </div>
      <?php endif; ?>
      <?php if( $options['applepay_selection'] == 'Apple Pay' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/applepay.svg" alt="Apple Pay">
      </div>
      <?php endif; ?>
      <?php if( $options['sage_selection'] == 'Sage' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/sage.svg" alt="Sage">
      </div>
      <?php endif; ?>
      <?php if( $options['worldpay_selection'] == 'Worldpay' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/worldpay.svg" alt="Worldpay">
      </div>
      <?php endif; ?>
      <?php if( $options['verisignsecured_selection'] == 'VeriSign Secured' ): ?>
      <div class="grid-item is-sixth-mobile is-tenth-tablet has-margin-bottom--half">
        <img src="<?php bloginfo('template_directory'); ?>/img/_payments/verisignsecured.svg" alt="VeriSign Secured">
      </div>
      <?php endif; ?>
    </div>
    
  </div>
  
<?php } endif;