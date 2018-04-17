<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once 'View/class.front.php';

// Template Header
add_action( '3n_header', function() {
    global $View_template;
    //Call Logo
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $View_template->logo( array(
        'title' => get_bloginfo('name'),
        'link' => $image[0],
    ) );
    $View_template->menu( array(
        'slug' => 'menu_header',
        'echo' => 'true',
        'styleCss' => 'n-View-menu-header',
    ) );
} );
// Template Footer 
add_action( '3n_footer', function() {
    global $View_template;
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $View_template->footer( array(
        'logo' => $image[0],
        'title' => get_bloginfo('Name'),
        'link' => get_bloginfo( 'url' ),
        'socail' => array(
            'facebook' => 'https://facebook.com',
            'tw' => 'https://facebook.com',
            'youtube' => 'https://facebook.com',
        ),
    ) );
    $View_template->contact( array(
        'position' => 'footer',
        'time_work' => array(
            'name' => 'Office Opening:',
            'time' => array( 
                'start' => '9h30 AM',
                'off' => '18h30 PM', 
            ),
        ),
        'phone' => '',
        'Email' => '',
        'Skype' => '',
        'adds' => '',
    ) );
} );