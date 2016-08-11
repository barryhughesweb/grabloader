<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the blocks of aggregates 
//  from the front page.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php //  Aggregates Feed Section Start  // ?>
<?php $item = 1; if( have_rows('aggregates_list') ): ?>

<section id="feed--aggregates" class="has-padding-top--triple has-padding--bottom has-box-shadow">

  <div class="container--xlarge">

    <div class="grid is-wide is-multiline">

      <?php // loop through rows (parent repeater)
      while( have_rows('aggregates_list') ): the_row(); ?>
        
        <div class="item<?php echo $item; ?> grid-item is-third-tablet is-quarter-desktop has-margin-bottom--double">
            <div class="aggregate">
              <div class="aggregate-content is-centered is-uppercase is-primary is-blank-colour has-padding--all">
                <div class="box-content">
                  <b><?php the_sub_field('heading');?></b>
                </div>
              </div>
              <div class="aggregate-content-2">
                <?php $img = get_sub_field('image'); ?>
                  <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['smallslider-image']; ?>')">
                    <img src="<?php echo $img['sizes']['smallslider-image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                  </div>
                  <div class="aggregate-text">
                    <?php the_sub_field('text');?>
                      <div class="aggregate-button">
                        <?php 

                        $button = get_sub_field('button');

                        if( !empty($button) ): ?>
                          
                        <div class="aggregate-button-inside">
                          <a class="button has-margin-top--half has-margin-bottom--desktop" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button'); ?></a>
                        </div>

                        <?php endif; ?>
                      </div>
                  </div>
              </div>
            </div>
        </div>

      <?php $item++; endwhile; // while( has_sub_field('aggregates_feed') ): ?>

    </div>

  </div>

</section>

<?php endif; // if( get_field('aggregates_feed') ): ?><?php //  Aggregates Feed Section End  // ?>