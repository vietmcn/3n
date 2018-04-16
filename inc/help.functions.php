<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once 'Extend/class.header.php';
// Get logo
add_action( '3n_header', function() {
    //setup logo
    $header = new n_Extend_header;
    //Call Logo
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $header->logo( array(
        'title' => get_bloginfo('name'),
        'link' => $image[0],
    ) );
    $header->menu( array(
        'slug' => 'menu_header',
        'echo' => 'true',
        'styleCss' => 'n-Extend-menu-header',
    ) );
} );