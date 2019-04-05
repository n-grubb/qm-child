<?php 
/**
 * Register and enqueue theme styles
 *
 * @return void
 */
function qm_child_styles()
{
   /* sets version number based on last edit to theme.css */
   $version = filemtime(get_stylesheet_directory() . '/assets/css/theme.css');

   wp_enqueue_style( 'parent-styles', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri().'/assets/css/theme.css', array( 'parent-styles' ), $version );
}
add_action( 'wp_enqueue_scripts', 'qm_child_styles' );