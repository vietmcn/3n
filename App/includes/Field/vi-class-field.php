<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Extend_field' ) ) {
    class n_Extend_field
    {
        protected $att = array();
        
        function textbox( $att )
        {
            $out = '<input id="n-Extend-value" value="'.$att['n_value'].'" class="" />';
            return $out;
        }
        public function sender( $att )
        {
            switch ( $att['n_type'] ) {
                case 'textbox':
                   echo $this->textbox( $att );
                   break;
                case 'dropdown' :
                    break;
            }
        }
    }
    
}
$n_Extend_fields = new n_Extend_field;