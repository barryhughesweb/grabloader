<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This displays the widgets from the default sidebar with fallback content
//  if no widgets exist.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php if ( is_home() || is_single() || is_archive() ) :

  //  Retrieves the relevant sidebar for post page.

  get_template_part( '_partials/sidebar' , 'default' );

elseif ( is_page_template('archive-case-studies.php') || is_singular('case_studies') ) :

  //  Retrieves the relevant sidebar if page is a single post of the fleet custom post type.

  get_template_part( '_partials/sidebar' , 'case-studies' );

elseif ( is_page_template('_templates/page-contact.php') ) :

  //  Retrieves the relevant sidebar if page is the contact page.

  get_template_part( '_partials/sidebar', 'contact' ); ?>

<?php endif; ?>