<?php


error_reporting(E_ALL);
ini_set('display_errors', 'Off');


/** WP Functions **/

add_theme_support( 'post-thumbnails' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

