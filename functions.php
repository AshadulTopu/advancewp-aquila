<?php
/** 
 * Theme functions
 *
 * @package Aquila
 */


 // Enqueue scripts and styles
function aquila_enqueue_scripts() {

    // Register style.css
    // wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'./assets/css/bootstrap.min.css', array(), '5.2.3', 'all' );
    // wp_enqueue_style( 'main-style', get_template_directory_uri().'./assets/css/main.css', [], filemtime( get_template_directory() . '/assets/css/main.css' ), 'all' );
    wp_enqueue_style( 'aquila-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );


    /* conditional styles with enqueue_style */
    // if ( is_front_page() ) {
    //     wp_enqueue_style( 'home-style', get_template_directory_uri() . './assets/css/home.css', [], filemtime( get_template_directory() . '/assets/css/home.css' ), 'all' );
    // }

    /* conditional styles with register_style */
    // wp_register_style( 'home-style', get_template_directory_uri() . './assets/css/home.css', [], filemtime( get_template_directory() . '/assets/css/home.css' ), 'all' );
    // if ( is_front_page() ) {
    //     wp_enqueue_style( 'home-style' );
    // }

    // Register main.js in the footer
        wp_enqueue_script( 'jquery');
    // wp_enqueue_script( 'aquila-bootstrap', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', [], '5.2.3', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . './assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
}

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );









 