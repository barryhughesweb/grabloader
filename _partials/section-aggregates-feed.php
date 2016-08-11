<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the blocks of aggregates 
//  from the front page.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php //  Aggregates Feed Section Start  // ?>
<?php $item = 1; if( have_rows('aggregates_feed', 50) ): ?>

<section id="feed--aggregates" class="has-padding-top--triple has-padding--bottom has-box-shadow">

  <div class="container--xlarge">

    <div class="grid is-wide is-multiline">

      <?php // loop through rows (parent repeater)
      while( have_rows('aggregates_feed', 50) ): the_row(); ?>
        
        <div class="item<?php echo $item; ?> grid-item is-third-tablet is-quarter-desktop has-margin-bottom--double">
          <a class="is-block is-paddingless image has-background" href="<?php the_sub_field('link'); ?>">
            <div class="aggregate is-primary">
              <div class="aggregate-content is-centered is-uppercase is-pimary is-blank-colour has-padding--all">
                <b><?php the_sub_field('heading');?></b>
              </div>
            </div>
          </a>
        </div>

      <?php $item++; endwhile; // while( has_sub_field('aggregates_feed') ): ?>

    </div>

  </div>

</section>

<?php endif; // if( get_field('aggregates_feed') ): ?><?php //  Aggregates Feed Section End  // ?>