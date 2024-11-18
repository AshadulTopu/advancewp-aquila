
<?php
/**
 * Header Nav template
 *  
 * @package Aquila
 * @since 1.0.0
 * */
?>


<nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="screen-reader-text">Menu</span>
    </button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav>