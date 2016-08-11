<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom taxonomies we need for our theme. Get started
//  by un-commenting everything below, and customizing the taxonomy to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function create_hobbes_taxonomies() {
  
  register_taxonomy(
    'post_location', //  Your taxonomy title  //
    'post',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'labels' => array(
        'name'                => __('Locations'),
        'singular_name'       => __('Location of Post'),
        'add_new'             => __('Add New', 'Location'),
        'add_new_item'        => __('Add New Location'),
        'edit_item'           => __('Edit Location'),
        'new_item'            => __('New Location'),
        'view_item'           => __('View Location'),
        'search_items'        => __('Search Locations'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      'query_var'    => true,
      'rewrite'      => array('slug' => 'post-location')
    )
  );
  
  register_taxonomy(
    'review_location', //  Your taxonomy title  //
    'reviews',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'labels' => array(
        'name'                => __('Review Locations'),
        'singular_name'       => __('Location of Review'),
        'add_new'             => __('Add New', 'Location'),
        'add_new_item'        => __('Add New Review Location'),
        'edit_item'           => __('Edit Review Location'),
        'new_item'            => __('New Review Location'),
        'view_item'           => __('View Review Location'),
        'search_items'        => __('Search Locations'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      'query_var'    => true,
      'rewrite'      => array('slug' => 'review-location')
    )
  );
  
  register_taxonomy(
    'case_study_location', //  Your taxonomy title  //
    'case_studies',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'labels' => array(
        'name'                => __('Case Study Locations'),
        'singular_name'       => __('Location of Case Study'),
        'add_new'             => __('Add New', 'Location'),
        'add_new_item'        => __('Add New Case Study Location'),
        'edit_item'           => __('Edit Case Study Location'),
        'new_item'            => __('New Case Study Location'),
        'view_item'           => __('View Case Study Location'),
        'search_items'        => __('Search Locations'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      'query_var'    => true,
      'rewrite'      => array('slug' => 'case-study-location')
    )
  );
  
  register_taxonomy(
    'case_study_type', //  Your taxonomy title  //
    'case_studies',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'labels' => array(
        'name'                => __('Case Study Types'),
        'singular_name'       => __('Type of Case Study'),
        'add_new'             => __('Add New', 'Type'),
        'add_new_item'        => __('Add New Case Study Type'),
        'edit_item'           => __('Edit Case Study Type'),
        'new_item'            => __('New Case Study Type'),
        'view_item'           => __('View Case Study Type'),
        'search_items'        => __('Search Types'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      'query_var'    => true,
      'rewrite'      => array('slug' => 'case-study-type')
    )
  );
  
  //  Addd the next taxonomy here  //
  
  flush_rewrite_rules();
}

add_action( 'init', 'create_hobbes_taxonomies' );