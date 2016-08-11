<?php

//  Template Name: Aggregates

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

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

<section id="content" class="has-margin-bottom--triple">
 
  <div class="container has-margin--bottom is-centered">
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
  
</section>

<?php get_template_part( '_partials/section', 'aggregates-list' ); ?>

<?php get_template_part( '_partials/section', 'reviews' ); ?>

<?php get_template_part( '_partials/section', 'casestudies-feed' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>