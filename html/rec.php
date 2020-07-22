<?php
	include_once("header.php");
	$key_current2 = $_GET["KeyR"];
	$RecetaS = $client->piñufle->Recetas->findOne(['_id' => new MongoDB\BSON\ObjectID($key_current2)]);
	$current_rec = $RecetaS['_id'];
	$name_rec = $RecetaS['name'];
	if ($current_rec == $key_current2 ) {		  
?>		
<header>
	<title>Recetas: <?php echo "$name_rec" ?> </title>
</header>
	<nav class="Categorias">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li><a href="menu_recetas.php">Recetas</a></li>
			<li><a><?php echo "$name_rec"; ?></a></li>
		</ul>
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>		
	</nav>
	<?php 
	require '/home/ubuntu/vendor/autoload.php';

	$uri="mongodb://localhost";

	$client= new MongoDB\Client($uri);
	$Quest2 = array('id_rec' => "$current_rec");
	$collection_rec = $client->piñufle->InfoRecetas->find($Quest2);
	foreach ($collection_rec as $entry3) {
	$DIR = $entry3['_id'];
	$name = $entry3['name'];
	$imagen = $entry3['imagen'];
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$dir_receta = $client->piñufle->InfoRecetas->findOne(['_id' => new MongoDB\BSON\ObjectID($DIR)]);
	$url_receta = $dir_receta['_id'];
?>	
	<div class="box-out">
		<div class="box-in">
			<div class ="contenT">
				<div class="imagen-receta">
					<img src="<?php echo "$imagen"; ?>" >
				</div>
				<p><a href="recetas.php?Receta_s=<?php echo "$url_receta" ?>"><?php echo "$name";  ?></a></p>
			</div>
		</div>
	</div>
		<br>
		<br>
		<br>
	<?php
		};	
	?>		
		<?php
			include_once("footer.php");
		?>
<?php
	};
?>
