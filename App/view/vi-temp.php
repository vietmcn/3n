<?php 
/** 
 * Set View 
 */
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
/**
 * Import View Class
 */
require_once ( N_EXTEND_FOLDER .'/App/view/class/vi-class-front.php' );

add_action( '3n_header', function() {
    global $n_View_template;
    //Call Logo
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $n_View_template->logo( array(
        'title' => get_bloginfo('name'),
        'link' => ( isset( $image[0] ) ) ? $image[0] : get_template_directory_uri().'/assets/img/Logo-150x150.png',
    ) );
    $n_View_template->menu( array(
        'slug' => 'menu_header',
        'echo' => 'true',
        'styleCss' => 'n-View-menu-header',
    ) );
} );
add_action( '3n_index', function() {
    $out  = '<div id="n_View_banner_header"></div>';
    $out .= '<div id="n_View_banner_about">';
    $out .= '<div class="n_View_container n_View_about flex">';
    $out .= '<span class="n_View_Icon_About"></span>';
    $out .= '<h2>Giới Thiệu Về Chúng Tôi</h2>';
    $out .= '<h4>Tạo sự khác biệt cho thương hiệu của bạn</h4>';
    $out .= '<p>3A Agency là một cơ quan kỹ thuật số và sáng tạo đầy đủ dịch vụ có trụ sở tại thành phố Hồ Chí Minh, Việt Nam. 
    Chúng tôi là một nhóm các chuyên gia trẻ tuổi có chuyên môn về thiết kế đáp ứng và các nền tảng sáng tạo, 
    chuyên cung cấp các giải pháp kỹ thuật số hiệu quả, có thể đo lường và sáng tạo cho khách hàng của chúng tôi.</p>';
    $out .= '<div>';
    $out .= '<a href="/contact" title="Liên Hệ">Chi Tiết</a>';
    $out .= '<a href="/">Liên Hệ</a>';
    $out .= '</div>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
} );
//Template Client 
add_action( '3n_index', function() {
    $out  = '<div id="n_View_banner_client">';
    $out .= '<div class="n_View_container">';
    $out .= '<h3 class="flex">Khách hàng <br/> chúng tôi</h2>';
    $out .= '<ul>';
    $out .= '<li><a href="#"><span class="client_1"></span></li>';
    $out .= '<li><a href="#"><span class="client_2"></span></li>';
    $out .= '<li><a href="#"><span class="client_3"></span></li>';
    $out .= '<li><a href="#"><span class="client_4"></span></li>';
    $out .= '<li><a href="#"><span class="client_5"></span></li>';
    $out .= '<li><a href="#"><span class="client_6"></span></li>';
    $out .= '<li><a href="#"><span class="client_7"></span></li>';
    $out .= '<li><a href="#"><span class="client_8"></span></li>';
    $out .= '<li><a href="#"><span class="client_9"></span></li>';
    $out .= '</ul>';
    $out .= '</div>';
    $out .= '</div>';
    echo $out;
} );
// Template Footer 
add_action('3n_footer', function() {
    global $n_View_template;
    $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    $n_View_template->footer( array(
        'logo' => get_template_directory_uri().'/App/assets/img/logo-footer.png',
        'title' => get_bloginfo('Name'),
        'link' => get_bloginfo( 'url' ),
        'socail' => array(
            'facebook' => '//facebook.com',
            'tw' => '//facebook.com',
            'youtube' => '//facebook.com',
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