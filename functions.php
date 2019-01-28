<?php
/**
 * Child theme functions.
 *
 * @package Thyself
 * @since Thyself Child 1.0
 */

/**
 * Thyself Child Theme
 *
 * Place any custom functionality/code snippets here.
 */
function thyself_child_styles() {
	wp_enqueue_style( 'thyself-parent-style', get_parent_theme_file_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'thyself_child_styles' );
