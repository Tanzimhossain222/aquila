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
 // Build FIle Path
    if (!defined('AQUILA_BUILD_URI')){
        define('AQUILA_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist'); 
    }

    if (!defined('AQUILA_BUILD_JS_URI')){
        define('AQUILA_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/js'); 
    }
    if (!defined('AQUILA_BUILD_JS_DIR_PATH')){
        define('AQUILA_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/js'); 
    }


    if (!defined('AQUILA_BUILD_IMG_URI')){
        define('AQUILA_BUILD_IMG_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/src/img'); 
    }


    if (!defined('AQUILA_BUILD_CSS_URI')){
        define('AQUILA_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/dist/css'); 
    }
    if (!defined('AQUILA_BUILD_CSS_DIR_PATH')){
        define('AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/dist/css'); 
    }



 include_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';
 include_once AQUILA_DIR_PATH . '/inc/helpers/template-tags.php';

  // aquila_get_theme_instance() function for get_instance() method from class-aquila-theme.php
  function aquila_get_theme_instance(){
     \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
    }  

    aquila_get_theme_instance();            // call the function

// Remove Gutenberg Block Library CSS from loading on the frontend
 function aquila_remove_block_library_css(){
     wp_dequeue_style('wp-block-library');
     wp_dequeue_style('wp-block-library-theme');
     wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
 }

 add_action('wp_enqueue_scripts', 'aquila_remove_block_library_css', 100);