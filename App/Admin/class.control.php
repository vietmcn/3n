<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Admin_control' ) ) {
    class n_Admin_control
    {
        protected $att = array();

        public static function header( $att )
        {
            ?>
                <header>
                    <div class="flex Logo-Title">
                        <h1><?php echo $att['n_title'];?> </h1>
                        <p><?php echo $att['n_nameoption'];?></p>
                    </div>
                </header>
            <?php 
        }
        public static function form( $att )
        {
            global $n_Extend_fields;
            $n_Extend_fields->sender( array(
                'n_type' => $att['n_type'],
                'n_value' => $att['n_value'],
            ) );
        }
    }
    
}
$n_Admin_Control = new n_Admin_control();