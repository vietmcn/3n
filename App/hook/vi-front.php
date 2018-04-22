<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action('3n_index', 'n_View_cover' );
// footer 
add_action( '3n_footer', 'n_View_footer' );