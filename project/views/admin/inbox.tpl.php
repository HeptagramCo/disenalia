<section id="container-data-post">
	<h1>Administra los comentarios</h1>
	<table class="table-content-post">
		<tr class="reference-table">
			<td colspan="4">Comentarios</td>
		</tr>
		<tr class="titles-content">
			<th>Autor Comentario</th>
			<th>email</th>
			<th>Comentario</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($values as $row) {
			?>
			<tr class="data-content">
				<td><?=$row["author_comment"]; ?></td>
				<td><?=$row["email_comment"]; ?></td>
				<td><?=$row["comment"]; ?></td>
				<td class="actions-content">
					<a href="/go/?q=<?=$row['id_post'] ?>">ver</a>
					<a href="/inbox/delete/?d=<?=$row['id_comment']?>" title="Eliminar"><span class="icon-delete"></span></a>
				</td>
			</tr>
			<?php
		} ?>
	</table>
</section>