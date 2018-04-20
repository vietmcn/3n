<?php 
if ( !defined( 'ABSPATH' ) ) :
    exit;
endif;
if ( ! class_exists( 'n_View_template' ) ) :
    class n_View_template
    {
        protected $att = array();
        
        public function logo( $att )
        {
            if ( is_home() || is_front_page() ) {
                $h1 = 'h1';
            } else {
                $h1 = 'h2';
            }
            $out = '<'.$h1.' id="n_View_logo">';
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
            $out  = '<figure id="n-View-footer-logo" class="flex col-1">';
            $out .= '<a class="n-View-footer-logo-a" href="'.$att['link'].'" title="'.$att['title'].'"><img src="'.$att['logo'].'" alt="'.$att['title'].'" /></a>';
            $out .= '<figcaption><strong>Tạo sự khác biệt cho thường hiệu của bạn.</strong></figcaption>';
            $out .= '<div class="n-View-footer-socail">';
            $out .= '<a href="'.$att['socail']['linkdin'].'"><i class="ion-social-linkedin"></i></a>';
            $out .= '<a href="'.$att['socail']['tw'].'"><i class="ion-social-twitter"></i></a>';
            $out .= '<a href="'.$att['socail']['google_plus'].'"><i class="ion-social-googleplus"></i></a>';
            $out .= '<a href="'.$att['socail']['instagram'].'"><i class="ion-social-instagram-outline"></i></a>';
            $out .= '<a href="'.$att['socail']['facebook'].'"><i class="ion-social-facebook"></i></a>';
            $out .= '<a href="'.$att['socail']['youtube'].'"><i class="ion-social-youtube"></i></a>';
            $out .= '</div>';
            $out .= '</figure>';
            echo $out;
        }
        public function contact( $att ) 
        {
            if ( $att['position'] == 'footer' ) {
                $out  = '<aside id="n-View-contact" class="col-1">';
                $out .= '<p><span>'.$att['time_work']['name'].': </span>'.$att['time_work']['time']['start'].' - '.$att['time_work']['time']['off'].' '.$att['time_work']['time']['day'].'</p>';
                $out .= '<p class="minus"><span><i class="ion-minus-round"></i></span></p>';
                $out .= '<p class="phone"><span>P: </span>'.$att['phone'].'</p>';
                $out .= '<p><span>E: </span>'.$att['email'].'</p>';
                $out .= '<p><span>S: </span>'.$att['skype'].'</p>';
                $out .= '<p><span>Office: </span>'.$att['adds'].'</p>';
                $out .= '</aside>';
            } else {
                $out .= 'NONE';
            }
            echo $out;
        }
    }
endif;
$n_View_template = new n_View_template;