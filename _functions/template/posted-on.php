<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Prints HTML meta information including publish date and author.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_posted_on' ) ) :

function hobbes_posted_on() {
  
  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  
  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );
  
  $posted_on = sprintf(
    _x( 'Posted on %s', 'post date', 'hobbes' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );
  
  echo '' . $posted_on . '';
  
}

endif;