<?php
/**
 * Anis Blog Child - functions
 */

add_action( 'wp_enqueue_scripts', function () {
    // For block themes like TT5, the parent styles are handled automatically.
    // Only enqueue extra CSS if you create it later.
    $extra_css = get_stylesheet_directory() . '/extra.css';
    if ( file_exists( $extra_css ) ) {
        wp_enqueue_style(
            'anisblog-child-extra',
            get_stylesheet_directory_uri() . '/extra.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
});