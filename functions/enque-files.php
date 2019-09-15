<?php
/**
 * Enque theme JS and CSS
 *
 * @package unstrapped
 */

if ( ! function_exists( 'enque_unstrapped_scripts' ) ) {

	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	$theme_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.css' );
	$custom_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/custom.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/theme.css', array(), $theme_css_version );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css', array(), $custom_css_version );
	$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/theme.js', array(), $js_version, true );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enque_unstrapped_scripts' );
