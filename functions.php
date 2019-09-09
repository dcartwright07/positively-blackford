<?php

// Turn theme support on for various features
// ====================================
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/* #region Initialize menus to use in the admin panel */
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-social-media-menu' => __( 'Social Media' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );
/* #endregion */

/* #region Import all CSS */
function pb_theme_style() {

	// Webfonts
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );

	// Main Theme Styles
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'pb_theme_style' );
/* #endregion */

/* #region Import all JavaScript */
function pb_theme_js() {

	// Theme Scripts
	wp_enqueue_script( 'plugins_js', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'functions_js', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '',  true );

}
add_action( 'wp_enqueue_scripts', 'pb_theme_js' );
/* #endregion */

// Add SVG image support to available MIME types
// ====================================
function add_file_types_to_uploads( $file_types ) {

	$new_filetypes = array();
	$new_filetypes[ 'svg' ] = 'image/svg+xml';
	$file_types = array_merge( $file_types, $new_filetypes );
	return $file_types;

}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

?>