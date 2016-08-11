<?php

//  Template Name: Contact Page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section id="hero" class="is-small has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  <div class="is-primary">
    <div class="hero-content is-relative container--xlarge has-clearfix">
      <div class="hero-text">
        <?php the_title( '<span class="title is-marginless">', '</span>' ); ?>
      </div>
      <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<div id="breadcrumb">','</div>');
      } ?>
    </div>
  </div>
</section><?php //  Hero Section End  // ?>

<?php //  Content Section Start  // ?>
<section id="content" class="has-margin-bottom--triple">
  <div class="container--xlarge">
    <div class="grid is-wide">
      <div class="grid-item is-two-thirds">
        <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
          <h1 class="is-marginless"><?php the_field('heading'); ?></h1>
          <?php 

          $subheading = get_field('sub_heading');

          if( !empty($subheading) ): ?>

            <span><?php the_field('sub_heading'); ?></span>

          <?php endif; ?>
        </div>
        <?php the_content(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section><?php //  Content Section End  // ?>

<?php get_footer(); ?>