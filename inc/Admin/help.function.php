<?php 
if ( ! defined('ABSPATH') ) {
    exit;
}
// import Class Welcome Extend Template
require_once dirname( N_EXTEND_FILE ) .'/inc/Admin/class.control.php';

function n_register_menu_option_template() {
    add_menu_page(
        __( '3Abrand - Mở Rộng Giao Diện', '3n_' ),
            '3Abrand+', // Tên Phần Mở Rộng
            'manage_options',
            'n_template', // Tên Đối Tượng
            'n_front_option', // Gọi Đối Tượng Hiển Thị
            'dashicons-before-vietmcn_icon', // Icon 
            '64'
    );
    add_action( 'admin_init', function() { 
        register_setting( 'n_temp_option', 'n_add_option_item' );
    } );
}
add_action( 'admin_menu', 'n_register_menu_option_template' );

//Import File Stye And Java
add_action( 'admin_enqueue_scripts', function() {
    global $n_ver;
    wp_enqueue_style( 'n-style-admin', get_template_directory_uri() . '/Public/Css/panel.min.css', false, $n_ver );
} );
//Render
function n_front_option() {
    n_Admin_control::n_welcome_screen( array(
        'n_title' => '3Abrand',
        'n_nameoption' => 'Cài đặt tuỳ chỉnh themes',
        'n_version' => '1.0',
    ) );
}