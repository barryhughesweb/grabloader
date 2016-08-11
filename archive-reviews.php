<?php

//  Template Name: Reviews Archive

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for the testimonials archive page.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section id="hero" class="is-small has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
  <div class="is-primary">
    <div class="hero-content is-relative container--xlarge has-clearfix">
      <div class="hero-text">
        <?php the_title( '<span class="title is-marginless">', '</span>' ); ?>
        <?php if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<div id="breadcrumb">','</div>');
        } ?>
      </div>
    </div>
  </div>
</section><?php //  Hero Section End  // ?>

<?php //  Content Section Start  // ?>
<section id="content" class="has-margin-bottom--double">
  <div class="container--xlarge">
    <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
      <h1 class="is-marginless"><?php the_field('heading'); ?></h1>
      <?php 

      $subheading = get_field('sub_heading');

      if( !empty($subheading) ): ?>

        <span><?php the_field('sub_heading'); ?></span>

      <?php endif; ?>
    </div>
    <?php the_content(); ?>
  </div>
</section><?php //  Content Section End  // ?>

<?php //  Feed Section Start  // ?>
<?php $review = 1; $query = new WP_Query( array( 'post_type' => 'reviews' ) );
if ( $query->have_posts() ) : ?>
<section id="reviews" class="has-margin-bottom--triple">
  <div class="container--xlarge">
    <div class="grid is-multiline">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div id="review<?php echo $review; ?>" class="review grid-item is-half has-margin-bottom--double">
          <blockquote class="is-relative has-stretcher has-padding-right--double has-padding-left--double is-marginless">
            <?php

              $rating = get_field('rating');

              if($rating == 'five-stars') { echo '<img class="rating" src="'.get_bloginfo('template_directory').'/img/_library/5stars.svg" alt="5 Star Rating">'; }
              elseif ($rating == 'four-stars') { echo '<img class="rating" src="'.get_bloginfo('template_directory').'/img/_library/4stars.svg" alt="4 Star Rating">'; }
              elseif ($rating == 'three-stars') { echo '<img class="rating" src="'.get_bloginfo('template_directory').'/img/_library/3stars.svg" alt="3 Star Rating">'; }
              elseif ($rating == 'two-stars') { echo '<img class="rating" src="'.get_bloginfo('template_directory').'/img/_library/2stars.svg" alt="2 Star Rating">'; }
              elseif ($rating == 'one-star') { echo '<img class="rating" src="'.get_bloginfo('template_directory').'/img/_library/1star.svg" alt="1 Star Rating">'; }

            ?>
            <q class="has-margin-bottom--half"><?php echo excerpt(500); ?></q>
            <cite><?php the_title(); ?>, <?php the_field('location'); ?></cite>
          </blockquote>
        </div>
      <?php $review++; endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?><?php //  Service Section End  // ?>

<?php get_footer(); ?>