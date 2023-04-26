<?php

// Enqueue parent theme styles
add_action( 'wp_enqueue_scripts', 'my_oceanwp_child_theme_enqueue_styles' );

function my_oceanwp_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
