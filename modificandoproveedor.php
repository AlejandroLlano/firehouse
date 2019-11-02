<?php

include "conexion.php";

if (isset($_POST['btnmodificar'])){
$idproveedor = $_POST['idproveedor'];
$proveedor = $_POST['proveedor'];
$telefono1 = $_POST['telefono1'];
$telefono2 = $_POST['telefono2'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

$modificando = mysqli_query($conexion,"UPDATE proveedores SET proveedor='$proveedor', telefono1='$telefono1', telefono2='$telefono2', correo='$correo', comentario='$comentario' WHERE idproveedor=$idproveedor")or die ($conexion."problemas en el update");

	echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";
} else{
	echo "<script>alert('Proveedor no se puede registrar');</script>";
	echo "<script>window.location='proveedores.php';</script>";
}

?>