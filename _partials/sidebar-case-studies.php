<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the case studies sidebar. Called in via the sidebar.php file.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<aside id="default" class="grid-item is-third">

  <div class="content no-overflow">
    
    <h2>Case Study Finder</h2>

    <div class="grid is-multiline">

    <?php if ( is_active_sidebar( 'case-studies-sidebar' ) ) : ?>
    
      <?php dynamic_sidebar( 'case-studies-sidebar' ); ?>

    <?php else :

      //  If there are no widgets set, then do all this stuff instead!  // ?>

      <div class="widget grid-item is-whole">
        <p class="widget-title"><?php _e( 'Archives', 'hobbes' ); ?></p>
        <ul>
          <?php wp_get_archives('type=monthly'); ?>
        </ul>
      </div><!--

      --><div class="widget grid-item is-whole">
        <p class="widget-title"><?php _e( 'Categories', 'hobbes' ); ?></p>
        <ul>
          <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
      </div>

    <?php endif; ?>

    </div>

  </div>

</aside>