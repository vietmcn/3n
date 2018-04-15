<?php 
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
if ( ! class_exists( 'n_Extend_header' ) ) :
    class n_Extend_header
    {
        protected $att = array();
        
        public static function logo( $att )
        {
            if ( is_home() || is_front_page() ) {
                $h1 = 'h1';
            } else {
                $h1 = 'h2';
            }
            $out = '<'.$h1.' id="n_Extend_logo">';
            $out .= '<img src="'.$att['link'].'" alt="'.$att['title'].'"/>';
            $out .= '</'.$h1.'>';
            echo $out;
        }
    }
endif;
$n_Extend_header = new n_Extend_header;