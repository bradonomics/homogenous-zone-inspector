<?php

// Register Custom Post Type
add_action( 'init', 'inspection_post_type' );
function inspection_post_type() {

  	register_post_type( 'inspections', array(
    		'label'                 => __( 'Inspection', 'homogenous-zone-inspector' ),
    		'description'           => __( 'Inspection Job Data', 'homogenous-zone-inspector' ),
    		'labels'                => array(
        		'name'                  => _x( 'Inspections', 'Post Type General Name', 'homogenous-zone-inspector' ),
        		'singular_name'         => _x( 'Inspection', 'Post Type Singular Name', 'homogenous-zone-inspector' ),
        		'menu_name'             => __( 'Inspections', 'homogenous-zone-inspector' ),
        		'name_admin_bar'        => __( 'Inspections', 'homogenous-zone-inspector' ),
        		'archives'              => __( 'Inspection Archives', 'homogenous-zone-inspector' ),
        		'parent_item_colon'     => __( 'Parent Inspection:', 'homogenous-zone-inspector' ),
        		'all_items'             => __( 'All Inspections', 'homogenous-zone-inspector' ),
        		'add_new_item'          => __( 'Add New Inspection', 'homogenous-zone-inspector' ),
        		'add_new'               => __( 'Add Inspection', 'homogenous-zone-inspector' ),
        		'new_item'              => __( 'New Inspection', 'homogenous-zone-inspector' ),
        		'edit_item'             => __( 'Edit Inspection', 'homogenous-zone-inspector' ),
        		'update_item'           => __( 'Update Inspection', 'homogenous-zone-inspector' ),
        		'view_item'             => __( 'View Inspection', 'homogenous-zone-inspector' ),
        		'search_items'          => __( 'Search Inspections', 'homogenous-zone-inspector' ),
        		'not_found'             => __( 'Not found', 'homogenous-zone-inspector' ),
        		'not_found_in_trash'    => __( 'Not found in Trash', 'homogenous-zone-inspector' ),
        		'featured_image'        => __( 'Featured Image', 'homogenous-zone-inspector' ),
        		'set_featured_image'    => __( 'Set featured image', 'homogenous-zone-inspector' ),
        		'remove_featured_image' => __( 'Remove featured image', 'homogenous-zone-inspector' ),
        		'use_featured_image'    => __( 'Use as featured image', 'homogenous-zone-inspector' ),
        		'insert_into_item'      => __( 'Insert into Inspection', 'homogenous-zone-inspector' ),
        		'uploaded_to_this_item' => __( 'Uploaded to this Inspection', 'homogenous-zone-inspector' ),
        		'items_list'            => __( 'Inspections list', 'homogenous-zone-inspector' ),
        		'items_list_navigation' => __( 'Inspections list navigation', 'homogenous-zone-inspector' ),
        		'filter_items_list'     => __( 'Filter Inspections list', 'homogenous-zone-inspector' ),
      	),
    		'supports'              => array( 'title', 'custom-fields', ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
				'show_in_rest'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-analytics',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
  	) );

}


/**
 * Add the fields to REST API responses for posts read and write
 * https://gist.github.com/rileypaulsen/9b4505cdd0ac88d5ef51
 */
add_action( 'rest_api_init', 'wp_rest_api_alter');
function wp_rest_api_alter() {
  register_api_field( 'inspections',
      'fields',
      array(
        'get_callback' => function($data, $field, $request, $type){
          if (function_exists('get_fields')) {
            return get_fields($data['id']);
          }
          return [];
        },
        'update_callback' => null,
        'schema'          => null,
      )
  );
}
