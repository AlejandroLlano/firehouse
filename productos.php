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
		<form method="post" action="menu_inicio.php?mod=registrarproducto">
		<input type="submit" name="btn" value="AGREGAR NUEVO">
		</form>	
	</div>

<?php

include 'conexion.php';

	$consulta = mysqli_query($conexion,"SELECT * FROM producto");
?>	
	<div class="table-responsive">
	<table class="table table-striped table-dark table-bordered table-hover table-condenced">
		<thead>
		<tr>
			<div class="titulos">
			<th scope="col">IDPRODUCTO</th>
			<th scope="col">PRODUCTO</th>
			<th scope="col">IDPROVEEDOR</th>
			<th scope="col">STOCK</th>
			<th scope="col">ELIMINAR</th>
			<th scope="col">MODIFICAR</th>
			</div>	
		</tr>
		</thead>				
<?php
	while ($resultado = mysqli_fetch_array($consulta)) {
?>		
		<tr>
			<td><?php echo $resultado['idproducto']; ?></td>
			<th scope="col"><?php echo $resultado['producto']; ?></td>
			<td><?php echo $resultado['idproveedor']; ?></td>
			<td><?php echo $resultado['stock']; ?></td>
			<td>		
				<form method="post" action="eliminarproducto.php" >
				<center>
					<input name="eliminar" value="<?php echo $resultado['idproducto']; ?>" hidden>
					<input type="submit" name="btneliminar" value="ELIMINAR">
				</center>
				</form>
			</td>
			<td>
				<form method="post" action="menu_inicio.php?mod=modificarproducto">
				<center>
					<input type="text" name="modificar" value="<?php echo $resultado['idproducto']; ?>" hidden>
					<input type="submit" name="btnmodificar" value="MODIFICAR">
				</center>
				</form>
			</td>	
		</tr>
<?php
			}
		
?>
	</table>
	</div>

</body>
</html>