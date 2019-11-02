<?php
include 'conexion.php';

$doc = $_POST['doc'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];
$email = $_POST['email'];
$usu = $_POST['usu'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if ($pass1 == $pass2) {

	$clave = md5(sha1($pass1));

	$registrar = mysqli_query($conexion,"INSERT INTO usuario
	(documento,nombres,apellidos,correo,usuario,pass) VALUES
	('$doc','$nom','$ape','$email','$usu','$clave')") 
	or die($conexion."Problemas en el insert");
	
	echo "<script>alert('Usuario registrado con exito');</script>";
	echo "<script>window.location='menu_inicio.php';</script>";
}else{
	echo "<script>alert('Usuario o clave no son correctos');</script>";
	echo "<script>window.location='menu_inicio.php?mod=registrar';</script>";
}
?>