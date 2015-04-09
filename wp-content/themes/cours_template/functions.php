<?php


error_reporting(E_ALL);
ini_set('display_errors', 'Off');


/** WP Functions **/

add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );




function configuration_tailles_images()
{
    add_image_size( 'page-accueil-portail-slider', 490, 255, true );
    add_image_size( 'actualite', 330, 170, true );
    add_image_size( 'evenement', 355, 255, true );
    add_image_size( 'partenaire-logo', 9999, 80 );
    add_image_size( 'a-lire-aussi', 176, 127 );
    add_image_size( 'a-la-une', 733, 9999 );
}
add_action( 'after_setup_theme', 'configuration_tailles_images' );