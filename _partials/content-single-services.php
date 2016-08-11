<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-small has-background"><?php //  Hero Section Start  // ?>
  <div class="is-primary">
    <div class="hero-content is-relative container--xlarge has-clearfix">
      <div class="hero-text">
        <?php the_title( '<span class="title is-marginless">', '</span>' ); ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div id="breadcrumb">','</div>');
        } ?>
      </div>
    </div>
  </div>
</section><?php //  Hero Section End  // ?>

<?php //  Content Section Start  // ?>
<section id="content">
  <div class="container--xlarge">
    <div class="grid is-wide">
      <div class="grid-item is-half has-margin-top--triple has-margin-bottom--double">
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

          <a class="button has-margin-top--half has-margin--bottom" href="<?php the_field('content_button_link');?>"><?php the_field('content_button'); ?></a>

        <?php endif; ?>
        <?php 

        $content_button2 = get_field('content_second_button');

        if( !empty($content_button2) ): ?>

          <a class="button is-ghost is-second has-margin-top--half has-margin--bottom" href="<?php the_field('content_second_button_link');?>"><?php the_field('content_second_button'); ?></a>

        <?php endif; ?>
      </div>
      <div class="grid-item is-half">
        <div id="lightbox">
          <div class="heading is-centered has-padding-all--double">
            <h2 class="is-marginless has-padding-all--half is-secondary--solid is-blank-colour"><?php the_field('lightbox_heading'); ?></h2>
          </div>
          <?php $item = 1; if( have_rows('lightbox') ): ?>
            <div class="grid is-gapless is-multiline">
              <?php while( have_rows('lightbox') ): the_row(); ?>
                <?php
                $image_id = get_sub_field('item_image');
                $image_url_array = wp_get_attachment_image_src($image_id, '_wp_attachment_image_alt', true);
                $image_url = $image_url_array[0];
                $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true); ?>
                <div class="grid-item is-half">
                  <a class="litebox item<?php echo $item; ?> is-relative is-paddingless has-background" href="<?php echo $image_url; ?>" title="<?php echo $image_alt; ?>">
                    <span class="inner"></span>
                  </a>
                </div>
              <?php $item++; endwhile; // while( has_sub_field('list') ): ?>
            </div>
          <?php endif; // if( get_field('list') ): ?>
          <div class="banner is-centered has-padding-all--half is-secondary--solid">
            <span class="is-large is-uppercase"><strong><?php the_field('phone_number_text'); ?><?php //  Calls the phone number from the global options page, if it exists  //
            hobbes_phone_number(''); ?></strong></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php //  Content Section End  // ?>

<?php get_template_part( '_partials/section', 'note' ); ?>

<?php //  Additonal Content Section Start  // ?>
<?php 

$additional_content = get_field('additional_content');

if( !empty($additional_content) ): ?>

<section id="additonal-content">

  <div class="container--xlarge">
    
    <div class="grid is-wide">
     
      <div class="grid-item is-half">
        <?php if( have_rows('slider') ): ?>
          <div class="bxslider--service">
            <?php while( have_rows('slider') ): the_row(); ?>
              <div class="slide-image">
                <?php $image = get_sub_field('slide_image'); $size = 'serviceslider-image'; if( $image ) {
                  echo wp_get_attachment_image( $image, $size );
                } ?>
              </div>
            <?php endwhile; // while( has_sub_field('slide_image') ): ?>
          </div>
        <?php endif; // if( get_field('slide_image') ): ?>
      </div>
      
      <div class="grid-item is-half has-margin-top--triple">
       
        <?php the_field('additional_content'); ?>
        <?php 

        $additonal_content_button = get_field('additonal_content_button');

        if( !empty($additonal_content_button) ): ?>

          <a class="button has-margin-top--half has-margin--bottom" href="<?php the_field('additonal_content_button_link');?>"><?php the_field('additonal_content_button'); ?></a>

        <?php endif; ?>
        <?php 

        $additonal_content_button2 = get_field('additonal_content_second_button');

        if( !empty($additonal_content_button2) ): ?>

          <a class="button is-ghost is-second has-margin-top--half has-margin--bottom" href="<?php the_field('additonal_content_second_button_link');?>"><?php the_field('additonal_content_second_button'); ?></a>

        <?php endif; ?>
        <?php 

        $info = get_field('info');

        if( !empty($info) ): ?>

          <div class="is-info has-margin--top has-padding-left--triple has-padding--all">
            
            <b><?php the_field('info'); ?></b>
            
          </div>
          
        <?php endif; ?>
      </div>
      
    </div>

  </div>

</section>

<?php endif; ?><?php //  Additonal Content Section End  // ?>

<?php get_template_part( '_partials/section', 'casestudies-feed' ); ?>

<?php //  Other Services Section Start  // ?>
<section id="other-services" class="has-background">
  
  <div class="content has-stretcher--triple">
    
    <div class="container--xlarge">
   
      <div class="grid">

        <div class="grid-item is-whole">
          <h2 class="is-xlarge is-borderless"><?php the_field('other_services_heading'); ?></h2>
          <?php the_field('other_services_content'); ?>
          <div class="items">
            <?php if( have_rows('items') ): ?>
              <div class="grid is-multiline">
                <?php while( have_rows('items') ): the_row(); ?>
                  <div class="grid-item is-quarter has-margin--bottom">
                    <?php 

                    $icon = get_sub_field('icon');

                    if( !empty($icon) ): ?>

                      <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />

                    <?php endif; ?>
                    <strong class="is-medium"><?php the_sub_field('text'); ?></strong>
                  </div>
                <?php endwhile; // while( has_sub_field('list') ): ?>
              </div>
            <?php endif; // if( get_field('list') ): ?>
          </div>
          <?php 

          $other_services_button = get_field('other_services_button');

          if( !empty($other_services_button) ): ?>

            <a class="button" href="<?php the_field('other_services_button_link');?>"><?php the_field('other_services_button'); ?></a>

          <?php endif; ?>
          <a class="button is-invert" href="/contact-us">Contact Us</a>
        </div>

      </div>

    </div>
    
  </div>
  
</section><?php //  Other Services Section End  // ?>