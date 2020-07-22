	<?php 
		include_once("header.php"); 
		$key_current = $_GET["sol"];
		$key_current2 = $_GET['status'];

	?>
	<br>
	<h1 class="adv" style="color:#c00505">Quedate en casa, cuidate y cuida a los demás.</h1>	
	<?php 
		if ($key_current == "ingreso") {
		
		
	 ?>
	 		<h1>Ingresar</h1>
	 		<form class="login" action="redLogin.php" method="POST">
	 			<label for="userL">Usuario:</label><br>
	 			<input type="text" name="userL"><br>
	 			<label for="passL">Contraseña:</label><br>
	 			<input type="password" name="passL"><br><br>
	 			<input style="color: black" type="submit" name="access" value="ingresar">
	 		</form>
	 <?php
	 	};
	 ?>
	 <?php
	 		if ($key_current2 == "error") {
		
		
	 ?>
	 		<h1 id="ingreso">Ingresar</h1>
	 		<form class="login" action="redLogin.php" method="POST">
	 			<label for="userL">Usuario:</label><br>
	 			<input type="text" name="userL"><br>
	 			<label for="passL">Contraseña:</label><br>
	 			<input type="password" name="passL"><br><br>
	 			<input style="color: black" type="submit" name="access" value="ingresar">
	 		</form>
			<div class="LoginError-ext">
				<div style="padding: 2px">
					<p>Usuario o Contraseña incorrectos.</p>
				</div>
			</div>
	 <?php
	 	};
	 ?>
	 <?php
	 	if ($key_current == "registro") {
	 ?>
	 		 <form class="default" action="redRegister.php" method="POST">
			  <label for="user">Usuario:</label><br>
			  <input type="text" id="user" name="user" ><br>
			  <label for="email">Correo:</label><br>
			  <input type="email" id="email" name="email"><br>
			  <label for="pass">Contraseña:</label><br>
			  <input type="password" id="pass" name="pass"><br>
			  <center><input style="color: black" type="submit" name="confirm" value="confirmar" id="button"></center>
			</form>
	 <?php
	 	};
	 ?>
	<?php 
		include_once("footer.php");

		
?>	
