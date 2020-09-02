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

// Insights CPT

// Recommendations CPT

// Tutorials CPT

// Videos CPT

?>