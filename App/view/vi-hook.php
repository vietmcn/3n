<?php
// Header
add_action( '3n_header', 'n_View_header' );
// Index
add_action( '3n_index', 'n_View_index' );
add_action( '3n_index', 'n_View_service' );
/**
 * 
 * @page
 * @since 1.0
 * Name: Serveice
 * 
 */
add_action( '3n_page', 'n_View_contact' );