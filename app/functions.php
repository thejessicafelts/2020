<?php
    
    /* ============================================================================
        Removing the WP Admin Bar
    ============================================================================ */

    add_filter('show_admin_bar', '__return_false');

    /* ===========================================================================
        Include Custom Styles and Scripts
    =========================================================================== */

    function _themename_styles(){
        // Include Bootstrap CDN Link?
        // Include Font Awesome CDN Link?
        wp_enqueue_style('_themename_custom-styles', get_theme_file_uri() . '/css/main.css', array(), '1.0.0', 'all');
    } add_action('wp_enqueue_scripts', '_themename_styles');

    function _themename_scripts(){
        // Include Bootstrap CDN Link?
        // Include Slick Slider CDN Link?
        wp_enqueue_script('_themename_custom-scripts', get_theme_file_uri() . '/js/main.js', array(), '1.0.0', true);
    } add_action('wp_enqueue_scripts', '_themename_scripts');

    /* ===========================================================================
        Create Custom Menus
    =========================================================================== */

    function _themename_menus(){
        register_nav_menus(array(
            'primary'   => 'Primary Navigation',
            'secondary' => 'Secondary Navigation',
            'social'    => 'Social Navigation'
        ));
    } add_action('init', '_themename_menus');

    /* ===========================================================================
        Error Handling
    =========================================================================== */

    if(!defined('ABSPATH')) exit;

    // CUSTOM WRITE LOG
    if (!function_exists('write_log')) {
        function write_log ($log) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log,true));
            } else {
                error_log($log);
            }
        }
    }

    /* ===========================================================================
        Includes
    =========================================================================== */

    require get_template_directory() . '/inc/custom-post-types.php';

?>