<?php

// Alerts CPT
function cpt_alerts() {

    $labels = array(
        'name'                  => _x('Alerts', '_themename'),
        'singular_name'         => _x('Alert', '_themename'),
        'menu_name'             => __('Alerts', '_themename'),
        'parent_item_colon'     => __('Alert', '_themename'),
        'all_items'             => __('All Alerts', '_themename'),
        'view_item'             => __('View Alerts', '_themename'),
        'add_new_items'         => __('Add New Alert', '_themename'),
        'add_new'               => __('Add New Alert', '_themename'),
        'edit_item'             => __('Edit Alert', '_themename'),
        'update_item'           => __('Update Alert', '_themename'),
        'search_items'          => __('Search Alerts', '_themename'),
        'not_found'             => __('Alert Not Found', '_themename'),
        'not_found_in_trash'    => __('Alert Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('alert', '_themename'),
        'description'           => __('Alerts', '_themename'),
        'labels'                => $labels,
        // Features this CPT supports in Post Editor
        'supports'              => array( 'title',
                                          'editor',
                                          'excerpt',
                                          'author',
                                          'thumbnail',
                                          'comments',
                                          'revisions',
                                          'custom-fields'
                                        ),
        // 'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
 
    );

    register_post_type('alerts', $args);

} add_action('init', 'cpt_alerts', 0);

// Education CPT
function cpt_education() {

    $labels = array(
        'name'                  => _x('Education', '_themename'),
        'singular_name'         => _x('Education', '_themename'),
        'menu_name'             => __('Education', '_themename'),
        'parent_item_colon'     => __('Education', '_themename'),
        'all_items'             => __('All Education', '_themename'),
        'view_item'             => __('View Education', '_themename'),
        'add_new_items'         => __('Add New Education', '_themename'),
        'add_new'               => __('Add New Education', '_themename'),
        'edit_item'             => __('Edit Education', '_themename'),
        'update_item'           => __('Update Education', '_themename'),
        'search_items'          => __('Search Education', '_themename'),
        'not_found'             => __('Education Not Found', '_themename'),
        'not_found_in_trash'    => __('Education Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('education', '_themename'),
        'description'           => __('Education', '_themename'),
        'labels'                => $labels,
        // Features this CPT supports in Post Editor
        'supports'              => array( 'title',
                                          'editor',
                                          'excerpt',
                                          'author',
                                          'thumbnail',
                                          'comments',
                                          'revisions',
                                          'custom-fields'
                                        ),
        // 'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
 
    );

    register_post_type('education', $args);

} add_action('init', 'cpt_education', 0);

// Employer CPT
function cpt_employer() {

    $labels = array(
        'name'                  => _x('Employers', '_themename'),
        'singular_name'         => _x('Employer', '_themename'),
        'menu_name'             => __('Employers', '_themename'),
        'parent_item_colon'     => __('Parent Company', '_themename'),
        'all_items'             => __('All Employers', '_themename'),
        'view_item'             => __('View Employer', '_themename'),
        'add_new_items'         => __('Add New Employer', '_themename'),
        'add_new'               => __('Add New Employer', '_themename'),
        'edit_item'             => __('Edit Employer', '_themename'),
        'update_item'           => __('Update Employer', '_themename'),
        'search_items'          => __('Search Employers', '_themename'),
        'not_found'             => __('Employer Not Found', '_themename'),
        'not_found_in_trash'    => __('Employer Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('employer', '_themename'),
        'description'           => __('Employers', '_themename'),
        'labels'                => $labels,
        // Features this CPT supports in Post Editor
        'supports'              => array( 'title',
                                          'editor',
                                          'excerpt',
                                          'author',
                                          'thumbnail',
                                          'comments',
                                          'revisions',
                                          'custom-fields'
                                        ),
        // 'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
 
    );

    register_post_type('employers', $args);

} add_action('init', 'cpt_employer', 0);

// Events CPT
function cpt_events() {

    $labels = array(
        'name'                  => _x('Events', '_themename'),
        'singular_name'         => _x('Event', '_themename'),
        'menu_name'             => __('Events', '_themename'),
        'parent_item_colon'     => __('Events', '_themename'),
        'all_items'             => __('All Events', '_themename'),
        'view_item'             => __('View Event', '_themename'),
        'add_new_items'         => __('Add New Events', '_themename'),
        'add_new'               => __('Add New Event', '_themename'),
        'edit_item'             => __('Edit Event', '_themename'),
        'update_item'           => __('Update Event', '_themename'),
        'search_items'          => __('Search Events', '_themename'),
        'not_found'             => __('Event Not Found', '_themename'),
        'not_found_in_trash'    => __('Event Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('events', '_themename'),
        'description'           => __('Events', '_themename'),
        'labels'                => $labels,
        // Features this CPT supports in Post Editor
        'supports'              => array( 'title',
                                          'editor',
                                          'excerpt',
                                          'author',
                                          'thumbnail',
                                          'comments',
                                          'revisions',
                                          'custom-fields'
                                        ),
        // 'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
 
    );

    register_post_type('events', $args);

} add_action('init', 'cpt_events', 0);

// Insights CPT
function cpt_insights() {

    $labels = array(
        'name'                  => _x('Insights', '_themename'),
        'singular_name'         => _x('Insight', '_themename'),
        'menu_name'             => __('Insights', '_themename'),
        'parent_item_colon'     => __('Insights', '_themename'),
        'all_items'             => __('All Insights', '_themename'),
        'view_item'             => __('View Insight', '_themename'),
        'add_new_items'         => __('Add New Insights', '_themename'),
        'add_new'               => __('Add New Insight', '_themename'),
        'edit_item'             => __('Edit Insight', '_themename'),
        'update_item'           => __('Update Insight', '_themename'),
        'search_items'          => __('Search Insights', '_themename'),
        'not_found'             => __('Insight Not Found', '_themename'),
        'not_found_in_trash'    => __('Insight Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('Insights', '_themename'),
        'description'           => __('insights', '_themename'),
        'labels'                => $labels,
        // Features this CPT supports in Post Editor
        'supports'              => array( 'title',
                                          'editor',
                                          'excerpt',
                                          'author',
                                          'thumbnail',
                                          'comments',
                                          'revisions',
                                          'custom-fields'
                                        ),
        // 'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
 
    );

    register_post_type('insights', $args);

} add_action('init', 'cpt_insights', 0);

// Recommendations CPT

// Tutorials CPT

// Videos CPT

?>