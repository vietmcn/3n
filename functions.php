<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage 3N
 * @since 1.0
 */

if ( ! defined( 'N_EXTEND_FILE' ) ) {
	define( 'N_EXTEND_FILE', __FILE__ );
}
if ( ! defined( 'N_EXTEND_VER' ) ) {
	define( 'N_EXTEND_VER', '1.0' );
}
//Get VerSion Template
$version = wp_get_theme('3n');
$n_ver = $version->get( 'Version' );
if ( is_admin() ) {
	//Admin
	#require_once 'Inc/Admin/help.function.php';
}
// Config template
require_once 'includes/help.config.php';
// Functions
require_once 'includes/help.functions.php';