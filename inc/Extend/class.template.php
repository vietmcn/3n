<?php 
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
if ( ! class_exists( 'n_Extend_template' ) ) :
    class n_Extend_template
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
        public function footer( $att )
        {
            $out .= '<figure id="n-Extend-footer-logo">';
            $out .= '<a href="'.$att['link'].'" title="'.$att['title'].'"><img src="'.$att['logo'].'" alt="'.$att['title'].'" /></a>';
            $out .= '<figcaption><strong>Tạo sự khác biệt cho thường hiệu của bạn.</figcaption>';
            $out .= '<a href="'.$att['socail']['facebook'].'"><i class="ion-social-facebook"></i></a>';
            $out .= '<a href="'.$att['socail']['tw'].'"><i class="ion-social-twitter"></i></a>';
            $out .= '<a href="'.$att['socail']['youtube'].'"><i class="ion-social-youtube"></i></a>';
            $out .= '</figure>';
            echo $out;
        }
    }
endif;
$Extend_template = new n_Extend_template;