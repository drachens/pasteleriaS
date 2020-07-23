<?php
	$keyCurrent = $_GET["prod"];
	require '/home/ubuntu/vendor/autoload.php';
	$uri ="mongodb://localhost";
	$client = new MongoDB\Client($uri);
	$questProd = array('_id' => new MongoDB\BSON\ObjectId($keyCurrent));
	$db_Productos = $client->piñufle->Productos->find($questProd);
	foreach ($db_Productos as $key) {
		$detalleProd[$key['_id']->__toString()] = array('nombre'=>$key['name'],'precio'=>$key['precio']*1000,'id_categoria'=>$key['id_cat'],'imagen'=>$key['imagen']);
	}
	echo json_encode($detalleProd);

?>
