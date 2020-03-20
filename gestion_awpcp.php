<?php

/*

Plugin Name: GESTION DATOS AWPCP

Plugin URI: https://solucioneswebig.com/

Description: Permite obtener mediante filtro de categoria los datos de los registros

Version: 1.0

Author: SolucionesWeBig - Alexander Gutierrez

Author URI: https://solucioneswebig.com/

License: GPLv2

*/



if ( ! defined( 'ABSPATH' ) ) exit; 

 

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {

	require_once dirname( __FILE__ ) . '/cmb2/init.php';

} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {

	require_once dirname( __FILE__ ) . '/CMB2/init.php';

}








global $wpdb;





define('PREFIX', 'gn_');

define( 'GN_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

define( 'GN_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

define('PLUGIN_BASE_DIR', dirname(__FILE__));



//FINALIZO LA DEFINICION DE LAS TABLAS DE LA BD



function design_styles(){

	wp_enqueue_style( 'mtb-style-general', GN_PLUGIN_DIR_URL . 'assets/css/style.css', false );

	wp_enqueue_style( 'mtb-bootstrap-general', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false );

	wp_enqueue_style( 'datatable-public-css','//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css', false );

	wp_enqueue_style( 'datatable-public-responsive-css','https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css', false );

	wp_enqueue_style( 'datatable-buttons','https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css', false );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'datatable-public-js','//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array('jquery'), '1.10.19', true );

	wp_enqueue_script( 'datatable-public-responsive-js','https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-buttons','https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-buttons-flash','https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-jszip','https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-pdfmake','https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-html5-buttons','https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'datatable-print-buttons','https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'sweet-alert','https://cdn.jsdelivr.net/npm/sweetalert2@8', array('jquery'), null, true );


	wp_enqueue_script( 'scriot-gdsw-general', GN_PLUGIN_DIR_URL . 'assets/js/scripts.js' , array( 'jquery' ), null , true );
	

}

add_action('admin_head', 'design_styles');



//Devolver datos a archivo js
add_action('wp_ajax_nopriv_ajax_busqueda','busqueda_ajax');
add_action('wp_ajax_ajax_busqueda','busqueda_ajax');

function busqueda_ajax(){
  include "ajax/busqueda.ajax.php";
}


add_action( 'wp_ajax_nopriv_submit_dropzonejs', 'dropzonejs_upload' ); //allow on front-end
add_action( 'wp_ajax_submit_dropzonejs', 'dropzonejs_upload' );

function dropzonejs_upload() {
	include "ajax/subirDocumentos.ajax.php";
}

?>

<script>
(function($) {
    $(document).ready(function() {


        if($(window).width() < 768){
        $('.table').DataTable( {
           responsive: true
        } );            
        }else{
         $('.table').DataTable();                  
        }


    });
})(jQuery);

</script>

<?php


/*Incluimos la carpeta de models*/

include GN_PLUGIN_DIR_PATH . "models/index.php";

/*Incluimos la carpeta de models*/

include GN_PLUGIN_DIR_PATH . "controllers/index.php";


/*Incluimos la carpeta de views*/

include GN_PLUGIN_DIR_PATH . "views/index.php";











