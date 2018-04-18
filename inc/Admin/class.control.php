<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'n_Admin_control' ) ) {
    class n_Admin_control
    {
        public function __construct()
        {
            add_action( 'admin_menu', 	array( $this, 'welcome_register_menu' ) );
        }
        public function welcome_register_menu()
        {
            add_theme_page( '3n', 'Custom', 'activate_plugins', 'n-welcome', array( $this, 'n_welcome_screen' ) );
        }
        public function n_welcome_screen()
        {
            ?>
                <section id="n-custom">
                    <form method="post" action="options.php">
                    </form>
                </section>
            <?php
        }
    }
    
}
return new n_Admin_control();