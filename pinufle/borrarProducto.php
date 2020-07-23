<?php
	$idRemove = $_GET['id'];
	session_start();
	unset($_SESSION['carrito'][$idRemove]);
	print_r($_SESSION['carrito']);
	header("Location: /carrito.php");
  ?>
