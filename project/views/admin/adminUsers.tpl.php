<script type="text/javascript" src="media/js/jquery.js"></script>
<script src="media/js/edit-form.js"></script>

<section  id="home-admin-content">
	<h1>Usuarios</h1>
		<table border='1'>
		<tr><th>Nombre de Usuario</th><th>Tipo de usuario</th><th>Twitter</th><th>Facebook</th><th>e-mail</th><th>Editar/Eliminar</th></tr>
		<?php
			foreach ($rows as $row) {
		?>
				<tr id="<?=$row['name_user']?>">
					<td><?=$row['name_user']?></td><td><?=$row['type_user']?></td><td><?=$row['twitter_user']?></td><td><?=$row['facebook_user']?></td><td><?=$row['email_user']?></td><td><a href="#" class="edit"><img src="editar.png"/></a><a href="user/delete?id=<?=$row['id_user']?>" class="delete"><img src="eliminar.png"/></a></td>
				</tr>

		<?php
			}			
		?>		
		</table>		
		
 	
	<div class="dialog" id="form-edit">
    	<form action="user/update-user" method="post">
    		<input name="id" type="hidden" id="id" value="">
    		<label for='name'>Nombre </label><input type='text' placeholder='Nombre' id='name' name='name'/>
			<label for='password'>Contraseña </label><input type='password' placeholder='Contraseña' id='password' name='password'/>
			<label for='facebook'>Facebook </label><input type='text' placeholder='Facebook' id='facebook' name='facebook' />
			<label for='twitter'>Twitter </label><input type='text' placeholder='Twitter' id='twitter' name='twitter'/>
			<label for='email'>email </label><input type='text' placeholder='email' id='email' name='email' />
			<input type='submit' name='add' value='Actualizar'><input type="button" name="cancelar" value="Cancelar" id="cancelar">
		</form>
	</div>
	
</section>
