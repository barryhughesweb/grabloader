<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); if ( is_front_page() ) :

  //  Retrieves the relevant format for front page. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'front' );
  
  else :

  //  Retrieves the relevant format for the template. Post format parts
  //  can be found within the '_partials' folder.

  get_template_part( '_partials/content', 'page' ); ?>

<?php endif; endwhile; ?>

<?php get_footer(); ?>