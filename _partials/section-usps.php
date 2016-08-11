<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the USP's

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php //  USP's Section Start  // ?>
<?php if( have_rows('usps', 50) ): ?>

<section id="usps" class="has-padding--bottom">

  <div class="container--xlarge">

    <div class="grid is-wide is-multiline">

      <?php // loop through rows (parent repeater)
      while( have_rows('usps', 50) ): the_row(); ?>

        <div class="usp grid-item is-quarter-tablet is-quarter-desktop has-margin-bottom--double">
          <div class="usp-content is-relative is-centered">
            <?php 

            $icon = get_sub_field('icon');

            if( !empty($icon) ): ?>

              <img class="icon aligncenter has-margin-bottom--half" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />

            <?php endif; ?>
            <h3 class="is-fancy is-uppercase has-margin-bottom--half"><?php the_sub_field('usp_heading'); ?></h3>
            <?php the_sub_field('description'); ?>
          </div>
        </div>

      <?php endwhile; // while( has_sub_field('usps') ): ?>

    </div>

  </div>

</section>

<?php endif; // if( get_field('usps') ): ?><?php //  USP's Section End  // ?>