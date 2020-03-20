<?php 

global $wpdb;

$obtener_datos = $wpdb->get_results("SELECT * FROM wp_awpcp_ads where ad_category_id = ".$_GET['id_mostrar']."");


var_dump($obtener_datos);