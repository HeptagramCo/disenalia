<script type="text/javascript" src="media/js/jquery.js"></script>
<script src="media/js/edit-form.js"></script>

<section  id="container-data-post">

	<h1>Administra los Usuarios</h1>
		<a href="user/add" class="add-user" title="Agregar Usuario">Agregar Usuario</a>
		<table class="table-content-post">
		<tr class="reference-table">
			<td colspan="6">Usuarios</td>
		</tr>
		<tr class="titles-content"><th>Nombre de Usuario</th><th>Tipo de usuario</th><th>Twitter</th><th>Facebook</th><th>e-mail</th><th>Editar/Eliminar</th></tr>
		<?php
			foreach ($rows as $row) {
		?>
				<tr id="<?=$row['name_user']?>" class="data-content">
					<td><?=$row['name_user']?></td>
					<td><?=$row['type_user']?></td>
					<td><?=$row['twitter_user']?></td>
					<td><?=$row['facebook_user']?></td>
					<td><?=$row['email_user']?></td>
					<td class="actions-content">
						<a href="#" class="edit" title="Editar"><span class="icon-pencil"></span></a>
						<a href="user/delete?id=<?=$row['id_user']?>" class="delete" title="Eliminar"><span class="icon-delete"></span></a>
					</td>

				</tr>

		<?php
			}
		?>
		</table>


	<div class="cortina-dialog"></div>

	<div class="dialog" id="form-edit">
		<span value="Cancelar" class="icon-delete" id="cancelar"></span>
    	<form action="user/update-user" method="post">
    		<input name="id" type="hidden" id="id" value="">
    		<label for="name">Nombre </label><input required type="text" placeholder="Nombre" id="real_name" name="real_name"/>
    		<label for='name'>User </label><input required type='text' placeholder='Nombre' id='name' name='name'/>
			<label for='password'>Contraseña </label><input required type='password' placeholder='Contraseña' id='password' name='password'/>
			<label for='type'>Tipo de Usuario </label>
			<select name="type">
  				<option value="admin" selected>Admin</option>
  				<option value="editor">Editor</option>
  				<option value="moderador">Moderador</option>
			</select>
			<label for='facebook'>Facebook </label><input required type='text' placeholder='Facebook' id='facebook' name='facebook' />
			<label for='twitter'>Twitter </label><input required type='text' placeholder='Twitter' id='twitter' name='twitter'/>
			<label for='email'>email </label><input required type='text' placeholder='email' id='email' name='email' />
			<input type="hidden" id="actualname" name="actual_name">
			<input type="hidden" id="actualemail" name="actual_email">
			<input type='submit' name='add' value='Actualizar'>
		</form>
	</div>

</section>
