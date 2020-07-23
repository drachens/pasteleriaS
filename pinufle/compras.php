<?php
	$keyCurrent = $_GET['key'];
	if ($keyCurrent == "pagar") {
		session_start();
		print_r($_SESSION);

	}	
	else{

			session_start();
			//$_SESSION['prod'] = $_POST['prod'];
			//$_SESSION['price'] = $_POST['price'];
			//$_SESSION['cantidad'] = $_POST['cantidad'];

			//print_r($_SESSION);
			//print($_SESSION['price']*$_SESSION['cantidad']*1000);
			if(!isset($_SESSION['carrito'])){	
				$_SESSION['carrito'] = array();
				}
			if(isset($_SESSION['carrito'][$_POST['id']])){

				$_SESSION['carrito'][$_POST['id']] += $_POST['cantidad'];

			}	
			else{
				$_SESSION['carrito'][$_POST['id']]= $_POST['cantidad'];
				//unset($_SESSION['carrito']);
			}	
				header("Location: /carrito.php");
		}			
?>
