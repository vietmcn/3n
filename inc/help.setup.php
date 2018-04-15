<?php 
if( !defined( 'ABSPATH' ) ) {
    exit;
}
// Remove Bar Admin
add_filter('show_admin_bar', '__return_false');
// Setup Template
add_action( 'after_setup_theme', function() {
    //Setup template 3N
    /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
    ) );
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
    ) );
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

} );

//Reg Script
add_action( 'wp_enqueue_scripts', function() {

	global $n_ver;
	
	// Theme stylesheet.
	wp_enqueue_style( '3n-style', get_stylesheet_uri() );
	// Check Deivce
	if ( wp_is_mobile() ) {

	} else {
		wp_enqueue_style( '3n-desktop-style', get_theme_file_uri( '/Public/css/desktop.min.css' ), array('3n-style'), $n_ver, 'all' );
	}

} );