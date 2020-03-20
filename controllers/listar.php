<?php 

global $wpdb;

$obtener_datos = $wpdb->get_results("SELECT * FROM wp_awpcp_ads where ad_category_id = ".$_GET['id_mostrar']."");

?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        foreach($obtener_datos as $key => $value):
        ?>
            <tr>
            <th scope="row"><?php echo $value->ad_id; ?></th>
            <td><?php echo $value->ad_title; ?></td>
            <td><?php echo $value->ad_contact_phone; ?></td>
            <td><?php echo $value->ad_contact_name; ?></td>
            <td><?php echo $value->ad_contact_email; ?></td>
            </tr>
        <?php 
        endforeach;
        ?> 
        </tbody>
        </table>
     </div>
   </div>
</div>