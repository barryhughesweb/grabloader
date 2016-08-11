<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the main template file. It is used to display a page if nothing
//  more specific matches a query. It puts together the home page where no
//  'home.php' template exists.
//
//  Learn more: http://codex.wordpress.org/Template_Hierarchy

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section id="hero" class="is-small has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  <div class="is-primary">
    <div class="hero-content is-relative container--xlarge has-clearfix">
      <div class="hero-text">
         <span class="title is-marginless">News</span>
        <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div id="breadcrumb">','</div>');
        } ?>
      </div>
    </div>
  </div>
</section><?php //  Hero Section End  // ?>

<section id="news" class="container--xlarge has-margin-bottom--triple">
  
  <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
    <h1 class="is-marginless"><?php the_field('heading', 52); ?></h1>
    <?php 

    $subheading = get_field('sub_heading', 52);

    if( !empty($subheading) ): ?>

      <span><?php the_field('sub_heading', 52); ?></span>

    <?php endif; ?>
  </div>
  
  <div class="grid is-wide">
    
    <div class="grid-item is-two-thirds">
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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