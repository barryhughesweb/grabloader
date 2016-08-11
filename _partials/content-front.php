<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying the home
//  page content in 'page.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-front-page has-background has-margin-bottom--triple"><?php //  Hero Section Start  // ?>
  
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

<?php get_template_part( '_partials/section', 'usps' ); ?>

<?php get_template_part( '_partials/section', 'aggregates-feed' ); ?>

<?php //  Content Section Start  // ?>
<section id="content" class="has-stretcher--triple">
  <div class="container has-margin--bottom is-centered">
    <div class="heading-container has-margin--bottom">
      <h1 class="is-marginless is-uppercase"><?php the_field('heading'); ?></h1>
      <?php 

      $subheading = get_field('sub_heading');

      if( !empty($subheading) ): ?>

        <span><?php the_field('sub_heading'); ?></span>

      <?php endif; ?>
    </div>
    <?php the_content(); ?>
  </div>
  <div class="container has-box-shadow">
    <div class="grid">
      <div class="grid-item cta1">
        <a class="is-block is-paddingless is-borderless" href="<?php the_field('first_cta_link'); ?>">
          <div class="content-cta is-relative has-background">
            <span class="has-shadow"><?php the_field('first_cta'); ?></span>
          </div>
        </a>
      </div>
      <div class="grid-item">
        <div class="content-cta ctagreen is-large is-uppercase">
          <?php the_field('green_box'); ?>
        </div>
      </div>
      <div class="grid-item cta2">
        <a class="is-block is-paddingless is-borderless" href="<?php the_field('second_cta_link'); ?>">
          <div class="content-cta is-relative has-background">
            <span class="has-shadow"><?php the_field('second_cta'); ?></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section><?php //  Content Section End  // ?>

<?php get_template_part( '_partials/section', 'reviews' ); ?>

<section id="small-slider" class="has-margin-bottom--triple">
 
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

<?php //  Coverage Map Section Start  // ?>
<section id="map--coverage" class="has-box-shadow">
  <iframe src="<?php the_field('coverage_map'); ?>"></iframe>
</section><?php //  Coverage Map Section End  // ?>

<?php //  List Section Start  // ?>
<section id="list" class="has-stretcher--triple">
  <div class="container is-centered">
    <h2 class="has-margin--bottom is-uppercase is-highlighted"><?php the_field('list_heading'); ?></h2>
    <?php if( have_rows('list') ): ?>
      <ul class="grid is-multiline is-left has-margin--left">
        <?php while( have_rows('list') ): the_row(); ?>
          <li class="grid-item is-third is-uppercase is-large"><b class="has-padding--left"><?php the_sub_field('item'); ?></b></li>
        <?php endwhile; // while( has_sub_field('list') ): ?>
      </ul>
    <?php endif; // if( get_field('list') ): ?>
  </div>
</section><?php //  List Section End  // ?>