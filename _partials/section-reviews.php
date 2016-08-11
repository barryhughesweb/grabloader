<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the testimonials section

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php 

$locationselected = get_field('location_of_reviews');

if( !empty($locationselected) ): ?>

  <?php

  $location = get_field('location_of_reviews');

  $args = array(
    'post_type' => 'reviews',
    'posts_per_page' => 1,
    'tax_query' => array(
      array(
          'taxonomy' => 'review_location',
          'field' => 'id',
          'terms' => $location
      )
    )
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) : ?>

  <section id="feed--reviews" class="has-background has-margin-bottom--triple has-box-shadow"><?php //  Reviews Feed Section Start  // ?>

    <div class="is-primary has-stretcher--double">

      <div class="container is-centered is-blank-colour">

        <h2 class="is-uppercase is-highlighted">What our customers say</h2>

        <div id="owl">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <blockquote class="is-borderless is-paddingless is-marginless">
              <div class="quote">
                <div class="has-margin-bottom--half is-uppercase">
                  <img class="before" src="<?php echo get_bloginfo('template_directory'); ?>/img/quote--before.svg" alt="Before Quotation Mark"><q><b><?php echo excerpt(35); ?></b></q><img class="after" src="<?php echo get_bloginfo('template_directory'); ?>/img/quote--after.svg" alt="After Quotation Mark">
                </div>
                <cite class="is-blank-colour"><b><?php the_title(); ?>,</b> <?php the_field('location'); ?></cite>
              </div>
            </blockquote>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <script type="text/javascript">
          $(document).ready(function() {

            $('#owl').owlCarousel({
              loop:true,
              autoplay:true,
              autoplayTimeout:3500,
              autoplayHoverPause:true,
              responsiveClass:false,
              responsive:{
                0:{
                  items:1,
                  nav:false,
                  loop:true
                },
                800:{
                  items:1,
                  nav:false,
                  loop:true
                },
                1024:{
                  items:1,
                  nav:false,
                  loop:true
                }
              }
          });

          });
        </script>

      </div>

    </div>

  </section><?php //  Reviews Feed Section End  // ?>
  
  <?php endif; ?>

<?php else: ?>

  <?php $query = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 4 ) );
  if ( $query->have_posts() ) : ?>

  <section id="feed--reviews" class="has-background has-margin-bottom--triple has-box-shadow"><?php //  Reviews Feed Section Start  // ?>

    <div class="is-primary has-stretcher--double">

      <div class="container is-centered is-blank-colour">

        <h2 class="is-uppercase is-highlighted">What our customers say</h2>
        
        <script type="text/javascript">
          $(document).ready(function() {

            $('#owl').owlCarousel({
              loop:true,
              autoplay:true,
              autoplayTimeout:3500,
              autoplayHoverPause:true,
              responsiveClass:false,
              responsive:{
                0:{
                  items:1,
                  nav:false,
                  loop:true
                },
                800:{
                  items:1,
                  nav:false,
                  loop:true
                },
                1024:{
                  items:1,
                  nav:false,
                  loop:true
                }
              }
            });

          });
        </script>

        <div id="owl">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <blockquote class="is-borderless is-paddingless is-marginless">
              <div class="quote">
                <div class="has-margin-bottom--half is-uppercase">
                  <img class="before" src="<?php echo get_bloginfo('template_directory'); ?>/img/quote--before.svg" alt="Before Quotation Mark"><q><b><?php echo excerpt(35); ?></b></q><img class="after" src="<?php echo get_bloginfo('template_directory'); ?>/img/quote--after.svg" alt="After Quotation Mark">
                </div>
                <cite class="is-blank-colour"><b><?php the_title(); ?>,</b> <?php the_field('location'); ?></cite>
              </div>
            </blockquote>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>

      </div>

    </div>

  </section><?php //  Reviews Feed Section End  // ?>
  
  <?php endif; ?>

<?php endif; ?>