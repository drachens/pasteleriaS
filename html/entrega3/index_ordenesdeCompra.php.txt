<?php
	
	require '/var/www/html/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_ordenes = $client->piñufle->Ordenes;
	$ordenes = $db_ordenes->find();
	$contador = 1;
	foreach ($ordenes as $value) {
		$OrdenesDetalle['ordenNumero'.$contador] = $value['_id']->__toString();
		++$contador;
	}
	echo json_encode($OrdenesDetalle);
?>