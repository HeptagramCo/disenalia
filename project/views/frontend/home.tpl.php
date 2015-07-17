<section id="blog-post">
	<?php
	$contador = 0;
	foreach ($values as $row) {
		$contador = $contador + 1;
		if($contador > 1){
		?>
		<a href="/go/?q=<?=$row['id_post']?>" class="src-post">
			<article class="post">
				<div class="top">
					<p class="left"><?=$row['date_post']?></p>
					<p class="right">
						<span class="ion-chatbox"></span>
						<?=NumberComments::getComments($row['id_post'])?>
						<span class="ion-eye"></span>
						<?=$row['views_post']?>
					</p>
				</div>
				<figure>
					<img src="<?=$row['img_post']?>" alt="">
				</figure>
				<div class="content">
					<h1><?=$row['title_post']?></h1>
					<p> <?=$row['prev_post']?></p> 
			</article>
		</a>
	<?php  }} ?>
</section>
