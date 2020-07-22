<?php
	include_once('header.php');
	require '/home/ubuntu/vendor/autoload.php';
	$uri="mongodb://localhost";
	$db_vendedor = $client->piñufle->Usuarios;
	session_start();
	$vendedor = session_id();
	$Quest = array('user' => $vendedor);
	$Request = $db_vendedor->findOne($Quest);
	if (isset($Request)) {
			$db_ordenes = $client->piñufle->Ordenes;
			$ordenes = $db_ordenes->find();
			echo "<div class='ord-compras'><h1>Ordenes de Compra</h1></div>";
			echo "<div class='ordenes'>";
			foreach ($ordenes as $value) {
					$monto = $value['monto'];
					$array = $value['productos'];
					echo "	
						<div class='bloqueOrdenes'>
							<table class='ordenes'>
								<tr>
									<th>Producto</th>
									<th>Cantidad</th>
								</tr>";
					foreach ($array as $id_producto => $cantidad) {
						$productos = $client->piñufle->Productos->findOne(array('_id' => new MongoDB\BSON\ObjectID($id_producto)));
						$nombreProducto = $productos['name'];
						
			?>

				<tr>
					<td><?php echo $nombreProducto; ?></td>
					<td><?php echo $cantidad; ?></td>
				</tr>
						
			<?php				
					}
					echo "</table>";
					echo "<div class='monto'>
								<p>Monto: $$monto</p>
							</div>";
					echo "</div>";
				}
			echo "</div>";
			
			}
	else{
			echo "<br><br><br><center><h1>NO TIENES PERMISOS NECESARIOS.</h1></center>";
		}		
			?>
<?php
	include_once('footer.php');
?>
<center></center>
