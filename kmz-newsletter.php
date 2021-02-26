<?php
/**
 * Plugin Name: KMZ Newsletter
 * Description: Example demonstrating how to build first Gutenberg block
 * Author: Vladimir Kamuz
*/

/**
 * Admin CSS and JavaScript
 */
function kmz_block_assets(){
    wp_enqueue_script( 'kmz-newsletter', plugin_dir_url( __FILE__ ) . 'assets/block-newsletter.js', array( 'wp-blocks', 'wp-element', 'wp-editor' ) );
    wp_enqueue_style( 'kmz-newsletter-css', plugin_dir_url( __FILE__ ) . 'assets/block-newsletter.css', array( 'wp-edit-blocks' ) );
}
add_action( 'enqueue_block_editor_assets', 'kmz_block_assets' );

/**
 * Front CSS and JavaScript
 */
function kmz_block_front_end_assets(){
    wp_enqueue_style( 'wp-block-kmz-newsletter-css', plugin_dir_url( __FILE__ ) . 'assets/newsletter.css' );
}
add_action( 'wp_enqueue_scripts', 'kmz_block_front_end_assets' );