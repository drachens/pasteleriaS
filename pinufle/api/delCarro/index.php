<?php
	$idRemove = $_GET['prod'];
		session_start();
	
	
		unset($_SESSION['carrito'][$idRemove]);
		echo json_encode($_SESSION);
		
	
  ?>
