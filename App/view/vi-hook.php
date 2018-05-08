<?php
// Header
add_action( '3n_header', 'n_View_header' );
// Index
add_action( '3n_index', 'n_View_index' );
add_action( '3n_index', 'n_View_service' );
add_action( '3n_index', 'v_View_client' );
add_action( '3n_index', 'n_View_qt' );
/**
 * 
 * @page
 * @since 1.0
 * Name: Serveice
 * 
 */
add_action( '3n_page', 'n_View_page' );
add_action( '3n_page', 'v_View_client' );
add_action( '3n_page', 'n_View_qt' );
/**
 * 
 * Name Card
 * @since 1.0
 * 
 */
add_action( '3n_single', 'namecards' );