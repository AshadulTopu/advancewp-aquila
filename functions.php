<?php
/** 
 * Theme functions
 *
 * @package Aquila
 */


 // define constants
if( ! defined( 'AQUILA_DIR_PATH' ) ) {
    define( 'AQUILA_DIR_PATH', untrailingslashit(  get_template_directory() ) );
}
if( ! defined( 'AQUILA_DIR_URI' ) ) {
    define( 'AQUILA_DIR_URI', untrailingslashit(  get_template_directory_uri() ) );
}

// echo '<pre>';
// print_r( AQUILA_DIR_PATH );
// echo '</pre>';
// wp_die( );

// require autoloader
require_once( AQUILA_DIR_PATH . '/inc/helpers/autoloader.php');
function aquila_get_theme_instance() {
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();




//  // Enqueue scripts and styles
// function aquila_enqueue_scripts() {

//     // Register style.css
//     wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'./assets/library/css/bootstrap.min.css', array(), 'v5.3.3', 'all' );
//     wp_enqueue_style( 'aquila-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
//     // wp_enqueue_style( 'main-style', get_template_directory_uri().'./assets/css/main.css', [], filemtime( get_template_directory() . '/assets/css/main.css' ), 'all' );


//     /* conditional styles with enqueue_style */
//     // if ( is_front_page() ) {
//     //     wp_enqueue_style( 'home-style', get_template_directory_uri() . './assets/css/home.css', [], filemtime( get_template_directory() . '/assets/css/home.css' ), 'all' );
//     // }

//     /* conditional styles with register_style */
//     // wp_register_style( 'home-style', get_template_directory_uri() . './assets/css/home.css', [], filemtime( get_template_directory() . '/assets/css/home.css' ), 'all' );
//     // if ( is_front_page() ) {
//     //     wp_enqueue_style( 'home-style' );
//     // }

//     // Register main.js in the footer
//     wp_enqueue_script( 'jquery');
//     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . './assets/library/js/bootstrap.bundle.min.js', ['jquery'], 'v5.3.3', true );
//     wp_enqueue_script( 'main-js', get_template_directory_uri() . './assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
// }

// add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );









 