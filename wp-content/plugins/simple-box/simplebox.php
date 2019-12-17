<?php
/*
Plugin Name: Simple Box
Version: 1.0
Plugin URI: http://www.pfcevolution.com
Description: Simple Box create boxes .
Author: Pedro Porras
Text Domain: simple-box
Domain Path: /translation
Author URI: https://www.pfcevolution.com
*/
require_once ('includes/shortcode.php');

 add_action('wp_enqueue_scripts', 'boxes_register_plugin_styles');
 
 function boxes_register_plugin_styles() {
  	wp_register_style('boxes', plugins_url('simple-box/css/simpleBox.css'));
    wp_enqueue_style('boxes');
}