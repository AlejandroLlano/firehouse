<?php
include "conexion.php";
session_start();

if (isset($_POST['btn'])) {
	
	$usu = $_POST['usu'];
	$pass = $_POST['pass'];

	$clave = md5(sha1($pass));

	$consulta = mysqli_query($conexion,
		"SELECT * FROM usuario WHERE usuario='$usu' AND pass='$clave'") 
	or die($conexion."Error en la conexion");

	if (mysqli_num_rows($consulta)>0) {
		
		$fila = mysqli_fetch_array($consulta); #la variable 'fila' es donde se guardan las consultas si existe o no la info
		$_SESSION['user'] = $fila['usuario'];
		echo "Iniciando Session";
		echo "<script>window.location='menu_inicio.php';</script>"; #si el usuario y contraseña, lo va a enviar a menu inicio.php
	}else{
		echo "<script>alert('usuario o clave incorrectos');</script>";
		echo "<script>window.location='index.php';</script>";
	}
}

?>