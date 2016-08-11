<?php

//  Template Name: Case Studies Archive

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

<?php //  Team Members Section Start  // ?>
<?php $case_study = 1; $query = new WP_Query( array( 'post_type' => 'case_studies' ) );
if ( $query->have_posts() ) : ?>
<section id="case-studies" class="has-margin-bottom--triple">
  <div class="container--xlarge">
    <div class="grid is-wide">
      
      <div class="grid-item is-two-thirds">

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="case-study has-border--bottom">

            <div class="content">
              
              <div class="images">
                
                <div class="grid">
                  <div class="grid-item is-half">
                    <?php $image = get_field('additional_featured_image'); $size = 'case-study-thumbnail'; if( $image ) {
                      echo wp_get_attachment_image( $image, $size );
                    } ?>
                  </div>
                  <div class="grid-item is-half">
                    <?php if ( has_post_thumbnail() ) {
                      echo get_the_post_thumbnail( $post_id, 'case-study-thumbnail' );
                    } else { ?>
                      <img src="<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg" alt="<?php the_title(); ?>" />
                    <?php } ?>
                  </div>
                </div>
                
              </div>
              
              <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              
              <?php the_excerpt(75); ?>
              
              <div class="post__meta has-clearfix has-margin--bottom has-margin--bottom">
  
                <div class="is-pulled-left">

                  <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

                    <?php

                      // translators: used between list items, there is a space after the comma

                      $categories_list = get_the_category_list( __( ', ', 'hobbes' ) );
                      if ( $categories_list && hobbes_categorized_blog() ) :
                    ?>

                      <?php printf( __( 'Posted in %1$s', 'hobbes' ), $categories_list ); ?>

                    <?php endif; // End if $categories_list ?>

                    <?php

                      // translators: used between list items, there is a space after the comma

                      $tags_list = get_the_tag_list( '', __( ', ', 'hobbes' ) );
                      if ( $tags_list ) :
                    ?>

                      <?php printf( __( 'Tagged %1$s', 'hobbes' ), $tags_list ); ?>

                    <?php endif; // End if $tags_list ?>

                  <?php endif; // End if 'post' == get_post_type() ?>

                </div>

                <div class="is-pulled-right">

                  <!-- ADDTHIS BUTTON BEGIN -->
                  <script type="text/javascript">
                  var addthis_config = {
                       pubid: "YOUR-PROFILE-ID"
                  }
                  </script>

                  <a href="http://www.addthis.com/bookmark.php?v=250" 
                      class="addthis_button"><img 
                      src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" 
                      width="125" height="16" border="0" alt="Share" /></a>

                  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
                  <!-- ADDTHIS BUTTON END -->

                </div>

              </div>
              
            </div>

          </div>

        <?php $case_study++; endwhile; endif; ?>


      </div><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>

      --><?php get_sidebar(); ?>

    </div>
  </div>
</section>
<?php endif; ?><?php //  Service Section End  // ?>

<?php get_footer(); ?>