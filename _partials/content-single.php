<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section id="hero" class="is-medium has-margin-bottom--triple has-background"><?php //  Hero Section Start  // ?>
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

<section id="post" class="container--xlarge has-margin-bottom--double">

  <div class="grid is-wide">

    <div class="grid-item is-two-thirds">

      <article class="article has-margin--bottom">

        <div class="heading-container has-margin--bottom has-padding-bottom--half has-border--bottom">
          <?php the_title( '<h1 class="is-marginless">', '</h1>' ); ?>
          <span><?php hobbes_posted_on(); ?></span>
        </div>

        <div class="post__meta has-clearfix">

          <div class="is-pulled-left">

            <?php

              // translators: used between list items, there is a space after the comma

              $category_list = get_the_category_list( __( ', ', 'hobbes' ) );

              // translators: used between list items, there is a space after the comma

              $tag_list = get_the_tag_list( '', __( ', ', 'hobbes' ) );

              if ( ! hobbes_categorized_blog() ) {

                // If the blog has just one category we only need to display tags

                if ( '' != $tag_list ) {

                  $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hobbes' );

                } else {

                  $meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hobbes' );

                }

              } else {

                // But if the blog hasmultiple categories we should display them here

                if ( '' != $tag_list ) {

                  $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hobbes' );

                } else {

                  $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'hobbes' );

                }

              } // end check for categories on this blog

              printf(
                $meta_text,
                $category_list,
                $tag_list,
                get_permalink()
              );
            ?>

            <?php edit_post_link( __( 'Edit', 'hobbes' ), '<span class="edit-link">', '</span>' ); ?>

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

      </article>

      <?php hobbes_post_nav(); ?>

      <?php if ( comments_open() || '0' != get_comments_number() ) :

        //  Load the comment template if comments are open or if there is at least one comment  //

        comments_template();

      endif; ?>

    </div><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>

    --><?php get_sidebar(); ?>

  </div>

</section>