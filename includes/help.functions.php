<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once 'View/class.template.php';

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
add_action( '3n_index', function() {
    $out  = '<div id="n_View_banner"></div>';
    $out .= '<div id="n_View_About">';
    $out .= '<div class="">';
    $out .= '</div>';
} );
// Template Footer 
add_action( '3n_footer', function() {
    global $n_View_template;
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $n_View_template->footer( array(
        'logo' => get_template_directory_uri().'/assets/img/logo-footer.png',
        'title' => get_bloginfo('Name'),
        'link' => get_bloginfo( 'url' ),
        'socail' => array(
            'facebook' => 'https://facebook.com',
            'tw' => 'https://facebook.com',
            'youtube' => 'https://facebook.com',
            'linkdin' => '',
            'google_plus' => '',
            'instagram' => '',
        ),
    ) );
    echo '<div class="col-2"></div>';
    $n_View_template->contact( array(
        'position' => 'footer',
        'time_work' => array(
            'name' => 'Office Opening',
            'time' => array( 
                'start' => '9h30 AM',
                'off' => '18h30 PM',
                'day' => 'from Monday to Friday',
            ),
        ),
        'phone' => '0909 18 77 28',
        'email' => 'info@3abrand.com',
        'skype' => '3abrand.com',
        'adds' => '14 Phan Ton St, Da Kao Ward, Distrist 1, HCMC, Vietnam',
    ) );
} );