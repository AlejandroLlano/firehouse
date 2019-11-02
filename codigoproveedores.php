<?php
include 'conexion.php';

$nom = $_POST['nombre'];
$tel1 = $_POST['telefono1'];
$tel2 = $_POST['telefono2'];
$email = $_POST['correo'];
$comen = $_POST['comentario'];

if (isset($_REQUEST['btn'])) {
	
	$registrar = mysqli_query($conexion,"INSERT INTO proveedores(proveedor,telefono1,telefono2,correo,comentario) VALUES ('$nom','$tel1','$tel2','$email','$comen')") or die($conexion. "Problemas en el insert");

	echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";

}else if (isset($_REQUEST['btnvolver'])){
	echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";
}else{
	echo "<script>alert('Proveedor no se puede registrar');</script>";
	echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";
}

?>