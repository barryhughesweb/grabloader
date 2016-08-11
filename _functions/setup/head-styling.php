<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Calls the header specific styling which may include IF statements etc.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_head_styling' ) ) :

function hobbes_head_styling() { ?>
  
  <style type="text/css">
    
    <?php if( is_front_page() || is_singular('premises') ) { ?> <?php // IF STATEMENT START ?>
    
      <?php // AGGREGATES FEED - IF STATEMENT START ?>
      <?php $item = 1; if( have_rows('aggregates_feed') ): ?>
        
        <?php // loop through rows (parent repeater)
        while( have_rows('aggregates_feed') ): the_row();
        $size = "aggregates-item";
        $image_id = get_sub_field('image');
        $image_url_array = wp_get_attachment_image_src( $image_id, $size );
        $image_url = $image_url_array[0]; ?>
          
          #feed--aggregates .item<?php echo $item; ?> .has-background {
            background-image: url(<?php echo $image_url; ?>);
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale');
            -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale')";
          }
          
        <?php $item++; endwhile; // while( has_sub_field('aggregates_feed') ): ?>
        
      <?php endif; // if( get_field('aggregates_feed') ): ?><?php // AGGREGATES FEED - IF STATEMENT END ?>
      
      <?php
      
      $first_cta_image_id = get_field('first_cta_image');
      $second_cta_image_id = get_field('second_cta_image');
      $size = "smallslider-image";
      $first_cta_image_url_array = wp_get_attachment_image_src($first_cta_image_id, $size, true);
      $first_cta_image_url = $first_cta_image_url_array[0];
      $second_cta_image_url_array = wp_get_attachment_image_src($second_cta_image_id, $size, true);
      $second_cta_image_url = $second_cta_image_url_array[0];
      
      if( !empty($first_cta_image_id) ): ?>
        
        .cta1 .content-cta {
          background-image: url(<?php echo $first_cta_image_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $first_cta_image_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $first_cta_image_url; ?>', sizingMethod='scale')";
        }
        
        .cta2 .content-cta {
          background-image: url(<?php echo $second_cta_image_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $second_cta_image_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $second_cta_image_url; ?>', sizingMethod='scale')";
        }
        
      <?php else : ?>
        
        .cta1 .content-cta {
          background-image: url(<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale')";
        }
        
        .cta2 .content-cta {
          background-image: url(<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale')";
        }
        
      <?php endif; ?>
      
      <?php
      
      $image_id = get_field('overlay_under_image');
      $size = "smallslider-image";
      $image_url_array = wp_get_attachment_image_src( $image_id, $size, true );
      $image_url = $image_url_array[0];

      if( !empty($image_id) ): ?>

        .overlay-list {
          background-image: url(<?php echo $image_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale')";
        }

      <?php else : ?>

        .overlay-list {
          background-image: url(<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg', sizingMethod='scale')";
        }

      <?php endif; ?>
    
    <?php } ?><?php // IF STATEMENT END ?>
    
    <?php if ( is_page() || is_singular() ) { ?><?php // IF STATEMENT START ?>
      
      <?php
      
      $image_id = get_post_thumbnail_id();
      $image_url_array = wp_get_attachment_image_src($image_id, 'hero-image', true);
      $image_url = $image_url_array[0];
      
      if( !empty($image_id) ): ?>
        
        #hero {
          background-image: url(<?php echo $image_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale')";
        }
        
      <?php else : ?>
        
        #hero {
          background-color: none;
        }
        
      <?php endif; ?>
      
    <?php } ?><?php // IF STATEMENT END ?>
    
    <?php if ( is_singular('services') ) { ?><?php // IF STATEMENT START ?>
      
      <?php
      $image_id = get_field('heading_background');
      $image_url_array = wp_get_attachment_image_src($image_id, 'lightbox-heading', true);
      $image_url = $image_url_array[0];
      
      if( !empty($image_id) ): ?>
        
        #lightbox .heading {
          background-image: url(<?php echo $image_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale')";
        }
        
      <?php else : ?>
        
        #lightbox .heading {
          background-color: none;
        }
        
      <?php endif; ?>
      
      <?php // LIGHTBOX GRID - IF STATEMENT START ?>
      <?php $item = 1; if( have_rows('lightbox') ): ?>
        
        <?php // loop through rows (parent repeater)
        while( have_rows('lightbox') ): the_row();
        $size = "lightbox-item";
        $image_id = get_sub_field('item_image');
        $image_url_array = wp_get_attachment_image_src( $image_id, $size );
        $image_url = $image_url_array[0]; ?>
          
          #lightbox .item<?php echo $item; ?> {
            background-image: url(<?php echo $image_url; ?>);
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale');
            -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $image_url; ?>', sizingMethod='scale')";
          }
          
        <?php $item++; endwhile; // while( has_sub_field('lightbox') ): ?>
        
      <?php endif; // if( get_field('lightbox') ): ?><?php // LIGHTBOX GRID - IF STATEMENT END ?>
      
      <?php
      $background_url = get_field('other_services_background');
      
      if( !empty($background_url) ): ?>
        
        #other-services {
          background-image: url(<?php echo $background_url; ?>);
          filter: progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $background_url; ?>', sizingMethod='scale');
          -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?php echo $background_url; ?>', sizingMethod='scale')";
        }
        
      <?php endif; ?>
      
    <?php } ?><?php // IF STATEMENT END ?>
    
  </style>
  
<?php }
  
endif;