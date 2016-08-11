<?php

//  Template Name: Team Archive

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for the team archive page.

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

<?php //  Team Members Section Start  // ?>
<?php $teammember = 1; $query = new WP_Query( array( 'post_type' => 'team' ) );
if ( $query->have_posts() ) : ?>
<section id="team-members" class="has-margin-bottom--double">
  <div class="container--xlarge">
    <div class="grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div id="team-member<?php echo $teammember; ?>" class="team-member grid-item is-half has-margin--bottom">
          <div class="content has-padding--bottom has-clearfix is-left has-border-bottom--dashed">
            <?php if ( has_post_thumbnail() ) {
              echo get_the_post_thumbnail( $post_id, 'team-member-thumbnail' );
            } else { ?>
              <img src="<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
            <div class="heading-container has-margin--bottom">
              <?php the_title( '<h3 class="is-marginless is-primary-colour">', '</h3>' ); ?>
              <?php 

              $job = get_field('job_title');

              if( !empty($job) ): ?>

                <span class="is-secondary-colour"><?php the_field('job_title'); ?></span>

              <?php endif; ?>
            </div>
            <?php the_content(); ?>
          </div>
        </div>
      <?php $teammember++; endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php endif; ?><?php //  Service Section End  // ?>

<?php get_footer(); ?>