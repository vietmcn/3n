<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Admin_control' ) ) {
    class n_Admin_control
    {
        protected $att = array();

        private function form( $att )
        {
            global $n_Extend_field;
            $n_Extend_field->field( $att );
        }
        public static function n_welcome_screen( $att )
        {
            ?>
                <section id="n-custom">
                    <header>
                        <div class="flex Logo-Title">
                        <h1><?php echo $att['n_title'];?> </h1>
                        <p><?php echo $att['n_nameoption'];?></p>
                        </div>
                    </header>
                    <form method="POST" action="option.php">
                        <div class="form">
                            <?php 
                                settings_fields( 'n_temp_option' );
                                do_settings_sections( 'n_temp_option' );
                                get_settings_errors( 'n_temp_option' );
                                settings_errors( 'n_temp_option' );
                                $this->form( array(
                                    'n_field_name' => 'title',
                                    'n_field_type' => 'textbox',
                                    'n_field_value' => '',
                                ) );
                                $this->form( array(
                                    'n_field_name' => 'logo',
                                    'n_field_type' => 'upfile',
                                    'n_filed_value' => '',
                                ) );
                            ?>
                        </div>
                    </form>
                </section>
                <div class="footer flex">
                    Design & Developed by <a href="//vietmcn.com">Vietmcn.com</a> - <?php echo $att['n_version'];?>
                </div>
            <?php
        }
    }
    
}
$n_Admin_Control = new n_Admin_control();