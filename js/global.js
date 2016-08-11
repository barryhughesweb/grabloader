//  GLOBAL SCRIPTS

//  This manifest imports all of the individual JS modules together ready to
//  compile into a single minified file.
//
//  It is recommended that you customise the loadout of your project by
//  removing any modules that will not be used.


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  APPENDS

//  These files are taken by Codekit and appended to the end of this file.

//  @codekit-append "/_library/cookies.js"


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


// PROJECT LEVEL JS

jQuery(document).ready(function ($) {

  var $toggle = $('#header-toggle');
  var $menu = $('#header-menu');

  $toggle.click(function() {
    $(this).toggleClass('is-active');
    $menu.toggleClass('is-active');
  });

});

$(document).ready(function () {
  $("#header-toggle").click(function () {
    jQuery("#navigation nav").slideToggle({
      duration: 400
    });
    //$("#nav").slideDown( "slow" );
  });
  jQuery(window).resize(function () {
    if (window.innerWidth > 960) {
      jQuery("#navigation nav").removeAttr("style");
    }
  });
  jQuery(".has-submenu").click(function () {
    if (window.innerWidth < 960) {
      jQuery(this).children(".sub-menu").slideToggle({
        duration: 400
      });
    }
  });
});

jQuery(document).ready(function ($) {
  $('.telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone');
  });
  $('#header-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - Header');
  });
  $('#footer-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - Footer');
  });
  $('#aside-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - Contact Page Aside');
  });
  $('.area-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - AREA PAGE TITLE HERE');
  });
  $('#area-header-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - AREA PAGE TITLE HERE Header');
  });
  $('#area-footer-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - AREA PAGE TITLE HERE Footer');
  });
  $('.premises-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - PREMISES PAGE TITLE HERE');
  });
  $('#premises-header-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - PREMISES PAGE TITLE HERE Header');
  });
  $('#premises-footer-telephone').on('click', function() {
    ga('send', 'event', 'link', 'click', 'Telephone - PREMISES PAGE TITLE HERE Footer');
  });
});

$(document).ready(function() {
  $('.is-fancy').each(function(index, element) {
    var heading = $(element);
    var word_array, last_word, first_part;

    word_array = heading.html().split(/\s+/); // split on spaces
    last_word = word_array.pop();             // pop the last word
    first_part = word_array.join(' ');        // rejoin the first words together

    heading.html([first_part, ' <span class="is-last-word is-tertiary-colour">', last_word, '</span>'].join(''));
  });
});


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //