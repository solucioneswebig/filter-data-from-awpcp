<?php 



if ( ! defined( 'ABSPATH' ) ) exit; 


/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'GESTIONAR DATOS AWPCP', 'ges_awpcp' ),
        __( 'GESTIONAR DATOS AWPCP', 'ges_awpcp' ),
        'manage_options',
        'cargar_page_dashboard',
        'admin_menu_gestion_awpcp',
        'dashicons-camera',
        6
    );
}

/**
 * Display a custom menu page
 */
function admin_menu_gestion_awpcp() {
    if (!current_user_can('manage_options'))  {
      wp_die( __('No tienes suficientes permisos para acceder a esta página.') );
    }else{
      include GN_PLUGIN_DIR_PATH . "controllers/page.php";
    }
}