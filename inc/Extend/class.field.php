<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Extend_field' ) ) {
    class n_Extend_field
    {
        protected $att = array();
        
        function text()
        {

        }
        public function send( $att )
        {
            
        }
    }
    
}
$n_Extend_fields = new n_Extend_field;