<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'
//  for the areas custom post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-area-page has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  
  <div class="container--xlarge">
    
    <div class="grid">
      
      <div class="grid-item is-third-tablet is-offset-two-thirds-tablet">
        <div class="callback is-centered has-stretcher--double has-padding--all">
          <p class="is-secondary-font is-h1 is-fancy is-uppercase">Quick Callback</p>
          <p class="is-secondary-font"><b><small>If you would like our team to call you, simply complete the form below...</small></b></p>
          <?php gravity_form('Callback Request Form', false, false, false, '', false); ?>
        </div>
      </div>
      
    </div>
    
  </div>
  
</section><?php //  Hero Section End  // ?>

<?php //  Content Section Start  // ?>
<section id="content" class="has-margin-bottom--triple">
  <div class="container--xlarge">
    <div class="grid is-wide is-multiline">
      <div class="grid-item is-half has-margin--bottom">
        <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
          <h1 class="is-marginless is-xlarge"><?php the_field('heading'); ?></h1>
          <?php 

          $subheading = get_field('sub_heading');

          if( !empty($subheading) ): ?>

            <span><?php the_field('sub_heading'); ?></span>

          <?php endif; ?>
        </div>
        <?php the_content(); ?>
        <?php 

        $content_button = get_field('content_button');

        if( !empty($content_button) ): ?>

          <a class="button has-margin-top--half has-margin-bottom--desktop" href="<?php the_field('content_button_link');?>"><?php the_field('content_button'); ?></a>

        <?php endif; ?>
        <?php 

        $content_button2 = get_field('content_second_button');

        if( !empty($content_button2) ): ?>

          <a class="button is-ghost is-second has-margin-top--half has-margin--bottom" href="<?php the_field('content_second_button_link');?>"><?php the_field('content_second_button'); ?></a>

        <?php endif; ?>
      </div>
      <div class="grid-item is-half">
        <?php if( have_rows('small_slider') ): ?>
          <div class="bxslider--small">
            <?php while( have_rows('small_slider') ): the_row(); ?>
              <div class="slide-image">
                <?php $image = get_sub_field('slide_image'); $size = 'smallslider-image'; if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                } ?>
              </div>
            <?php endwhile; // while( has_sub_field('slide_image') ): ?>
          </div>
        <?php endif; // if( get_field('slide_image') ): ?>
      </div>
      <div class="grid-item is-half-tablet is-quarter-desktop has-margin--bottom has-margin--top is-marginless-top--tablet">
        <iframe class="map--premises" src="<?php the_field('directions_google_map_link'); ?>"></iframe>
      </div>
      <div class="grid-item is-half-tablet is-quarter-desktop has-margin--bottom">
          <?php $img = get_field('area_image'); ?>
          <div class="half_full_image" style="background-image:url('<?php echo $img['url']; ?>')">
              <img src="<?php echo $img['url']; ?>" alt="<?php if($img['alt']) {
              echo $img['alt'];
              } else {
              echo $img['title']; } ?>" />
          </div>
      </div>
      <div class="grid-item is-whole-tablet is-half-desktop has-margin--bottom">
        <aside>
          <div class="grid content no-overflow is-marginless">
            <div class="grid-item is-half-tablet">
            <div class="heading-container has-margin--bottom">
              <h3 class="is-marginless">Find Us</h3>
            </div>
            <?php //  This calls just the address  //

            hobbes_address(); ?>
            <p>Telephone: <?php //  Calls the phone number from the global options page, if it exists  //

              hobbes_phone_number(); ?></p>
            <p>Email: <?php //  Calls the phone number from the global options page, if it exists  //

            hobbes_email_address(); ?></p>
              </div>
              <div class="grid-item is-half-tablet">
                <?php //  This calls the opening times  //

                hobbes_opening_times(); ?>
              </div>
          </div>
        </aside>
      </div>
      
    </div>
  </div>
</section><?php //  Content Section End  // ?>

<?php get_template_part( '_partials/section', 'services' ); ?>

<?php get_template_part( '_partials/section', 'reviews' ); ?>

<?php get_template_part( '_partials/section', 'usps' ); ?>

<?php get_template_part( '_partials/section', 'lightbox' ); ?>

<?php get_template_part( '_partials/section', 'note' ); ?>

<?php get_template_part( '_partials/section', 'area-feeds' ); ?>