<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'
//  for the premises custom post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-premises-page has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  
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
      <div class="grid-item is-half is-two-thirds-desktop has-margin--bottom">
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

          <a class="button is-ghost is-second has-margin-top--half has-margin-bottom--desktop" href="<?php the_field('content_second_button_link');?>"><?php the_field('content_second_button'); ?></a>

        <?php endif; ?>

      <div class="grid has-margin-top--double">
      <div class="grid-item is-half-tablet is-half-desktop has-margin--bottom">
        <iframe class="map--premises" src="<?php the_field('directions_google_map_link'); ?>"></iframe>
      </div>
      <div class="grid-item is-half-tablet is-half-desktop has-margin--bottom">
          <?php $img = get_field('area_image_premises'); ?>
          <div class="half_full_image" style="background-image:url('<?php echo $img['url']; ?>')">
              <img src="<?php echo $img['url']; ?>" alt="<?php if($img['alt']) {
              echo $img['alt'];
              } else {
              echo $img['title']; } ?>" />
          </div>
      </div>

      </div>

      </div>


<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the contact page sidebar. Called in via the sidebar.php file.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<aside id="contact" class="grid-item is-half-tablet is-third-desktop">

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

    </div>

  </div>

</aside>

    </div>
  </div>
</section><?php //  Content Section End  // ?>

<?php get_template_part( '_partials/section', 'services' ); ?>

<?php get_template_part( '_partials/section', 'who' ); ?>

<section id="small-slider" class="has-margin--bottom has-margin-bottom-triple--tablet">
 
  <div class="container--xlarge">
   
    <div class="grid is-gapless is-multiline">
      
      <div class="grid-item is-whole-tablet is-half-desktop">
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
      </div><!--
      --><div class="grid-item is-whole-tablet is-half-desktop">
        
        <div class="overlay-list has-background">
          
          <div class="grid is-gapless">
            
            <div class="grid-item is-half">
              
              <div class="list is-tertiary">
                <?php if( have_rows('overlay_list') ): ?>
                  <ul class="grid is-multiline">
                    <?php while( have_rows('overlay_list') ): the_row(); ?>
                      <li class="grid-item is-whole has-margin-bottom--half is-large"><b class="has-padding-left--half"><?php the_sub_field('item'); ?></b></li>
                    <?php endwhile; // while( has_sub_field('list') ): ?>
                  </ul>
                <?php endif; // if( get_field('list') ): ?>
              </div>
              
            </div>
            
          </div>
          
        </div>
        
        <?php 

        $info = get_field('overlay_info');

        if( !empty($info) ): ?>

          <div class="info is-marginless has-padding-left--triple has-padding-all--half">
            
            <b class="is-uppercase is-large"><?php the_field('overlay_info'); ?></b>
            
          </div>
          
        <?php endif; ?>
        
      </div>
      
    </div>
    
  </div>
  
</section>

<?php get_template_part( '_partials/section', 'note' ); ?>

<?php get_template_part( '_partials/section', 'area-feeds' ); ?>