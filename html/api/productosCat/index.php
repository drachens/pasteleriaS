<?php
	$current_cat = $_GET['cat'];
	require '/var/www/html/vendor/autoload.php';
        $uri="mongodb://localhost";
        $client= new MongoDB\Client($uri);
        $Quest = array('id_cat' => $current_cat);
        $collection_prod = $client->piñufle->Productos->find($Quest);
        foreach ($collection_prod as $entry2) {
        	$Productos[$entry2['_id']->__toString()] = $entry2['name'];
		
	}
	echo json_encode($Productos);
	

?>
