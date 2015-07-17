<section  id="home-admin-content">
	<h1>Editar Usuario</h1>
	<div class="form-edit-me">
		<form action="/user/update" method="post">
			<?php
			foreach ($values as $row) {
			?>
				<input name="id" type="hidden" id="id" value="<?=$row['id_user']?>">
				<label for="name">Nombre </label><input required type="text" placeholder="Nombre" id="name" name="real_name" value="<?=$row['real_name_user']?>"/>
				<label for="name">User </label><input required type="text" placeholder="Nombre" id="name" name="name" value="<?=$row['name_user']?>"/>
				<label for="password">Contraseña </label><input required type="password" placeholder="Contraseña" id="password" name="password" />
				<label for="facebook">Facebook </label><input required type="text" placeholder="Facebook" id="facebook" name="facebook" value="<?=$row['facebook_user']?>" />
				<label for="twitter">Twitter </label><input required type="text" placeholder="Twitter" id="twitter" name="twitter" value="<?=$row['twitter_user']?>"/>
				<label for="email">e-mail </label><input required type="email" placeholder="email" id="email" name="email" value="<?=$row['email_user']?>"/>
				<select name="type">
  				<option value="admin" selected>Admin</option>
  				<option value="editor">Editor</option>
  				<option value="moderador">Moderador</option>
			</select>
				<input type="hidden" value="<?=$row['name_user']?>" name="actual_name">
				<input type="hidden" value="<?=$row['email_user']?>" name="actual_email">
				<input type="submit" name="add" value="Actualizar">
			<?php
			}
	 		?>
		</form>
	</div>

</section>
