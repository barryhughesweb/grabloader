<?php

//  Template Name: Sitemap

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
 
  <div class="container--xlarge">
    
    <div class="grid is-wide">
      <div class="grid-item">
        <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
          <h1 class="is-marginless"><?php the_field('heading'); ?></h1>
          <?php 

          $subheading = get_field('sub_heading');

          if( !empty($subheading) ): ?>

            <span><?php the_field('sub_heading'); ?></span>

          <?php endif; ?>
        </div>
        <?php the_content(); ?>

        <div class="grid is-multiline">
          <div class="grid-item is-third has-margin--bottom">
            <h2 class="heading"><b><?php $nav_menu = wp_get_nav_menu_object(6); echo $nav_menu->name; ?></b></h2>
            <p>Select a link below</p>
            <?php wp_nav_menu(array('theme_location' => 'first-sitemap-menu', 'container_class' => 'sitemap-menu')); ?>
          </div>
          <div class="grid-item is-third has-margin--bottom">
            <h2 class="heading"><b><?php $nav_menu = wp_get_nav_menu_object(3); echo $nav_menu->name; ?></b></h2>
            <p>Take a look at the services we provide</p>
            <?php wp_nav_menu(array('theme_location' => 'second-sitemap-menu', 'container_class' => 'sitemap-menu')); ?>
          </div>
          <div class="grid-item is-third has-margin--bottom">
            <h2 class="heading"><b><?php $nav_menu = wp_get_nav_menu_object(5); echo $nav_menu->name; ?></b></h2>
            <p>Do we operate in your area? Select your nearest area below to find out.</p>
            <?php wp_nav_menu(array('theme_location' => 'third-sitemap-menu', 'container_class' => 'sitemap-menu')); ?>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
</section>

<?php endwhile; ?>

<?php get_footer(); ?>