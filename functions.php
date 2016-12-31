<?php
/**
* Child theme stylesheet einbinden in Abhängigkeit vom Original-Stylesheet
*/

function child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
    wp_enqueue_style( 'child-theme-list-styles', get_stylesheet_directory_uri() .'/list-styles.css' );
    wp_enqueue_script('autoadjustTemplate', get_stylesheet_directory_uri() . '/js/autoadjustTemplate.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

// google fonts
function load_google_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto+Slab:400,700');
    wp_enqueue_style( 'googleFonts');
}
add_action('wp_print_styles', 'load_google_fonts');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');