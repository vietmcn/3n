<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require_once get_template_directory(). '/App/includes/Lib/vi-class-field.php';

if ( !class_exists( 'n_Metabox' ) ) :
    class n_Metabox
    {
        public function __construct()
        {
            add_action( 'load-post.php',               array( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php',           array( $this, 'init_metabox' ) );
        }
        public function init_metabox()
        {
             //Hình ảnh bài viết       
             new Trangfox_field( 
                array( 
                    array(
                        'id'        => '_meta_card',
                        'title'     => 'Thuộc tính bài viết',
                        'post_type' => 'namecard',
                        'list' => array( 
                            'Ảnh đại diện'     => 'meta_thumbnail',
                            'Chứ vụ'     => 'meta_chuvu',
                            'Email'     => 'meta_email',
                            'Phone'     => 'meta_phone',
                            'Home Phone'     => 'meta_homephone',
                            'Fax'     => 'meta_fax',
                            'Công ty'     => 'meta_cty',
                            'web'     => 'meta_web',
                            'Facebook'     => 'meta_facebook',
                            'zalo'     => 'meta_zalo',
                            'viber'     => 'meta_viber',
                        ),
                        'field' => 'textfield_muti',
                    ),
                )
            );
        }
    }
endif;
return new n_Metabox();