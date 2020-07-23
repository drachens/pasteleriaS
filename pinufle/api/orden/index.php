<?php
	$num_orden = $_GET['id'];
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_ordenes = $client->piñufle->Ordenes;
	$Quest = array('_id' => new MongoDB\BSON\ObjectId($num_orden));
	$ordenes = $db_ordenes->find($Quest);
	foreach ($ordenes as $entry) {
		$contador = 1;
		$monto = $entry['monto'];
		$array = $entry['productos'];
		foreach ($array as $id_producto => $cantidad) {
			$productos = $client->piñufle->Productos->findOne(array('_id' => new MongoDB\BSON\ObjectID($id_producto)));
			$ProductosDetalle['Producto'.$contador] = array('id_producto'=>$id_producto,'nombre'=>$productos['name'],'precio_prod'=>$productos['precio']*1000,'cantidad'=>$cantidad,'precioLote'=>$productos['precio']*1000*$cantidad);
		++$contador;			
		}
		$DetalleOrdenes[$entry['_id']->__toString()] = array('PRODUCTOS'=>$ProductosDetalle,'MONTO_TOTAL'=>$monto);
	}
		echo json_encode($DetalleOrdenes);
?>
