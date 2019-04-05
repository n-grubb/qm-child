<?php
/**
 * Functions.php: Theme Boostrapping
 * 
 * This file is used only to load in the necessary files for the theme
 * There shouldn't be any functions added in here!
 *
 */

// path for child theme includes
$theme_path = get_stylesheet_directory();

/**
 * Include the theme assets file
 * Contains logic for enqueueing styles and scripts
 */
include_once $theme_path . '/inc/assets.php';

/**
 * Add Custom Post Types
 * 
 * these custom post types are in the main theme, but can optionally activated in child themes.
 */
require get_template_directory() . '/inc/cpts/testimonials.php';
require get_template_directory() . '/inc/cpts/staff.php';
