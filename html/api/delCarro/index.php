<?php
	$idRemove = $_GET['prod'];
		session_start();
	if($_SESSION['carrito'][$idRemove]){
	
		unset($_SESSION['carrito'][$idRemove]);
		echo json_encode($_SESSION);
		}
	else{
		echo "Objeto no existente";
	}	
  ?>