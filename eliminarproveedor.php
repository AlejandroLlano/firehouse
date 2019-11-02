<?php

include "conexion.php";

if (isset($_POST['btneliminar'])) {

	$eliminar = $_POST['eliminar'];

	$eliminando=mysqli_query($conexion,"DELETE FROM proveedores WHERE idproveedor = $eliminar;")
	or die ($conexion."problemas al eliminar");

echo "<script>alert('Registro eliminado')</script>";
echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";

} else {

echo "<script>alert('No se pudo eliminar')</script>";
echo "<script>window.location='menu_inicio.php?mod=proveedores';</script>";

}

?>