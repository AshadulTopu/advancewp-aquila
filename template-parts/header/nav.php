
<?php
/**
 * Header Nav template
 *  
 * @package Aquila
 * @since 1.0.0
 * */

 $menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
 $header_menu_id = $menu_class->get_menu_id( 'aquila_main_menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id);
// echo '<pre>';
// print_r($header_menus);
// wp_die();
?>

<nav id="site-navigation"role="navigation" class="main-navigation navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <?php if( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    if( !empty( $header_menus ) && is_array( $header_menus ) ) {
    ?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
        foreach( $header_menus as $menu_item ) {
            // Check for top-level menu items
            if( ! $menu_item->menu_item_parent ) {
                $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                $has_children = !empty( $child_menu_items ) && is_array( $child_menu_items );

                if( !$has_children ) {
                    // Simple menu item without children
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>"><?php echo esc_html( $menu_item->title ); ?></a>
                    </li>
                    <?php
                } else { 
                    // Dropdown menu with potential nested children
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo esc_html( $menu_item->title ); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php 
                            foreach( $child_menu_items as $child_menu_item ) { 
                                $third_level_menu_items = $menu_class->get_child_menu_items( $header_menus, $child_menu_item->ID );
                                $has_third_level = !empty( $third_level_menu_items ) && is_array( $third_level_menu_items );

                                if( !$has_third_level ) {
                                    // Simple second-level menu item
                                    ?>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>">
                                            <?php echo esc_html( $child_menu_item->title ); ?>
                                        </a>
                                    </li>
                                    <?php
                                } else {
                                    // Second-level dropdown with third-level children
                                    ?>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="<?php echo esc_url( $child_menu_item->url ); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?php echo esc_html( $child_menu_item->title ); ?>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php 
                                            foreach( $third_level_menu_items as $third_level_item ) {
                                                ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?php echo esc_url( $third_level_item->url ); ?>">
                                                        <?php echo esc_html( $third_level_item->title ); ?>
                                                    </a>
                                                </li>
                                                <?php 
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <?php 
                }
            }
        }
        ?>
    </ul>
    <?php
    }
    ?>

    
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <!-- <?php wp_nav_menu( [ 'theme_location' => 'aquila_main_menu', 'menu_id' => 'primary-menu', 'menu_class' => 'menu' ] ); ?> -->
</nav>