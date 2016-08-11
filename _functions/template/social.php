<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the social account links

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_social' ) ) :

function hobbes_social() {
  
  $options = get_option( 'theme_options' ); ?>
  
  <div class="social-links">
  
    <div class="grid is-narrow is-multiline is-mobile">

      <?php if( $options['facebook_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $facebook = $options['facebook_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $facebook; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--facebook.svg" alt="Facebook Page"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['twitter_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $twitter = $options['twitter_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $twitter; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--twitter.svg" alt="Twitter Profile"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['g_plus_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $googleplus = $options['g_plus_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $googleplus; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--google.svg" alt="Google+ Page"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['instagram_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $instagram = $options['instagram_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $instagram; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--instagram.svg" alt="Instagram Account"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['youtube_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $youtube = $options['youtube_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $youtube; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--youtube.svg" alt="Youtube Channel"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['pinterest_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $pinterest = $options['pinterest_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $pinterest; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--pinterest.svg" alt="Pinterest Account"></a>
      </div>
      <?php endif; ?>
      <?php if( $options['snapchat_link'] != '' ): ?>
      <div class="grid-item as-needed">
        <?php $snapchat = $options['snapchat_link']; ?>
        <a class="is-block is-borderless" href="<?php echo $snapchat; ?>" target="_blank"><img class="aligncenter is-32x32 is-marginless" src="<?php bloginfo('template_directory'); ?>/img/_social/icon--snapchat.svg" alt="Snpachat Account"></a>
      </div>
      <?php endif; ?>
      
    </div>
  
  </div>
    
  <?php } endif;