<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/estilospp.css">

</head>
<body>
	<div class="loginbox">
		<h3>REGISTRAR PROVEEDOR</h3>
		<form method="post" action="codigoproveedores.php">
			<input type="text" name="nombre" placeholder="NOMBRE">
			<input type="text" name="telefono1" placeholder="TELEFONO 1">
			<input type="text" name="telefono2" placeholder="TELEFONO 2">
			<input type="text" name="correo" placeholder="CORREO">
			<input type="text" name="comentario" placeholder="COMENTARIO">
			<input type="submit" name="btn" value="GUARDAR">
			<a href="menu_inicio.php?mod=registrarproveedor"><input type="submit" name="btnvolver" value="VOLVER"></a>
		</form>
	</div>
</body>
</html>