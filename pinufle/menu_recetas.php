	<?php 
		include_once("header.php"); 
	?>
		<header>
			<title> Recetas</title>
		</header>
		<nav class="Categorias">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li><a href="menu_recetas.php">Recetas</a></li>
		</ul>
		</nav>	
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>
	<?php
		require '/home/ubuntu/vendor/autoload.php';
		$uri="mongodb://localhost";
		$client= new MongoDB\Client($uri);
		$db_Recetas = $client->piñufle->Recetas->find();
		foreach ($db_Recetas as $key) {
			$id_rec = $key['_id']->__toString();
			$name_rec = $key['name'];
			$img_rec = $key['img'];

	?>
			<div class="box-out" id="out-cat">
				<div class="box-in" id="in-cat">
					<div class ="contenT" id="content-cat">
						<img src="<?php echo "$img_rec"  ?>" class="imagen-receta" id="img-cat">
						<p><a href="rec.php?KeyR=<?php echo "$id_rec" ?>"><?php echo "$name_rec"; ?></a></p>
					</div>
				</div>
			</div>
	<?php
		}
	?>	
	<?php 
		include_once("footer.php");
	?>
