 <!-- -->
<?php
include "conexion.php";
session_start();

if (isset($_SESSION['user'])) {
?>
<html>
<head>
	<title>MENU INICIO</title>
	<link rel="stylesheet" type="text/css" href="style/estilos.css">

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css-->
<link rel="stylesheet" type="text/css" href="style/estilos.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<a class="navbar-brand" href="index.php">
  		<img src="style/fh/logofh.png" width="120" height="40">
  	</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
    <div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="menu_inicio.php?mod=inventario">INVENTARIO</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="menu_inicio.php?mod=historico">HISTORICO</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="menu_inicio.php?mod=proveedores">PROVEEDORES</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="menu_inicio.php?mod=productos">PRODUCTOS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="menu_inicio.php?mod=usuarios">USUARIOS</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="salir.php" class="cerrar">CERRAR SESSION</a>
      		</li>
    	</ul>
  	</div>
</nav>
<!-- 
<div class="menu">
	<ul class="boton">
		<li><a href="menu_inicio.php?mod=inicio">INICIO</a></li>
		<li><a href="menu_inicio.php?mod=inventario">INVENTARIO</a></li>
		<li><a href="menu_inicio.php?mod=proveedores">PROVEEDORES</a></li>
		<li><a href="menu_inicio.php?mod=historial">HISTORIAL</a></li>
		<li><a href="menu_inicio.php?mod=productos">PRODUCTOS</a></li>
		<li><a href="menu_inicio.php?mod=registrar">REGISTRAR</a></li>
		<li><a href="salir.php" class="cerrar">CERRAR SESIÓN</a></li>
	</ul>
</div>
-->
<!-- fin menu -->
<!--
<center>
	<h1>BIENVENIDO <?php echo $_SESSION['user']; ?></h1>
</center>
-->

<!-- contenedor -->
<div class="contenedor">

	<!-- modulacion -->
	<div class="modulacion">
		<?php
		if (@ $_GET['mod']=="") 
		{
		require_once("inicio.php");
		}  
		else
		if (@ $_GET['mod']=="inicio") 
		{
		require_once("inicio.php");
		}  
		else
		if (@ $_GET['mod']=="inventario") 
		{
		require_once("inventario.php");
		}
		else
		if (@ $_GET['mod']=="proveedores") 
		{
		require_once("proveedores.php");
		} 
		else
		if (@ $_GET['mod']=="historico") 
		{
		require_once("historico.php");
		}  
		else
		if (@ $_GET['mod']=="productos") 
		{
		require_once("productos.php");
		}  
		else
		if (@ $_GET['mod']=="usuarios") 
		{
		require_once("usuarios.php");
		}  
		else
		if (@ $_GET['mod']=="registrarproveedor") 
		{
		require_once("registrarproveedor.php");
		}
		else
		if (@ $_GET['mod']=="registrarproducto") 
		{
		require_once("registrarproducto.php");
		}
		else
		if (@ $_GET['mod']=="modificarproducto") 
		{
		require_once("modificarproducto.php");
		}
		else
		if (@ $_GET['mod']=="modificarproveedor") 
		{
		require_once("modificarproveedor.php");
		}
		?>
	</div>
	<!-- vertical 
	<div class="vertical">
		
	</div>
	-->
</div>
<!-- fin contenedor -->
</body>
</html>
<?php 
} else {
	echo "<script>window.location='index.php';</script>";
}
?>