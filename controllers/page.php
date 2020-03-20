<?php 

global $wpdb;


?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        
        <form action="admin.php">

            <input type="hidden" name="page" value="gestionar-datos-awpcp">
            <div class="input-group">
            <select name="id_mostrar" class="form-control" id="">
            <?php 
            $obtener_categorias = $wpdb->get_results("SELECT * FROM wp_awpcp_categories");
            foreach($obtener_categorias as $key => $value):
            ?>

            <option value="<?php echo $value->category_id; ?>"><?php echo $value->category_name; ?></option>

            <?php endforeach; ?>

            </select>


            <button type="submit" class="btn btn-success">Buscar resultados</button>
            </div>
        </form>        
        </div>
    </div>
</div>


