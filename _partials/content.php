<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template part used for displaying content.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<article class="article--post has-margin--bottom has-border--bottom">

  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } else { ?>
    <img src="<?php bloginfo('template_directory'); ?>/img/_default/default-featuredimage.jpg" alt="<?php the_title(); ?>" />
  <?php } ?>

  <?php the_title( sprintf( '<h2 class="is-borderless"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

  <?php if ( 'post' == get_post_type() ) : ?>

    <?php hobbes_posted_on(); ?>

  <?php endif; ?>

  <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hobbes' ) ); ?>

  <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'hobbes' ),
      'after'  => '</div>',
    ) );
  ?>

  <div class="post--meta has-clearfix has-margin--bottom has-margin--bottom">

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

      <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

        <span class="comments-link">
          <?php comments_popup_link( __( 'Leave a comment', 'hobbes' ), __( '1 Comment', 'hobbes' ), __( '% Comments', 'hobbes' ) ); ?>
        </span>

      <?php endif; ?>

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