<?php
/**
* Load the theme.
*/

if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

/**
 * Define theme's prefix.
 */
define( 'BT_THEME_PREFIX', 'bt' );

/**
 * - Register Navigation Name
 * @var array
 */
register_nav_menus( array(
	'primary'         => 'Primary',
	'primary_right'   => 'Primary Right Menu',
	'footer_menu_1'   => 'Footer Menu 1',
	'footer_menu_2'   => 'Footer Menu 2',
	'footer_menu_3'   => 'Footer Menu 3',
) );

/**
 * Switch default core markup to output valid HTML5.
 */
add_theme_support( 'html5' );

/**
 * Declare support for title theme feature.
 */
add_theme_support( 'title-tag' );

/**
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );


/**
 * [action__front_style Function to add style at front side]
 *
 */
function action__front_style() {
	// Register and enqueue style css and js
	wp_register_style( BT_THEME_PREFIX . '/style', get_stylesheet_uri() );
	wp_enqueue_style( BT_THEME_PREFIX . '/style');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_script( 'jquery-351', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js');
	wp_enqueue_script( 'slick-181', get_template_directory_uri() . '/assets/js/slick-1.8.1.min.js');
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js');
}
add_action( 'wp_enqueue_scripts', 'action__front_style' );