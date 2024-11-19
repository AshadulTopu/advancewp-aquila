<?php
/**
 * Bootstrap Aquila Theme
 * 
 * @package Aquila
 */


namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        // Load class 

        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions and filters

        /**
         * Actions
         */

         add_action( 'after_setup_theme', [$this, 'setup_theme'] );
    }

    public function setup_theme() {
        // Theme setup
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height' => 100,
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true,
        ] );
        add_theme_support( 'custom-background', [
            'default-color' => 'ffffff',
            'default-image' => AQUILA_DIR_URI . '/assets/images/abstract-geometric-art.webp',
        ] );
        // add_theme_support( 'custom-header', [
        //     'default-image' => AQUILA_DIR_URI . '/assets/images/abstract-geometric-art.webp',
        //     'default-text-color' => '000000',
        //     'width' => 1000,
        //     'height' => 250,
        //     'flex-height' => true,
        //     'flex-width' => true,
        // ] );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'automatic-feed-links');
        // add_theme_support( 'editor-styles', [
        //     'default-color-palette' => [
        //         [
        //             'name' => 'Dark',
        //             'slug' => 'dark',
        //             'color' => '#000',
        //         ],
        //         [
        //             'name' => 'Light',
        //             'slug' => 'light',
        //             'color' => '#fff',
        //         ],
        //     ],
        //     // 'default-image' => AQUILA_DIR_URI . '/assets/images/abstract-geometric-art.webp',
        //     'editor-color-palette' => [
        //         [
        //             'name' => 'Dark',
        //             'slug' => 'dark',
        //             'color' => '#000',
        //         ],
        //         [
        //             'name' => 'Light',
        //             'slug' => 'light',
        //             'color' => '#fff',
        //         ],
        //     ],
        //     'editor-font-sizes' => [
        //         [
        //             'name' => 'small',
        //             'slug' => 'small',
        //             'size' => 12,
        //         ],
        //         [
        //             'name' => 'regular',
        //             'slug' => 'regular',
        //             'size' => 16,
        //         ],
        //         [
        //             'name' => 'large',
        //             'slug' => 'large',
        //             'size' => 20,
        //         ],
        //         [
        //             'name' => 'huge',
        //             'slug' => 'huge',
        //             'size' => 24,
        //         ],
        //         [
        //             'name' => 'gigantic',
        //             'slug' => 'gigantic',
        //             'size' => 32,
        //         ],
        //     ],
        //     'editor-font-weights' => [
        //         [
        //             'name' => 'Light',
        //             'slug' => 'light',
        //             'weight' => 300,
        //         ],
        //         [
        //             'name' => 'Regular',
        //             'slug' => 'regular',
        //             'weight' => 400,
        //         ],
        //         [
        //             'name' => 'Bold',
        //             'slug' => 'bold',
        //             'weight' => 700,
        //         ],
        //         [
        //             'name' => 'Extra Bold',
        //             'slug' => 'extra-bold',
        //             'weight' => 800,
        //         ],
        //         [
        //             'name' => 'Black',
        //             'slug' => 'black',
        //             'weight' => 900,
        //         ],
        //     ],
        // ] );
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ] );
        
        add_editor_style();
        add_theme_support( 'wp-block-styles');
        add_theme_support( 'align-wide');

        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1240;
        }
    }
}