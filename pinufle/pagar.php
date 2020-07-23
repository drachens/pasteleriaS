<?php
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_ventas = $client->piñufle->Ordenes;
	session_start();
	$total = $_POST['monto'];
	$db_ventas->insertOne(array('monto' => $total,'productos' => $_SESSION['carrito']));
	unset($_SESSION['carrito']);
	echo "<h1>Compra realizada</h1>";
?>
	<button><a href="/">Volver</a></button>
