<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Raleway:ital,wght@1,300&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>  
<body>
<div>
<div class="Blogo">
		<a href="index.php"><img class="logo" src="logo.png" height="60px"></a>
		<h1 id="title">Pasteleria Piñufle</h1>
		<?php
			session_start();
			$idSession = session_id();
			require '/home/ubuntu/vendor/autoload.php';
			$uri="mongodb://localhost";
			$client= new MongoDB\Client($uri);
			$db_Registros = $client->piñufle->Usuarios;
			$Quest = array('user' => $idSession);
			$db_status = $db_Registros->findOne($Quest);
		//	print_r($db_status);
			if(isset($db_status)){
		?>
				<ul id="registro-n">
					<li>Hola <?php echo"$idSession" ?> </li> |
					<li><a href="redLogin.php?keY=shutdown">Cerrar sesión</a></li>
				</ul>
		<?php
			};
		?>
		<?php 
			if(!isset($db_status)){
		?>		
				<ul id="registro-n">
					<li><a href="registro.php?sol=ingreso">Ingeresar</a></li> |
					<li><a href="registro.php?sol=registro">Registrarse</a></li>
				</ul>
		<?php
			};	
		?>	
</div>

<nav id="menu" class="conteiner">
		<ul>
			<li><a href="categorias.php">Categorias</a>
			<ul>
				<?php
					require '/home/ubuntu/vendor/autoload.php';
					$uri="mongodb://localhost";
					$client= new MongoDB\Client($uri);
					$dbCategoriasHeader = $client->piñufle->Categorias->find();
					$categorias = array(); 
					foreach ($dbCategoriasHeader as $entryHeader) {
						$catHeader[ $entryHeader['_id']->__toString() ] = $entryHeader['name'];
					};
					foreach ($catHeader as $keyHeader => $valueHeader) 
						{			
				?>
						<li><a href="cat.php?keyI=<?php echo "$keyHeader" ?>"> <?php echo "$valueHeader"; ?> </a></li>
				<?php
						};
				?>
			</ul>
			</li>	
			<li><a href="menu_recetas.php">Recetas</a>
			<ul>
				<?php
					require '/home/ubuntu/vendor/autoload.php' ;
					$uri="mongodb://localhost";
					$client= new MongoDB\Client($uri);
					$dbRecetasHeader = $client->piñufle->Recetas->find();
					$recetas = array();
					foreach ($dbRecetasHeader as $entryRecetasHeader) {
						$recetasHeader[$entryRecetasHeader['_id']->__toString()] = $entryRecetasHeader['name']; 
					};
					foreach ($recetasHeader as $key2Header => $value2Header) {
				?>
				<li><a href="rec.php?KeyR=<?php echo "$key2Header" ?> "><?php echo "$value2Header"; ?></a></li>
				<?php
					};
				?>	
			</ul>
			</li>
			<li><a href="promo.php">Promociones</a></li>
			<li class="who"><a href="informacion.php">¿Quienes somos?</a></li>
			<li><a>Contactanos</a></li>
			<?php
				require '/home/ubuntu/vendor/autoload.php';
				$uri="mongodb://localhost";
				$client= new MongoDB\Client($uri);
				$db_vendedor = $client->piñufle->Usuarios;
				session_start();
				$vendedor = session_id();
				$Quest = array('user' => $vendedor);
				$Request = $db_vendedor->findOne($Quest);
				if (isset($Request)) {
					echo "<li><a href='ordenes.php'>Ventas</a></li>";
				}
			?>
			
		</ul>
		<ul class="ul-2">
			<li><a href="carrito.php">carrito</a></li>
		</ul>	
</nav>

</div>
