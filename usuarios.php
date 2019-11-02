<html>
<head>
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="style/estilosregistrar.css">
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
	<div class="registrarbox">
		<h2>REGISTRAR</h2>
		<form action="codigoregistrar.php" method="post">
			<input type="number" name="doc" placeholder="DOCUMENTO" required>
			<input type="text" name="nom" placeholder="NOMBRES" required>
			<input type="text" name="ape"  placeholder="APELLIDOS" required>
			<input type="email" name="email" placeholder="CORREO" required>
			<input type="text" name="usu" placeholder="USUARIO (Máximo 10 caracteres)" maxlength="10" required>
			<input type="password" name="pass1" placeholder="CLAVE" required>
			<input type="password" name="pass2" placeholder="CONFIRMAR CLAVE" required>
			<input type="submit" name="bttn" value="REGISTRAR" required class="boton">
		</form>
	</div>
</body>
</html>