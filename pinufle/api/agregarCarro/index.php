<?php
	$producto = $_GET['prod'];
	$cantidad = $_GET['cant'];

	session_start();

	if(!isset($_SESSION['carrito'])){	
		$_SESSION['carrito'] = array();
		}
	if(isset($_SESSION['carrito'][$producto])){

		$_SESSION['carrito'][$producto] += $cantidad;
		echo json_encode($_SESSION);
		}	
	else{
		$_SESSION['carrito'][$producto]= $cantidad;
		echo json_encode($_SESSION);
		}	
			
?>
