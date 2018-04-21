<?php 
if( !defined( 'ABSPATH' ) ) {
    exit;
}
//Field
require_once 'Extend/class.field.php';
//View
require_once 'View/class.template.php';

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
	/*
	 * Custom Logo
	 * 
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo' );
	/*
	 * Menu
	 * 
	 * @link 
	 */
	register_nav_menus( array(
		'menu_header'    => __( 'Menu Hedaer', '3N' ),
	) );
} );

//Reg Script
add_action( 'wp_enqueue_scripts', function() {

	global $n_ver;
	
	// Theme stylesheet.
	wp_enqueue_style( '3n-style', get_theme_file_uri( '/style.css' ), '', $n_ver, 'all' );
	wp_enqueue_style( '3n-icon', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', '', '2.0.1', 'all' );
	wp_enqueue_style( '3n-font', '//fonts.googleapis.com/css?family=Roboto:400,500,700', '', '', 'all' );
	// Check Deivce
	if ( wp_is_mobile() ) {

	} else {
		wp_enqueue_style( '3n-desktop-style', get_theme_file_uri( '/assets/css/desktop.min.css' ), array('3n-style'), $n_ver, 'all' );
	}

} );