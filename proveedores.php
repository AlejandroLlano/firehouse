<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/estilospp.css">
	<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>
	<div class="loginboxagregar">
		<form method="post" action="menu_inicio.php?mod=registrarproveedor">
		<input type="submit" name="btn" value="AGREGAR NUEVO">
		</form>
	</div>	
<?php

include 'conexion.php';

	$consulta = mysqli_query($conexion,"SELECT * FROM proveedores");
?>	
	<div class="table-responsive">
	<table class="table table-striped table-dark table-bordered table-hover table-condenced">
		<thead>
		<tr>
			<div class="titulos">
			<th scope="col">ID</th>
			<th scope="col">PROVEEDOR</th>
			<th scope="col">TELEFONO</th>
			<th scope="col">TELEFONO</th>
			<th scope="col">CORREO</th>
			<th scope="col">COMENTARIO</th>
			<th scope="col">E</th>
			<th scope="col">M</th>
			</div>	
		</tr>
		</thead>				
<?php
	while ($resultado = mysqli_fetch_array($consulta)) {
?>		
		<tr>
			<td><?php echo $resultado['idproveedor']; ?></td>
			<th scope="col"><?php echo $resultado['proveedor']; ?></td>
			<td><?php echo $resultado['telefono1']; ?></td>
			<td><?php echo $resultado['telefono2']; ?></td>
			<td><?php echo $resultado['correo']; ?></td>
			<td><?php echo $resultado['comentario']; ?></td>
			<td>	
				<center>
				<form method="post" action="eliminarproveedor.php" >
					<input name="eliminar" value="<?php echo $resultado['idproveedor']; ?>" hidden>
					<input type="submit" name="btneliminar" value="ELIMINAR">
				</form>
				</center>
				<!--	<img src="style/eliminar1.png" width="20" >	-->
			</td>
			<td>
				<center>
				<form method="post" action="menu_inicio.php?mod=modificarproveedor">
					<input type="text" name="modificar" value="<?php echo $resultado['idproveedor']; ?>" hidden>
					<input type="submit" name="btnmodificar" value="MODIFICAR">
				</form>
				</center>
					<!-- <img src="style/lapiz.png" width="15" >	-->
			</td>	
		</tr>
<?php
			}		
?>
	</table>
	</div>
</body>
</html>
<!-- -->