<?php 

//Enqueue scripts and styles for use
add_action( 'wp_enqueue_scripts', 'startertheme_load_scripts' );
function startertheme_load_scripts(){
    wp_enqueue_style( 'startertheme', get_template_directory_uri() . '/style.css');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'bootstrap-carousel', get_template_directory_uri() . '/node_modules/bootstrap/js/carousel.js');
}

//Register menus
function startertheme_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('utility-menu',__( 'Utility Menu' ));
  register_nav_menu('footer-menu-1',__( 'Footer Menu One' ));
  register_nav_menu('footer-menu-2',__( 'Footer Menu Two' ));
  register_nav_menu('footer-menu-3',__( 'Footer Menu Three' ));
  register_nav_menu('footer-menu-4',__( 'Footer Menu Four' ));
  register_nav_menu('footer-menu-5',__( 'Footer Menu Five' ));
  register_nav_menu('footer-menu-6',__( 'Footer Menu Six' ));
  register_nav_menu('footer-menu-7',__( 'Footer Menu Seven' ));
  
}
add_action( 'init', 'startertheme_register_menus' );


;?>