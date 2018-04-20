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
    ?>
        <section id="n-custom">
            <?php n_Admin_control::header( array(
                'n_title' => '3Abrand+',
                'n_nameoption' => 'Tuỳ CHỉnh Giao Diện',
            ) ); ?>
            <form method="POST" action="option.php">
                <div class="form">
                    <?php 
                        settings_fields( 'n_temp_option' );
                        do_settings_sections( 'n_temp_option' );
                        get_settings_errors( 'n_temp_option' );
                        settings_errors( 'n_temp_option' );
                        n_Admin_control::form( array(
                            'logo' => true,
                            'n_title' => true,
                            'n_font' => true,
                            'adds' => true,
                        ) );
                    ?>
                    <button type="submit">Lưu Lại</button>
                </div>
            </form>
        </section>
        <div class="footer flex">
            Design & Developed by <a href="//vietmcn.com">Vietmcn.com</a>
        </div>
    <?php
}