<?php

include "conexion.php";

if (isset($_POST['btnmodificar'])){
$idproducto = $_POST['idproducto'];
$producto = $_POST['producto'];
$idproveedor = $_POST['idproveedor'];
$stock = $_POST['stock'];

$modificando = mysqli_query($conexion,"UPDATE producto SET producto='$producto',idproveedor='$idproveedor', stock='$stock' WHERE idproducto='$idproducto'")or die ($conexion."problemas en el update");

	echo "<script>alert('REGISTRO MODIFICADO')</script>";
	echo "<script>window.location='menu_inicio.php?mod=productos';</script>";
} else{
	echo "<script>alert('Producto no se puede registrar');</script>";
	echo "<script>window.location='menu_inicio.php?mod=productos';</script>";
}
?>