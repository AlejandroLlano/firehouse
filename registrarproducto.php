<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/estilospp.css">

</head>
<body>
<div class="loginboxproducto">
<h3>REGISTRAR PRODUCTO</h3>
<form method="post" action="codigoproductos.php">
	<input type="text" name="nombre" placeholder="NOMBRE">
		<label>
			<select name="idproveedor">
				<option>Proveedor</option>	
				<?php
					include 'conexion.php';

					$consulta = "SELECT * FROM proveedores";
					$ejecutar = mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

				?>
				<?php foreach ($ejecutar as $opciones): ?>
					
					<option value="<?php echo $opciones['idproveedor'] ?>"> <?php echo $opciones['idproveedor'],$opciones['proveedor'] ?></option>

				<?php  endforeach  ?>
			</select>
		</label>
	<input type="int" name="stock" placeholder="STOCK">
	<input type="submit" name="btn" value="GUARDAR">
	<a href="menu_inicio.php?mod=registrarproducto"><input type="submit" name="btnvolver" value="VOLVER"></a>
</form>
</div>
</body>
</html>