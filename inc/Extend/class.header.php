<?php 
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
if ( ! class_exists( 'n_Extend_header' ) ) :
    class n_Extend_header
    {
        protected $att = array();
        
        public function logo( $att )
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
        public function menu( $att ) 
        {
            $out = wp_nav_menu( array(
                'theme_location' => $att['slug'],
                'echo' => $att['echo'],
                'container_class' => $att['styleCss'],
            ) );
            if ( $att['echo'] == false ) {
                return $out;
            }
        }
    }
endif;
$n_Extend_header = new n_Extend_header;