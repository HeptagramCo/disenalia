<section id="go-read">
	<?php foreach ($values as $row) {?>
		<article class="post">
			<figure>
				<div class="date-comts">
					<div class="cont">
						<span class="icon-calendar"></span>
						<p><?=$row['date_post']?></p>
					</div>
					<div class="cont">
						<span class="icon-coments"></span>
						<p><?=NumberComments::getComments($row['id_post'])?></p>
					</div>
				</div>
				<img src="<?=$row['img_post']?>" alt="">
				<div class="share">
					<a class="rds" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://disenalia.mx/home/go/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><span class="icon-facebook"></span></a>
					<a class="rds" target="_blank" href="http://twitter.com/share?text=Diseñalia.mx: %20te%20recomiendo%20leer%20el%20siguiente%20post:&amp;url=http://disenalia.mx/home/go/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><span class="icon-twitter"></span></a>
				</div>
			</figure>
			<div class="content">
				<h1><?=$row['title_post']?></h1>
				<div class="prevpost"><?=$row['prev_post']?></div>
				<div class="postfull"><?=$row['post_post']?></div>
			</div>
		</article>
	<article class="comments">
		<form action="" method="post">
			<input type="text" name="name" placeholder="Nombre">
			<input type="email" name="email" placeholder= "Correo Electronico">
			<textarea name="message" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea>
			<input type="hidden" value="<?=$row['id_post']?>" name="id">
			<input type="submit" name="send">
		</form>
		<div class="comments-show">
			<?php
				if(isset($comments_values)){
				foreach ($comments_values as $row) { ?>
				<div class="">
					<figure><img src="/media/img/user.png" alt="" /></figure>
					<div class="">
						<h1><?=$row['author_comment'] ?></h1>
						<span>Hace <?=Date::getTiempo($row['date_comment'])?></span>
						<p>
							<?=$row['comment']?>
						</p>
					</div>
				</div>
			<?php }
		}else{ ?>
			<h1>Sin comentarios</h1>
		<?php
		}
		?>
		</div>
	</article>
	<?php  } ?>
</section>
