<?php
if (isset($_POST['add'])) {
	$dir_destino = $_SERVER['DOCUMENT_ROOT']."/media/img/slider/";
	$imagen_subida = $dir_destino . basename($_FILES['url']['name']);
	$imagen_lista = ROOT_RUTA. "media/img/slider/" . basename($_FILES['url']['name']);
	//Variables del metodo POST

	if(!is_writable($dir_destino)){
		echo "no tiene permisos";
	}else{
		if(is_uploaded_file($_FILES['url']['tmp_name'])){
			if (move_uploaded_file($_FILES['url']['tmp_name'], $imagen_subida)) {
				$consulta = new SliderModel;
				return $consulta->set([
						"url" =>$imagen_lista,
						"id" => $_POST['category']
					]);
			}else{
				echo "<script>alert('Algun error en la carga intenta de Nuevo. Disculpa las molestias.')</script>";
			}
		}
		else{
			echo "<script>alert('Error al guardar el archivo probablemente muy pesado')</script>";
		}
	}
}
?>

<section id="container-data-category">
	<h1>Administra tus Categorias</h1>
	<table class="table-content-category">
		<tr class="reference-table">
			<td colspan="4">Listado de Publicaciones</td>
		</tr>
		<tr class="titles-content">
			<th>Imagen</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($values as $row) {
			?>
			<tr class="data-content">
				<td><img src="<?=$row["url_slide"]; ?>" alt=""> </td>
				<td class="actions-content">
					<a href="/slider/edit/?e=<?=$row['id_slide']?>" title="Editar"><span>Editar</span></a>
					<a href="/slider/delete/?d=<?=$row['id_slide']?>" title="Eliminar"><span>Eliminar</span></a>
				</td>
			</tr>
			<?php
		} ?>
	</table>

	<div class="button-new-category">
		Agregar nueva Fotografia
	</div>
</section>


<section class="form-add-category">
	<span class="cerrar">Cerrar</span>
	<article class="cont">
		<h1>Agraga nueva imagen</h1>
		<form action="" method="post" enctype="multipart/form-data">
			<span>Seleccionar Imagen:  </span><input type="file" name="url">
			<span>Seleccionar Sede:</span>
			<select name="category" id="">
					<?php foreach ($category as $row2) {?>
						<option value="<?=$row2['id_category']?>"><?=$row2['name_category']?></option>
					<?php } ?>
				</select>
			<input name="add" type="submit" value="Guardar">
		</form>

	</article>
</section>