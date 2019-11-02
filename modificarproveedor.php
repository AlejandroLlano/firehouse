<?php
include "conexion.php";


if (isset($_POST['btnmodificar'])){
$modificar = $_POST['modificar'];

$consulta = mysqli_query($conexion, "SELECT * FROM proveedores WHERE idproveedor = '$modificar'");

$resultado = mysqli_fetch_array($consulta);

?>
<html>
<head>	
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/estilosproveedores.css">
</head>
<body>
<center>
	<div class="loginboxmodificar">
	<h2>MODIFICAR</h2>
	<form action="modificandoproveedor.php" method="post">
		<input type= "int" name="idproveedor" value="<?php echo $resultado['idproveedor']; ?>">
		<input type= "text" name="proveedor" value="<?php echo $resultado['proveedor']; ?>">
		<input type= "text" name="telefono1" value="<?php echo $resultado['telefono1']; ?>">
		<input type= "text" name="telefono2" value="<?php echo $resultado['telefono2']; ?>">
		<input type= "text" name="correo" value="<?php echo $resultado['correo']; ?>">
		<input type= "text" name="comentario" value="<?php echo $resultado['comentario']; ?>">
		<input type="submit" name="btnmodificar" value="GUARDAR">
	</form>	
	</div>	
</center>
</body>
</html>
<?php
}
?>