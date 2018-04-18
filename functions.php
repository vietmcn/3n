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

//Get VerSion Template
$version = wp_get_theme('3n');
$n_ver = $version->get( 'Version' );
//Admin
require_once 'inc/Admin/class.control.php';
//Setup template
require_once 'inc/help.setup.php';
//Functions
require_once 'inc/help.functions.php';