<section id="home-admin-content">
    <h1 class="title-section">
        Home
    </h1>
   <table class="content-estatics-one">
        	<tr class="title-cabeza">
        		<td colspan="3">
        			Post mas visitados
        		</td>
        	</tr>
           <tr class="titles-estatics-one">
           		<th>Titulo Post</th>
           		<th>Fecha</th>
           		<th>Visitas</th>
              <th>Acciones</th>
           </tr>

          <?php foreach ($values as $row) { ?>
            <tr class="colum-content-statics">
              <td><?=$row["title_post"]; ?></td>
              <td><?=$row["date_post"]; ?></td>
              <td><?=$row["views_post"]; ?></td>
              <td class="actions-content">
                <a href="/go/?q=<?=$row['id_post'] ?>">ver</a>
                <a href="/post/edit/?e=<?=$row['id_post']?>" title="Editar"><span class="icon-pencil"></span></a>
                <a href="/post/delete/?d=<?=$row['id_post']?>" title="Eliminar"><span class="icon-delete"></span></a>
              </td>
            </tr>
          <?php } ?>
           
           <tr class="paginator-statics">
           		
           </tr>
           
           
            
   </table>
   
</section>