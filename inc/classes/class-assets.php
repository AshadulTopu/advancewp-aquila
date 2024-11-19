<?php
/**
 * Enqueue theme assets
 *
 * Trait Singleton
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {
        // Load class 

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions and filters

        /**
         * Actions
         */
        add_action( 'wp_enqueue_scripts', [$this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'register_scripts'] );
    }

    public function register_styles(){

    // Register style.css
    wp_enqueue_style( 'bootstrap-style', AQUILA_DIR_URI . './assets/library/css/bootstrap.min.css', array(), 'v5.3.3', 'all' );
    wp_enqueue_style( 'aquila-style', get_stylesheet_uri(), [], filemtime( AQUILA_DIR_PATH . '/style.css' ), 'all' );
    
    /* conditional styles with enqueue_style */
    // if ( is_front_page() ) {
    //     wp_enqueue_style( 'home-style', AQUILA_DIR_URI . './assets/css/home.css', [], filemtime( AQUILA_DIR_PATH . '/assets/css/home.css' ), 'all' );
    // }

    /* conditional styles with register_style */
    // wp_register_style( 'home-style', AQUILA_DIR_URI . './assets/css/home.css', [], filemtime( AQUILA_DIR_PATH . '/assets/css/home.css' ), 'all' );
    // if ( is_front_page() ) {
    //     wp_enqueue_style( 'home-style' );
    // }

    }
    
    public function register_scripts(){

    // Register main.js in the footer
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap-js', AQUILA_DIR_URI . './assets/library/js/bootstrap.bundle.min.js', ['jquery'], 'v5.3.3', true );
    wp_enqueue_script( 'main-js', AQUILA_DIR_URI . './assets/js/main.js', [], filemtime( AQUILA_DIR_PATH . '/assets/js/main.js' ), true );
    }

}