<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the part used for displaying the note section

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php //  Note Section Start  // ?>
<?php 

$blocknote = get_field('note');

if( !empty($blocknote) ): ?>

<section id="note" class="note has-stretcher--triple is-centered has-margin--top has-margin--bottom is-marginless-top--tablet is-marginless-bottom--tablet">

  <div class="container--xlarge">

    <span class="is-h1 is-marginless is-uppercase"><b><?php the_field('note'); ?></b></span>

  </div>

</section>

<?php endif; ?><?php //  Note Section End  // ?>