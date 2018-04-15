<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once 'Extend/class.header.php';
// Get logo
add_action( '3n_header', function() {
    n_Extend_header::logo( array(
        'title' => get_bloginfo('name'),
        'link' => 'https://i.imgur.com/Ge3Yjc2.jpg',
    ) );
} );