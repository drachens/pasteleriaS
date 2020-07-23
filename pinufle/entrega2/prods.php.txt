<?php
	include_once ('header.php');
	$keyCurrent = $_GET["keyP"];
	require '/home/ubuntu/vendor/autoload.php';
	$uri ="mongodb://localhost";
	$client = new MongoDB\Client($uri);
	$questProd = array('_id' => new MongoDB\BSON\ObjectId($keyCurrent));
	$db_Productos = $client->piñufle->Productos->find($questProd);
	foreach ($db_Productos as $key) {
		$nameProd = $key['name'];
		$priceProd = $key['precio'];
		$imgProd = $key['imagen'];
		$descProd = $key['desc'];
		$currentCat = $key['id_cat'];
		$idProduct =$key['_id']->__toString();
	}
	$questCat = array('_id' => new MongoDB\BSON\ObjectId($currentCat));
	$db_Categorias = $client->piñufle->Categorias->find($questCat);
	foreach ($db_Categorias as $key) {
		$cat = $key['name'];
		$idCat = $key['_id']->__toString();
	}
?>
<header>
	<title><?php echo "$nameProd"; ?></title>
</header>
<div class="conteiner" id="box_prod">
		<nav class="Categorias" id="nav_prods">
		<ul>
			<li class="ref"><a class="ref1" href="index.php">Inicio</a></li>
			<li ><a href="categorias.php">Productos</a></li>
		</ul>
	</nav>
	<div class="conteiner" id="title_prod">
		<p id="title_prod"><a href="cat.php?keyI=<?php echo "$idCat" ?>"><?php echo "$cat"; ?></a></p>
	</div>
	<div class="conteiner" id ="img_prod">
		<div class="conteiner" id="img_prod2">
			<img src="<?php echo "$imgProd" ?>">
		</div>
		
	</div>
	<div class="conteiner" id ="detalles_prod">
		<h1 id="title_prod"><?php echo "$nameProd"; ?></h1>
		<br>
		<h2 id="price_prod">$<?php echo "$priceProd"; ?></h2>
		<br>
		<p id="desc_prod"><?php echo "$descProd"; ?>.</p>
		<br>
		<form class="cantidad" method="POST" action="compras.php">
			<input type="hidden" name="prod" value="<?php echo"$nameProd"; ?>">
			<input type="hidden" name="price" value="<?php echo"$priceProd"; ?>">
			<input type="hidden" name="id" value="<?php echo "$idProduct" ?>">
			<input type="number" name="cantidad" min="1" max="100" step="1" value="1" id="cantidad">
			<input type="submit" name="button" value="Agregar" id="buy">
		</form>
	</div>
</div>

<?php
	include_once("footer.php");
?>
