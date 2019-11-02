<?php

include "conexion.php";

if (isset($_POST['btneliminar'])) {

	$eliminar = $_POST['eliminar'];

	$eliminando=mysqli_query($conexion,"DELETE FROM producto WHERE idproducto = $eliminar;")
	or die ($conexion."problemas al eliminar");

echo "<script>alert('Registro eliminado')</script>";
echo "<script>window.location='menu_inicio.php?mod=productos';</script>";

} else {

echo "<script>alert('No se pudo eliminar')</script>";
echo "<script>window.location='menu_inicio.php?mod=productos';</script>";

}

?>