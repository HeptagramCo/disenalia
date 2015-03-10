<section id="blog-post">
	<?php
	$contador = 0;
	foreach ($values as $row) {
		$contador = $contador + 1;
		if($contador > 5){
		?>
		<a href="/go/?q=<?=$row['id_post']?>" class="src-post">
			<article class="post">
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
				<figure>
					<img src="<?=$row['img_post']?>" alt="">
					<figcaption class="share">
						<a class="rds" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://disenalia.mx/home/go/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><span class="icon-facebook"></span></a>
						<a class="rds" target="_blank" href="http://twitter.com/share?text=Diseñalia.mx: %20te%20recomiendo%20leer%20el%20siguiente%20post:&amp;url=http://disenalia.mx/home/go/?q=<?=$row['id_post']?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><span class="icon-twitter"></span></a>
						<div class="like-views">
							<!-- <a href="<?=$row['id_post']?>" class="icns like_post" ><span class="icon-heart"></span><p><?=$row['likes_post']?></p></a> -->
							<a href="#" class="icns"><span class="icon-eye"></span><p><?=$row['views_post']?></p></a>
						</div>
					</figcaption>
				</figure>
				<div class="content">
					<h1><?=$row['title_post']?></h1>
					<?=$row['prev_post']?>
			</article>
		</a>
	<?php  }} ?>
</section>
