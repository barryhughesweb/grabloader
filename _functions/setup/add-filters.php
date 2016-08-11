<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Runs a selections core filters through our theme
//
//  [_1_] Allow .svg uploads
//  [_2_] Remove Empty <p> tags & filter <p> tags
//  [_3_] Remove width and height attributes from <img>
//  [_4_] Remove <p> tags from <img>
//  [_5_] Enables or disables comments (defaults to disabled)
//  [_6_] Set Custom Thumbnail sizes (if required)
//  [_7_] Set Excerpt Length
//  [_8_] Gravity Forms Label
//  [_9_] Yoast Breadcrumbs Validation Fix
//  [_10_] Remove JS & CSS Version Numbers
//  [_11_] Custom TinyMCE

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Allow .svg uploads  //

function hobbes_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'hobbes_mime_types' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


// [_2_] Remove Empty <p> tags & filter <p> tags //

function hobbes_remove_empty_p($content){
  $content = force_balance_tags($content);
  return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

add_filter('the_content', 'hobbes_remove_empty_p', 20, 1);

function hobbes_acf_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('acf_the_content', 'hobbes_acf_filter_ptags_on_images');

function hobbes_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'hobbes_filter_ptags_on_images');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Remove width and height attributes from <img>  //

function hobbes_remove_img_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

//  From the_post_thumbnail  //
add_filter( 'post_thumbnail_html', 'hobbes_remove_img_dimensions', 10 );

//  From the WYSIWYG editor  //
add_filter( 'image_send_to_editor', 'hobbes_remove_img_dimensions', 10 );

//  From the_content  //
add_filter( 'the_content', 'hobbes_remove_img_dimensions', 10 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Remove <p> tags from <img>  //

function hobbes_remove_img_p($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'hobbes_remove_img_p');



//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_5_] Enables or disables comments (defaults to disabled)  //

function hobbes_enable_comments() {
  return true; // shows comments
//  return false; // hides comments
}
add_filter( 'comments_open', 'hobbes_enable_comments', 20, 2 );
add_filter( 'pings_open', 'hobbes_enable_comments', 20, 2 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_6_] Set Custom Thumbnail sizes (if required)  //

add_theme_support( 'post-thumbnails' );

add_image_size( 'lightbox-item', 400, 99999 );                                          //  Custom image size for lightbox grid images, no crop mode  //
add_image_size( 'lightbox-background', 600, 99999 );                                    //  Custom image size for lightbox grid heading background, no crop mode  //
add_image_size( 'serviceslider-image', 750, 800, array( 'center', 'center' ) );         //  Custom image size for service slider, crop from center
add_image_size( 'casestudiesfeed-thumbnail', 400, 400, array( 'center', 'center' ) );   //  Custom featured image size, crop mode  //
add_image_size( 'team-member-thumbnail', 175, 175, array( 'center', 'center' ) );       //  175 pixels wide by 175 pixels tall, crop from the center
add_image_size( 'hero-image', 960, 99999 );                                             //  Custom image size for the hero, no crop mode  //
add_image_size( 'aggregates-item', 225, 225, array( 'center', 'center' ) );             //  225 pixels wide by 225 pixels tall, crop from the center
add_image_size( 'smallslider-image', 645, 355, true );                                  //  Custom featured image size for the small slider, crop mode  //


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_7_] Set Excerpt Length  //

// E.g. echo excerpt(22); //

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_8_] Gravity Forms Label  //

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_9_] Yoast Breadcrumbs Validation Fix

//  Convert Yoast breadcrumbs to use Microdata

function convertBreadcrumbsToMicrodata($breadcrumbs)
  
{
    // remove the XML namespace
    $breadcrumbs = str_replace(' xmlns:v="http://rdf.data-vocabulary.org/#"', '', $breadcrumbs);

    // convert each breadcrumb
    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><a href="([^"]+)" rel="v:url" property="v:title">([^<]+)<\\/a><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>',
        $breadcrumbs
    );

    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">([^<]+)<\\/span><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span class="breadcrumb_last" itemprop="title">$1</span></span>',
        $breadcrumbs
    );

    return $breadcrumbs;
}

add_filter('wpseo_breadcrumb_output', 'convertBreadcrumbsToMicrodata');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_10_] Remove JS & CSS Version Numbers

//  This removes all version extensions on css and js linked through each page

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_11_] Custom TinyMCE

// Add the Styles dropdown to the toolbar

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

// Add KICK-ASS custom styles

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

    $style_formats = array( 
		array(  
			'title' => 'Note',  
			'block' => 'p',  
			'classes' => 'note',
		)
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}

// Add your stylesheet to the visual editor

function hobbes_add_editor_styles() {
  add_editor_style( '/build/css/editor.css' );
}
add_action( 'after_setup_theme', 'hobbes_add_editor_styles' );