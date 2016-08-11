<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom post types we need for our theme. Get started
//  by un-commenting everything below, and customizing the cpt to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function create_hobbes_post_types() {
  
  register_post_type( 'areas',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Areas'),
        'singular_name'       => __('Area'),
        'add_new'             => __('Add New', 'Areas'),
        'add_new_item'        => __('Add New Area'),
        'edit_item'           => __('Edit Area'),
        'new_item'            => __('New Area'),
        'view_item'           => __('View Area'),
        'search_items'        => __('Search Areas'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => true,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-location',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'areas' 
      ),
      
    )
  );
  
  register_post_type( 'premises',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Premises'),
        'singular_name'       => __('Premises'),
        'add_new'             => __('Add New', 'Premises'),
        'add_new_item'        => __('Add New Premises'),
        'edit_item'           => __('Edit Premises'),
        'new_item'            => __('New Premises'),
        'view_item'           => __('View Premises'),
        'search_items'        => __('Search Premises'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => true,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-store',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'premises' 
      ),
      
    )
  );
  
  register_post_type( 'services',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Services'),
        'singular_name'       => __('Service'),
        'add_new'             => __('Add New', 'Services'),
        'add_new_item'        => __('Add New Service'),
        'edit_item'           => __('Edit Service'),
        'new_item'            => __('New Service'),
        'view_item'           => __('View Service'),
        'search_items'        => __('Search Services'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => true,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-format-aside',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'services' 
      ),
      
    )
  );
  
  register_post_type( 'team',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Team'),
        'singular_name'       => __('Team Member'),
        'add_new'             => __('Add New', 'Team'),
        'add_new_item'        => __('Add New Team Member'),
        'edit_item'           => __('Edit Team Member'),
        'new_item'            => __('New Team Member'),
        'view_item'           => __('View Team Member'),
        'search_items'        => __('Search Team'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => false,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-groups',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'team' 
      ),
      
    )
  );
  
  register_post_type( 'reviews',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Reviews'),
        'singular_name'       => __('Review'),
        'add_new'             => __('Add New', 'Reviews'),
        'add_new_item'        => __('Add New Review'),
        'edit_item'           => __('Edit Review'),
        'new_item'            => __('New Review'),
        'view_item'           => __('View Review'),
        'search_items'        => __('Search Reviews'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => false,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-format-quote',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'reviews'
      ),
      
      //  Which Taxonomies will be applicable?  //
      'taxonomies'  => array(
        'location'
      ),
      
    )
  );
  
  register_post_type( 'case_studies',
    array(
      
      //  What will the CPT be known as?  //
      'labels' => array(
        'name'                => __('Case Studies'),
        'singular_name'       => __('Case Study'),
        'add_new'             => __('Add New', 'Case Studies'),
        'add_new_item'        => __('Add New Case Study'),
        'edit_item'           => __('Edit Case Study'),
        'new_item'            => __('New Case Study'),
        'view_item'           => __('View Case Study'),
        'search_items'        => __('Search Case Study'),
        'not_found'           => __('Nothing found'),
        'not_found_in_trash'  => __('Nothing found in Trash'),
        'parent_item_colon'   => __ ('')
      ),
      
      //  Settings - how will the CPT behave?  //
      'public'              => true,
      'show_ui'             => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => false,
      'capability_type'     => 'page',
      'has_archive'         => false,
      'menu_icon'           => 'dashicons-hammer',
      'menu_position'       => 5,
      
      //  What editable fields will the CPT support?  //
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail'
      ),
      
      'rewrite' => array( 
        'slug' => 'case-studies'
      ),
      
      //  Which Taxonomies will be applicable?  //
      'taxonomies'  => array(
        'case_study_location'
      ),
      
    )
  );
  
  //  Register any additional CPTs here  //
  
  flush_rewrite_rules();
}

add_action( 'init', 'create_hobbes_post_types' );

// Remove the slug from published post permalinks.

function custom_remove_areas_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'areas' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_areas_cpt_slug', 10, 3 );

function custom_remove_premises_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'premises' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_premises_cpt_slug', 10, 3 );

function custom_remove_services_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'services' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custom_remove_services_cpt_slug', 10, 3 );

// Some hackery to have WordPress match postname to any of our public post types.
// All of our public post types can have /post-name/ as the slug, so they better be unique across all posts.
// Typically core only accounts for posts and pages where the slug is /post-name/

function custom_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'areas', 'premises', 'services', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'custom_parse_request_tricksy' );