<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying all single posts

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); if ( is_singular('services') ) :

  //  Retrieves the relevant format for front page. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'single-services' );

  elseif ( is_singular('case_studies') ) :

  //  Retrieves the relevant format for the template. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'single-case-studies' );

  elseif ( is_singular('areas') ) :

  //  Retrieves the relevant format for the template. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'single-areas' );

  elseif ( is_singular('premises') ) :

  //  Retrieves the relevant format for the template. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'single-premises' );
  
  else :

  //  Retrieves the relevant format for the template. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'single' ); ?>

<?php endif; endwhile; ?>

<?php get_footer(); ?>