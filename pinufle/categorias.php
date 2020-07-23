	<?php 
		include_once("header.php"); 
	?>
		<nav class="Categorias">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li><a href="categorias.php">Categorias</a></li>
		</ul>
		</nav>	
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>
	<?php
		require '/home/ubuntu/vendor/autoload.php';
		$uri="mongodb://localhost";
		$client= new MongoDB\Client($uri);
		$db_Categorias = $client->piñufle->Categorias->find();
		foreach ($db_Categorias as $key) {
			$id_cat = $key['_id']->__toString();
			$name_cat = $key['name'];
			$img_cat = $key['img'];
	?>
	<header>
		<title> Categorias </title>
	</header>
			<div class="box-out" id="out-cat">
				<div class="box-in" id="in-cat">
					<div class ="contenT" id="content-cat">
						<img src="<?php echo "$img_cat" ?>" class="imagen-receta" id="img-cat">
						<p><a href="cat.php?keyI=<?php echo "$id_cat" ?>"><?php echo "$name_cat"; ?></a></p>
					</div>
				</div>
			</div>
	<?php
		};
	?>	
	<?php 
		include_once("footer.php");
	?>
