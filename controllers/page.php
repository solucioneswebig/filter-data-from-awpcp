<?php 

global $wpdb;


?>


<form action="admin.php">

<input type="hidden" name="page" value="gestionar-datos-awpcp">

<select name="id_mostrar" id="">
<?php 
$obtener_categorias = $wpdb->get_results("SELECT * FROM wp_awpcp_categories");
foreach($obtener_categorias as $key => $value):
?>

<option value="<?php echo $value->category_id; ?>"><?php echo $value->category_name; ?></option>

<?php endforeach; ?>

</select>


<button type="submit">Buscar resultados</button>

</form>
