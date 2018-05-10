<?php 
if (!defined('ABSPATH') ) {
    exit;
}
if ( !class_exists('n_GetmetaBox') ) {
    class n_GetmetaBox
    {
        protected $id = NULL;
        protected $key = NULL;
        protected $type = NULL;

        public function get( $id, $key, $type )
        {
            $meta = get_post_meta( $id, $key, true );
            foreach ($meta as $key => $value) {
                $key = explode( '-', $key );
                switch ($type) {
                    case 'logo':
                        if ( $key[1] == 'meta_logo' ) {
                            echo $value;
                        }
                        break;
                    case 'fullname':
                        if ( $key[1] == 'meta_fullname' ) {
                            echo $value;
                        }
                        break;
                    case 'chuvu':
                        if ( $key[1] == 'meta_chuvu' ) {
                            echo $value;
                        }
                        break;
                    case 'desc':
                        if ( $key[1] == 'meta_mota' ) {
                            echo $value;
                        }
                        break;
                    case 'email':
                        if ( $key[1] == 'meta_email' ) {
                            echo $value;
                        }
                        break;
                    case 'phone':
                        if ( $key[1] == 'meta_phone' ) {
                            echo $value;
                        }
                        break;
                    case 'homephone':
                        if ( $key[1] == 'meta_homephone' ) {
                            echo $value;
                        }
                        break;
                    case 'fax':
                        if ( $key[1] == 'meta_fax' ) {
                            echo $value;
                        }
                        break;
                    case 'cty':
                        if ( $key[1] == 'meta_cty' ) {
                            echo $value;
                        }
                        break;
                    case 'web':
                        if ( $key[1] == 'meta_web' ) {
                            echo $value;
                        }
                        break;
                    case 'facebook':
                        if ( $key[1] == 'meta_facebook' ) {
                            echo $value;
                        }
                        break;
                    case 'zalo':
                        if ( $key[1] == 'meta_zalo' ) {
                            echo $value;
                        }
                        break;
                    case 'viber':
                        if ( $key[1] == 'meta_viber' ) {
                            echo $value;
                        }
                        break;
                }
            }
            
        }
    }
}