<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying search results.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section>

  <div class="with__aside">
    
    <?php if ( have_posts() ) : ?>
   
      <h1><?php printf( __( 'Search Results for: %s', 'hobbes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php

        //  Retrieves the relevant format for the template. Post format parts
        //  can be found within the '_partials' folder.

        get_template_part( '_partials/content', 'search' ); ?>

      <?php endwhile; ?>

        <?php

        //  Calls the pagenation function from '_default/template-tags.php'

        hobbes_paging_nav(); ?>

      <?php else : ?>

      <?php get_template_part( '_partials/content', 'none' ); ?>

    <?php endif; ?>
    
  </div><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>
  
  --><?php get_sidebar(); ?>
  
</section>

<?php get_footer(); ?>