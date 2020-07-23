<?php
	require '/home/ubuntu/vendor/autoload.php';

	$uri="mongodb://localhost";

	$client= new MongoDB\Client($uri);

	$db_Categorias = $client->piñufle->Categorias->find();
	$categorias = array();
 
	foreach ($db_Categorias as $entry) {
		$categorias[ $entry['_id']->__toString() ] = $entry['name'];
		/*echo $categorias[ $entry['_id']->__toString() ] ;*/
	};

?>



<?php 
	require '/home/ubuntu/vendor/autoload.php';

	$uri="mongodb://localhost";

	$client= new MongoDB\Client($uri);
	$db_Recetas = $client->piñufle->Recetas->find();
	$recetas = array();

	foreach ($db_Recetas as $entry) {
		$recetas[$entry['_id']->__toString()] = $entry['name']; 
	};
?>	












<?php 
//	echo "ola";
	/*$categorias = array("Chocolates","Coctel","Kuchen","Masas y Galletas","Tortas");*/
	//$recetas = array('0' => , "Con Lactosa", '1' => "Sin Lactosa", '2' => "Veganas", "3" => 'Vegetarianas', '4' => 'Sin Gluten' );
/*	echo "hola";
	require 'vendor/autoload.php';

	$uri="mongodb://localhost";

	$client= new MongoDB\Client($uri);

	$collection = $client->piñufle->Categorias;
	$collectcategorias = ($collection->find());

	$categorias = array();

	foreach ($collectcategorias as $entry) {
		print_r($entry['_id]');
	$categorias[ $entry['_id']->__toString() ] = $entry['name'];
	echo $categorias[ $entry['_id']->__toString() ] ;
	


	};

?>
