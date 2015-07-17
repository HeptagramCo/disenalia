<section  id="home-admin-content">
	<div class="form-edit-me">
		<form action="create-user" method="post">
			<label for='name'>Nombre </label><input required type='text' placeholder='Nombre' id='name' name='name'/>
    		<label for='user'>Usuario </label><input required type='text' placeholder='Usuario' id='user' name='user'/>
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
			<input type='submit' name='add' value='Crear'>
		</form>
	</div>
</section>
