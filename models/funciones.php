<?php 



if ( ! defined( 'ABSPATH' ) ) exit; 


/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'GESTIONAR DATOS AWPCP', 'textdomain' ),
        'custom menu',
        'manage_options',
        'cargar_page_dashboard',
        '',
        '',
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function cargar_page_dashboard(){
    include GN_PLUGIN_DIR_PATH . "controllers/page.php";
}