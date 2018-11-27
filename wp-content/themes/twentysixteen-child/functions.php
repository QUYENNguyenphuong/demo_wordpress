<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 11/27/2018
 * Time: 9:18 AM
 */

function twentysixteen_child_enqueue_scripts() {

    wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'twentysixteen_child_enqueue_scripts' );
?>
