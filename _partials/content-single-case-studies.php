<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-small has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
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
<section id="content" class="has-margin-bottom--triple">
  
  <div class="container--small is-centered">
    
    <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
      <h1 class="is-marginless is-xlarge"><?php the_field('heading'); ?></h1>
      <?php 

      $subheading = get_field('sub_heading');

      if( !empty($subheading) ): ?>

        <span><?php the_field('sub_heading'); ?></span>

      <?php endif; ?>
    </div>
    <?php the_content(); ?>
    
  </div>
  
</section><?php //  Content Section End  // ?>

<?php //  Content Section Start  // ?>
<section id="content" class="has-margin-bottom--triple">
  
  <div class="container--xlarge">
    
              <div class="images">
                
                <div class="grid is-wide">
                  <div class="grid-item is-half">
                    <?php $image = get_field('additional_featured_image'); $size = 'smallslider-image'; if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    } ?>
                  </div>
                  <div class="grid-item is-half">
                    <?php if ( has_post_thumbnail() ) {
                      echo get_the_post_thumbnail( $post_id, 'smallslider-image' );
                    } else { ?>
                      <img src="<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                  </div>
                </div>
                
              </div>
    
  </div>
  
</section><?php //  Content Section End  // ?>