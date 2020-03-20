<?php 



if ( ! defined( 'ABSPATH' ) ) exit; 


/**
 * Register a custom menu page.
 */
function admin_menu_galeria() {

    add_menu_page ( __('GESTIONAR DATOS AWPCP','swb_simple_gallery'), __('GESTIONAR DATOS AWPCP','swb_simple_gallery'), 'manage_options',
     'gestionar-datos-awpcp', 
     'admin_menu_gestion_awpcp', 
     'dashicons-admin-page', 9 );
 
	// add_submenu_page ( 'admin_menu_plugin', 'Galeria', 'Galeria', 'manage_options', 'menu_galeria', 'listado_galeria' );
 
}

/**
 * Display a custom menu page
 */
function admin_menu_gestion_awpcp() {
    if (!current_user_can('manage_options'))  {
      wp_die( __('No tienes suficientes permisos para acceder a esta página.') );
    }elseif(isset($_GET['id_mostrar'])){
        include GN_PLUGIN_DIR_PATH . "controllers/listar.php";
    }else{
    include GN_PLUGIN_DIR_PATH . "controllers/page.php";
    }
}



add_action('admin_menu', 'admin_menu_galeria');

add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


function cargar_page_dashboard(){
    
}