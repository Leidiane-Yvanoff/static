<?php
/* Chargement de la feuille de styles */

function fx_enqueue_styles(){
    wp_enqueue_style( 'fx_style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'fx_enqueue_styles');

function fx_setup(){
    register_nav_menus( array(
    
        'menu' => 'Menu Principal',
             
     ));
    

add_action( 'after_setup_theme', 'fx_setup' );



add_theme_support( 'post-thumbnails' );
}

function fx_scripts() {
    
    wp_enqueue_style( 'fx-style', get_template_directory_uri() 
        . '/style.css' , array (), 'all');
   
	}

add_action( 'wp_enqueue_scripts', 'fx_scripts' );






/**

<?php
 * fxmarquis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fxmarquis
 */
 

