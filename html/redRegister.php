<?php
	require '/home/ubuntu/vendor/autoload.php';
	
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_Registros = $client->piñufle->Usuarios;
	$Quest = array('user' => $_POST['user']);
	$Quest2 = array('email' => $_POST['email']);
	$db_peticion2 = $db_Registros->findOne($Quest2);
	$db_peticion = $db_Registros->findOne($Quest);
	if(!isset($db_peticion) and !isset($db_peticion2)){
		session_id($_POST['user']);
		session_start();
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['pass'] = $_POST['pass'];
		$data = array('user' => $_SESSION['user'],'email' => $_SESSION['email'],'pass' => $_SESSION['pass']);
		$client->piñufle->Usuarios->insertOne($data);
		header("Location: /");
		}

	else{
		header("Location: /registro.php?sol=registro");	
		
	}	
	

?>
