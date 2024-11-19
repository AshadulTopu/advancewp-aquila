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
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions and filters
    }
}