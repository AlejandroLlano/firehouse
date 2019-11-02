<?php
include "conexion.php";
session_start();

if (isset($_SESSION['user'])) {
echo "<script>window.location='menu_inicio.php';</script>";
}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/estiloslogin.css">
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
	<div class="loginbox">
		<h2>LOGIN</h2>
		<form method="post" action="codigologin.php">
			<input type="text" name="usu" placeholder="USUARIO" required>
			<input type="password" name="pass" placeholder="CLAVE" required>
			<input type="submit" name="btn" value="INGRESAR">
		</form>
	</div>
</body>
</html>
