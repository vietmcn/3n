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
    add_action( 'admin_init',   'register_settings' );
}
add_action( 'admin_menu', 	'n_register_menu_option_template' );

function register_settings() {
    register_setting( 'n_temp_option', 'n_add_option_item' );
}
function n_front_option() {
    n_Admin_control::n_welcome_screen( array(
        '' => '',
    ) );
}