<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for archive pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section id="hero" class="is-small has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  <div class="is-primary">
    <div class="hero-content is-relative container--xlarge has-clearfix">
      <div class="hero-text">
        <span class="title is-marginless">Archive</span>
        <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div id="breadcrumb">','</div>');
        } ?>
      </div>
    </div>
  </div>
</section><?php //  Hero Section End  // ?>

<section id="news" class="container--xlarge has-margin-bottom--double">
  
  <div class="grid is-wide">
    
    <div class="grid-item is-two-thirds">
    
      <?php if ( have_posts() ) : ?>
        
        <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
          <h1 class="is-marginless"><?php
        if ( is_category() ) :
          single_cat_title();
          
        elseif ( is_tag() ) :
          single_tag_title();
          
        elseif ( is_author() ) :
          printf( __( 'Author: %s', 'hobbes' ), '' . get_the_author() . '' );
          
        elseif ( is_day() ) :
          printf( __( 'Day: %s', 'hobbes' ), '' . get_the_date() . '' );
          
        elseif ( is_month() ) :
          printf( __( 'Month: %s', 'hobbes' ), '' . get_the_date( _x( 'F Y', 'monthly archives date format', 'hobbes' ) ) . '' );
          
        elseif ( is_year() ) :
          printf( __( 'Year: %s', 'hobbes' ), '' . get_the_date( _x( 'Y', 'yearly archives date format', 'hobbes' ) ) . '' );
          
        elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
          _e( 'Asides', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
          _e( 'Galleries', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
          _e( 'Images', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
          _e( 'Videos', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
          _e( 'Quotes', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
          _e( 'Links', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
          _e( 'Statuses', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
          _e( 'Audios', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
          _e( 'Chats', 'hobbes' );
          
        else :
          _e( 'Archives', 'hobbes' );
          
        endif;
      ?></h1>
            <?php

              // Show an optional term description

              $term_description = term_description();

              if ( ! empty( $term_description ) ) :
                printf( '<span class="taxonomy-description">%s</span>', $term_description );
              endif;

            ?>
        </div>

        <?php

        //  Start the loop

        while ( have_posts() ) : the_post(); ?>

        <?php

        //  Retrieves the relevant format for the template. Post format parts
        //  can be found within the '_partials' folder.

        get_template_part( '_partials/content', get_post_format() ); ?>

        <?php endwhile; ?>

          <?php

          //  Calls the pagenation function from '_default/template-tags.php'

          hobbes_paging_nav(); ?>

        <?php else : ?>

          <?php get_template_part( '_partials/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>

    --><?php get_sidebar(); ?>
    
  </div>
  
</section>

<?php get_footer(); ?>