<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the case studies feed section

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php

$case_study_type = get_field('type_of_case_study');

$args = array(
  'post_type' => 'case_studies',
  'posts_per_page' => 1,
  'tax_query' => array(
    array(
        'taxonomy' => 'case_study_type',
        'field' => 'id',
        'terms' => $case_study_type
    )
  )
);

$query = new WP_Query( $args ); if ( $query->have_posts() ) : ?>
<section id="feed--case-studies" class="has-stretcher--triple has-padding--bottom">
  
  <div class="container--xlarge">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="grid is-wide">
      <div class="case-study grid-item is-half has-margin--bottom">
        <h2 class="is-xlarge">Our Recent Work</h2>
        <?php the_title( '<span class="is-h3">', '</span>' ); ?>
        <p><?php echo excerpt(75); ?></p>
        <a class="button" href="<?php echo get_permalink(); ?>">Read More</a>
      </div>
      <div class="grid-item is-half">
        <div class="images">
          <div class="grid is-gapless">
            <div class="grid-item is-half">
              <?php if ( has_post_thumbnail() ) {
                echo get_the_post_thumbnail( $post_id, 'casestudiesfeed-thumbnail' );
              } ?>
            </div>
            <div class="grid-item is-half">
              <?php $image = get_field('additional_featured_image'); $size = 'casestudiesfeed-thumbnail'; if( $image ) {
                echo wp_get_attachment_image( $image, $size );
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
  
</section>
<?php else : ?>

  <p><i>No Case Studies</i></p>

<?php endif; ?>