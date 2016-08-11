<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the services

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php //  Service Section Start  // ?>
<?php $service = 1; if( have_rows('service', 63) ): ?>

<section id="services--feed" class="has-margin-bottom--double">

  <div class="container--xlarge">

    <div class="grid is-multiline">

      <?php // loop through rows (parent repeater)
      while( have_rows('service', 63) ): the_row(); ?>

        <div class="service grid-item is-quarter-tablet is-quarter-desktop has-margin-bottom--double has-background">
          <a class="is-block is-paddingless is-borderless" href="<?php the_sub_field('service_link'); ?>">
            <div class="service-content is-relative is-centered">
              <?php 

              $image = get_sub_field('service_icon');

              if( !empty($image) ): ?>

                <img class="icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
    <?php $img = get_sub_field('service_image'); ?>
    
        <img src="<?php echo $img['sizes']['smallslider-image']; ?>" alt="<?php if($img['alt']) {
        echo $img['alt'];
        } else {
        echo $img['title']; } ?>" />
              <div class="content">
                <h3 class="has-padding--right has-padding--left is-primary-colour is-uppercase"><?php the_sub_field('service_heading'); ?></h3>
                <p><?php the_sub_field('service_description'); ?></p>
                <span><b>Read More ></b></span>
              </div>
            </div>
          </a>
        </div>

      <?php $service++; endwhile; // while( has_sub_field('service') ): ?>

    </div>

  </div>

</section>

<?php endif; // if( get_field('service') ): ?><?php //  Service Section End  // ?>