<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once 'Extend/class.template.php';

// Template Header
add_action( '3n_header', function() {
    global $Extend_template;
    //Call Logo
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $Extend_template->logo( array(
        'title' => get_bloginfo('name'),
        'link' => $image[0],
    ) );
    $Extend_template->menu( array(
        'slug' => 'menu_header',
        'echo' => 'true',
        'styleCss' => 'n-Extend-menu-header',
    ) );
} );
// Template Footer 
add_action( '3n_footer', function() {
    global $Extend_template;
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $Extend_template->footer( array(
        'logo' => $image[0],
        'title' => get_bloginfo('Name'),
        'socail' => array(
            'facebook' => 'https://facebook.com',
            'tw' => 'https://facebook.com',
            'youtube' => 'https://facebook.com',
        ),
    ) );
} );