<?php
	$keyCurrent = $_GET["prod"];
	require '/var/www/html/vendor/autoload.php';
	$uri ="mongodb://localhost";
	$client = new MongoDB\Client($uri);
	$questProd = array('_id' => new MongoDB\BSON\ObjectId($keyCurrent));
	$db_Productos = $client->piñufle->Productos->find($questProd);
	foreach ($db_Productos as $key) {
		$detalleProd[$key['_id']->__toString()] = $key['desc'];
	}
	echo json_encode($detalleProd);

?>
