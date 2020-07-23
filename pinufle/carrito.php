<?php
	include_once ("header.php");
	require '/home/ubuntu/vendor/autoload.php' ;
	$uri="mongodb://localhost";
	$client= new MongoDB\Client($uri);
	$total = 0;
?>	
	<div class="encabezado">
		<h1>Carrito de compras</h1>
	</div>
	<div class="div-table">
		<table class="table">
			<tr>
				<th>Producto</th>
				<th>Precio Unidad</th>
				<th>Cantidad</th>
				<th>Precio Lote</th>
				<th>Remover</th>
			</tr>
			
				<?php

					foreach ($_SESSION['carrito'] as $id => $cantidad) {
					
				 	$Quest = array('_id' => new MongoDB\BSON\ObjectID($id));
				 	$product = $client->piñufle->Productos->findOne($Quest);
				?>
				<tr>
				<td><?php echo $product['name']; ?></td>
				<td>$<?php echo $product['precio']*1000; ?></td>
				<td><?php echo "$cantidad"; ?></td>
				<td>$<?php echo $cantidad*$product['precio']*1000; ?></td>
				<td height="4px" width="4px"><a href="borrarProducto.php?id=<?php echo $id; ?>" style="position: relative;display: table;" ><svg  focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="position: relative;float: left;"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></a></td>
				</tr>
				<?php
					$total += $cantidad*$product['precio']*1000;}; 
				?>
				
		</table>

			<div id="one">
				<div>	
					<form method="POST" action="pagar.php">
						<input style="color: black" type="submit" name="pagar" value="pagar">
						<input type="hidden" name="monto" value="<?php echo "$total"; ?>">
					</form>
					<button style="padding: 0px;"><a href="categorias.php">Seguir comprando</a></button>
				</div>
				<h3>Total: <?php echo "$"."$total"; ?></h3>
			</div>

	</div>

<?php
	include_once("footer.php");
?>
