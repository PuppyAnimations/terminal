<?php
function terminal_child_enqueue_styles() {
    // Enqueue Parent Theme's stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue Child Theme's stylesheet (this file)
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'terminal_child_enqueue_styles' );
?>