<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default sidebar for the whole site. Called in via the sidebar.php file.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<aside id="default" class="grid-item is-third">

  <div class="content no-overflow is-card-2">

    <div class="grid is-multiline">

    <?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>
    
      <?php dynamic_sidebar( 'default-sidebar' ); ?>

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