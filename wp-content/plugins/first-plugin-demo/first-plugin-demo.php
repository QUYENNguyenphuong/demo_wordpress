<?php
/*
Plugin Name:  First Plugin Demo
Plugin URI:   https://demo_wordpress.local/plugins
Description:  My First Plugin Demo
Version:      1.0
Author:       QuyenNguyen
Author URI:   https://demo_wordpress.local
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
if(!class_exists('First_Plugin_Demo'))
{
    class First_Plugin_Demo {
        function __construct() {
            if(!function_exists('add_shortcode'))
            {
                return;
            }
            add_shortcode('hello', array(&$this,'hello_func'));
        }
        function hello_func($attr = array(), $content = null) {
            extract(shortcode_atts(array('name'=>'World'), $attr));
            return '<div><h1>Hello '. $name .'</h1></div>';
        }
    }
}
function demo_load(){
    $demo =  new First_Plugin_Demo();
}
add_action('plugins_loaded', 'demo_load');
