<?php 

global $wpdb;


?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        <form action="admin.php" style="margin-top: 20%;">

            <input type="hidden" name="page" value="gestionar-datos-awpcp">
            <h3>Seleccionar categoria a filtrar</h3>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-success">Buscar resultados</button>
            </div>
            <select name="id_mostrar" class="form-control" id="">
            <?php 
            $obtener_categorias = $wpdb->get_results("SELECT * FROM wp_awpcp_categories");
            foreach($obtener_categorias as $key => $value):
            ?>

            <option value="<?php echo $value->category_id; ?>"><?php echo $value->category_name; ?></option>

            <?php endforeach; ?>

            </select>
            </div>
        </form>        
        </div>
    </div>
</div>


