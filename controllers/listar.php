<?php 

global $wpdb;

$obtener_datos = $wpdb->get_results("SELECT * FROM wp_awpcp_ads where ad_category_id = ".$_GET['id_mostrar']."");
$categoria = $wpdb->get_row("SELECT * FROM wp_awpcp_categories where category_id = ".$_GET['id_mostrar']."");
?>
<style>
.wp-admin select {

padding: 2px;
line-height: auto !important;
height: auto !important;

}
</style>

<div class="container">

<div class="row justify-content-center">
    <div class="col-md-7">

    <form action="admin.php" style="margin-top: 20%;">

        <input type="hidden" name="page" value="gestionar-datos-awpcp">
        <h3>Seleccionar categoria a filtrar</h3>
        <div class="input-group mb-3">
        <select name="id_mostrar" class="form-control" id="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <?php 
        $obtener_categorias = $wpdb->get_results("SELECT * FROM wp_awpcp_categories");
        foreach($obtener_categorias as $key => $value):
        ?>

        <option value="<?php echo $value->category_id; ?>" <?php if($_GET['id_mostrar'] ==$value->category_id ):  echo "selected"; endif; ?> ><?php echo $value->category_name; ?></option>

        <?php endforeach; ?>

        </select>
        <div class="input-group-prepend">
            <button type="submit" class="btn btn-success" id="button-addon1">Buscar resultados</button>
        </div>
        </div>
    </form>  

    </div>
</div>
    <div class="row">
    <div class="col-md-12">
        <hr>    
        <h3>Resultados para la categoria: <strong><i><?php echo $categoria->category_name; ?></i></strong></h3>
        <hr>
    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Detalle</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            
            </tr>
        </thead>
        <tbody>

        <?php 
        foreach($obtener_datos as $key => $value):
        ?>
            <tr>
            <th scope="row"><?php echo $value->ad_id; ?></th>
            <td><?php echo $value->ad_title; ?></td>
            <td><?php echo $value->ad_contact_name; ?></td>
            <td><?php echo $value->ad_contact_email; ?></td>
            <td><?php echo $value->ad_contact_phone; ?></td>
            
            </tr>
        <?php 
        endforeach;
        ?> 
        </tbody>
        </table>
     </div>
   </div>
</div>