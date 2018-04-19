<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Admin_control' ) ) {
    class n_Admin_control
    {
        public function n_welcome_screen()
        {
            ?>
                <section id="n-custom">
                    <form method="post" action="options.php">
                        <?php 
                            settings_fields( 'n_temp_option' );
                            do_settings_sections( 'n_temp_option' );
                            get_settings_errors( 'n_temp_option' );
                            settings_errors( 'n_temp_option' );          
                        ?>
                        <article id="page1" class="show top scrollbar-inner">
                            
                            <button type="submit"> Lưu Lại</button>
                        </article>
                    </form>
                </section>
            <?php
        }
    }
    
}
$n_Admin_Control = new n_Admin_control();