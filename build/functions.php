<?php
    
    /* ============================================================================
        Removing the WP Admin Bar
    ============================================================================ */

    add_filter('show_admin_bar', '__return_false');

    /* ===========================================================================
        Include Custom Styles and Scripts
    =========================================================================== */

    function _themename_assets() {
        wp_enqueue_style('_themename-stylesheet', get_theme_file_uri() . '/css/main.css', array(), '1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', '_themename_assets');

?>