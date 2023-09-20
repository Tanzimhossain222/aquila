<?php
/**
 * Theme Functions
 * 
 * @package Aquila
 */

 
 if (!defined('AQUILA_DIR_PATH')){
     define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory())); 
 }

 if (!defined('AQUILA_DIR_URI')){
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri())); 
 }  



 include_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

  // aquila_get_theme_instance() function for get_instance() method from class-aquila-theme.php
  function aquila_get_theme_instance(){
     \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
    }  

    aquila_get_theme_instance();            // call the function

// setup theme Script
 function aquila_enqueue_scripts(){

  
 }

 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');

 ?>
 