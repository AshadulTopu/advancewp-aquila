<?php

/**
 * Header template
 *  
 * @package Aquila
 * @since 1.0.0
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aquila Advance WordPress Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>
    
    <!-- header -->
    <header>
        <h1>Header</h1>
    </header>