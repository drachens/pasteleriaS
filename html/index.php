	<?php 
		include_once("header.php"); 

	?>
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>
	<div id="intro">
		<p>
			Bienvenido/a a la nueva plataforma online de Pasteleria Piñufle.
			<br>
			Acá podrás comprar todos los productos que sueles ver en nuestra tienda física, pero sin tener que moverte de tu casa.
		</p>	
	</div>
		<div class="ingredientes" id="index">
			<p id="title">categorias</p>
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
					<div class="box-out" id="index-out">
						<div class="box-in" id="index-in">
							<div class ="content" id="content-cat">
								<img src="<?php echo "$img_cat"  ?>" id="imagen-cat">
								<p id="ip1"><a href="cat.php?keyI=<?php echo "$id_cat" ?>"><?php echo "$name_cat"; ?></a></p>
							</div>
						</div>
					</div>
			<?php
				}
			?>	
		</div>
		<div class="preparacion" id="index">
			<p>Recetas</p>
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
						<p id="ip2"><a href="rec.php?KeyR=<?php echo "$id_rec" ?>"><?php echo "$name_rec"; ?></a></p>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>

	<?php 
		include_once("footer.php");
	?>
