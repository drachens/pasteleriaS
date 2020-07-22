<?php 
	$shutdownKey = $_GET["keY"];
	
	if ($shutdownKey == 'shutdown') {

		$idSession = session_id();
		echo "$idSession";
		setcookie(session_name(),'',0,'/');
		header("Location: /");

	}
	else{
	$user = $_POST['userL'];
	$pass = $_POST['passL'];
	require '/home/ubuntu/vendor/autoload.php';

	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$db_Registros = $client->piñufle->Usuarios;
	$Quest = array('user' => $user,'pass' => $pass);
	$db_peticion = $db_Registros->findOne($Quest);

	if(isset($db_peticion)){
		session_id($_POST['userL']);
		session_start();
		header("Location: /");
	}
	else{

		$GLOBALS['error'] = "error";
		header("Location:  /registro.php?status=error");
	}

	}
 ?>
