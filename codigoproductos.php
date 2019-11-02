<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$idproveedor = $_POST['idproveedor'];
$stock = $_POST['stock'];

if (isset($_REQUEST['btn'])) {
	
	$registrar = mysqli_query($conexion,"INSERT INTO producto(producto,stock,proveedore_idproveedor) VALUES ('$nombre',$stock,$idproveedor)") or die($conexion. "Problemas en el insert");

	echo "<script>alert('Producto registrado con exito');</script>";
	echo "<script>window.location='menu_inicio.php?mod=productos';</script>";

}else if (isset($_REQUEST['btnvolver'])){
	echo "<script>window.location='menu_inicio.php?mod=productos';</script>";
}else{
	echo "<script>alert('Producto no se puede registrar');</script>";
	echo "<script>window.location='menu_inicio.php?mod=productos';</script>";
}

?>