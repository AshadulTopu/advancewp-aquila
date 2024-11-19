<?php
/**
 * Register Menus
 *
 * Trait Singleton
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus {
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
        add_action( 'init', [$this, 'register_menus'] );
    }

    public function register_menus() {
        register_nav_menus([
            'aquila_main_menu' => esc_html__( 'Main Menu', 'aquila' ),
            'aquila_footer_menu' => esc_html__( 'Footer Menu', 'aquila' ),
        ]);
    }  

    public function get_menu_id( $location ) {
        // Get menu id by location
            $locations = get_nav_menu_locations();
        //  return $locations[ $location ];
        $menu_id = $locations[ $location ];
        return !empty( $menu_id ) ? $menu_id : '';
        
    }

    public function get_child_menu_items( $menu_array, $parent_id ) {
        $child_menu_items = [];
        if( !empty( $menu_array ) && is_array( $menu_array ) ) {
            foreach( $menu_array as $menu ) {
                if( intval( $menu->menu_item_parent ) == $parent_id ) {
                    // $child_menu_items[] = $menu;
                    array_push( $child_menu_items, $menu );
                }
            }
            return $child_menu_items;
        }
        // foreach( $menu_array as $menu_item ) {
        //     if( $menu_item->menu_item_parent == $parent_id ) {
        //         $child_menu_items[] = $menu_item;
        //     }
        // }
        // return $child_menu_items;
    }

}