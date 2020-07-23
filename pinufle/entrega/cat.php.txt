<?php
	include_once 'header.php'; 
	$key_current = $_GET["keyI"];
	$categoriasS = $client->piñufle->Categorias->findOne(['_id' => new MongoDB\BSON\ObjectID($key_current)]);
	$current_cat = $categoriasS['_id'];
	$nom_cat = $categoriasS['name'];
	if ($current_cat == $key_current ) {		  
?>		
<header>
	<title>Categoria: <?php echo "$nom_cat"; ?> </title>
</header>
	<br>
	<nav class="Categorias">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li><a href="categorias.php">Categorias</a></li>
			<li><a><?php echo "$nom_cat"; ?></a></li>
		</ul>
	</nav>
	<br>
	<br>
	<br>
<?php 
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$Quest = array('id_cat' => "$current_cat");
	$collection_prod = $client->piñufle->Productos->find($Quest);
	foreach ($collection_prod as $entry2) {
	$name = $entry2['name'];
	$precio = $entry2['precio'];
	$imagen = $entry2['imagen'];
	$id_prod = $entry2['_id']->__toString();
?>	
	<div class="contenedor" align="center">
		<img id="Cim" src= "<?php echo "$imagen"; ?>" height="260px" hspace="0px"> 	
		<h3><?php echo "$name"; ?></h3> 
		<p>Precio: $<?php echo "$precio"; ?></p>
		<a href="prods.php?keyP=<?php echo "$id_prod" ?>"><button>Detalles</button></a>	
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
