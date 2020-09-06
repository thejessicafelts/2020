<?php

/* ===========================================================================
    Remove "Posts" Default Post Type
=========================================================================== */

// Remove side menu
add_action('admin_menu', 'remove_default_post_type' );
function remove_default_post_type() {
    remove_menu_page('edit.php');
}

// Remove +New post in top Admin Menu Bar
add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);
function remove_default_post_type_menu_bar($wp_admin_bar) {
    $wp_admin_bar->remove_node('new-post');
}

// Remove Quick Draft Dashboard Widget
add_action('wp_dashboard_setup', 'remove_draft_widget', 999);
function remove_draft_widget(){
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}

/* ===========================================================================
    Add New Custom Post Types
=========================================================================== */

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

// Changelog CPT
function cpt_changelog() {

    $labels = array(
        'name'                  => _x('Theme Changelog', '_themename'),
        'singular_name'         => _x('Change', '_themename'),
        'menu_name'             => __('Changelog', '_themename'),
        'parent_item_colon'     => __('Changelog', '_themename'),
        'all_items'             => __('All Changes', '_themename'),
        'view_item'             => __('View Changes', '_themename'),
        'add_new_items'         => __('Add New Changes', '_themename'),
        'add_new'               => __('Add New Change', '_themename'),
        'edit_item'             => __('Edit Changelog', '_themename'),
        'update_item'           => __('Update Change', '_themename'),
        'search_items'          => __('Search Changes', '_themename'),
        'not_found'             => __('Change Not Found', '_themename'),
        'not_found_in_trash'    => __('Change Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('changelog', '_themename'),
        'description'           => __('Changelog', '_themename'),
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

    register_post_type('changelog', $args);

} add_action('init', 'cpt_changelog', 0);

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
function cpt_recommendations() {

    $labels = array(
        'name'                  => _x('Recommendations', '_themename'),
        'singular_name'         => _x('Recommendation', '_themename'),
        'menu_name'             => __('Recos', '_themename'),
        'parent_item_colon'     => __('Recommendations', '_themename'),
        'all_items'             => __('All Recommendations', '_themename'),
        'view_item'             => __('View Recommendation', '_themename'),
        'add_new_items'         => __('Add New Recommendations', '_themename'),
        'add_new'               => __('Add New Recommendation', '_themename'),
        'edit_item'             => __('Edit Recommendation', '_themename'),
        'update_item'           => __('Update Recommendation', '_themename'),
        'search_items'          => __('Search Recommendations', '_themename'),
        'not_found'             => __('Recommendation Not Found', '_themename'),
        'not_found_in_trash'    => __('Recommendation Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('Recommendations', '_themename'),
        'description'           => __('recommendation', '_themename'),
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

    register_post_type('recommendation', $args);

} add_action('init', 'cpt_recommendations', 0);

// Tutorials CPT
function cpt_tutorials() {

    $labels = array(
        'name'                  => _x('Tutorials', '_themename'),
        'singular_name'         => _x('Tutorial', '_themename'),
        'menu_name'             => __('Tutorials', '_themename'),
        'parent_item_colon'     => __('Tutorials', '_themename'),
        'all_items'             => __('All Tutorials', '_themename'),
        'view_item'             => __('View Tutorial', '_themename'),
        'add_new_items'         => __('Add New Tutorials', '_themename'),
        'add_new'               => __('Add New Tutorial', '_themename'),
        'edit_item'             => __('Edit Tutorial', '_themename'),
        'update_item'           => __('Update Tutorial', '_themename'),
        'search_items'          => __('Search Tutorials', '_themename'),
        'not_found'             => __('Tutorial Not Found', '_themename'),
        'not_found_in_trash'    => __('Tutorial Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('Tutorials', '_themename'),
        'description'           => __('tutorial', '_themename'),
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

    register_post_type('tutorial', $args);

} add_action('init', 'cpt_tutorials', 0);

// Videos CPT
function cpt_videos() {

    $labels = array(
        'name'                  => _x('Videos', '_themename'),
        'singular_name'         => _x('Video', '_themename'),
        'menu_name'             => __('Videos', '_themename'),
        'parent_item_colon'     => __('Videos', '_themename'),
        'all_items'             => __('All Videos', '_themename'),
        'view_item'             => __('View Video', '_themename'),
        'add_new_items'         => __('Add New Videos', '_themename'),
        'add_new'               => __('Add New Video', '_themename'),
        'edit_item'             => __('Edit Video', '_themename'),
        'update_item'           => __('Update Video', '_themename'),
        'search_items'          => __('Search Videos', '_themename'),
        'not_found'             => __('Video Not Found', '_themename'),
        'not_found_in_trash'    => __('Video Not Found in Trash', '_themename'),
    );
    
    $args = array(
        'label'                 => __('Videos', '_themename'),
        'description'           => __('video', '_themename'),
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

    register_post_type('video', $args);

} add_action('init', 'cpt_videos', 0);

?>