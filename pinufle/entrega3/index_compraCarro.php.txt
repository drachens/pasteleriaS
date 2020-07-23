<?php
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_ventas = $client->piñufle->Ordenes;
	session_start();
	require '/var/www/html/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$total = 0;
	foreach ($_SESSION['carrito'] as $id => $cantidad) {
					
		 	$Quest = array('_id' => new MongoDB\BSON\ObjectID($id));
		 	$product = $client->piñufle->Productos->findOne($Quest);
		 	$total += $product['precio']*$cantidad*1000;
	}
	
	$db_ventas->insertOne(array('monto' => $total,'productos' => $_SESSION['carrito']));
	unset($_SESSION['carrito']);
	echo "<h1>Compra realizada</h1>";
?>
