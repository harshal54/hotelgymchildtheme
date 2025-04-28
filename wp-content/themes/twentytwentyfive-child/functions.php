<?php
// Enqueue parent theme styles
function twentytwentyfive_child_enqueue_styles() {
    wp_enqueue_style( 'twentytwentyfive-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentytwentyfive-child-style', get_stylesheet_uri(), array( 'twentytwentyfive-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles' );


// Function to display "Hello, World!" in the header
function display_hello_world() {
    echo '<p>Hello, World!</p>';
}
add_action( 'wp_head', 'display_hello_world', 10 );
