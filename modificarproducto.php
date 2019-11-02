<?php
include "conexion.php";


if (isset($_POST['btnmodificar'])){
$modificar = $_POST['modificar'];

$consulta = mysqli_query($conexion, "SELECT * FROM producto WHERE idproducto = '$modificar'");

$resultado = mysqli_fetch_array($consulta);

?>
<html>
<head>	
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/estilosproveedores.css">
</head>
<body>
	<center>
	<h2>MODIFICAR</h2>
	<form action="modificandoproducto.php" method="post">
		<input type= "int" name="idproducto" value="<?php echo $resultado['idproducto']; ?>">
		<input type= "text" name="producto" value="<?php echo $resultado['producto']; ?>">
		<input type= "int" name="idproveedor" value="<?php echo $resultado['idproveedor']; ?>">
		<input type= "int" name="stock" value="<?php echo $resultado['stock']; ?>">
		<input type="submit" name="btnmodificar" value="GUARDAR">
	</form>	
</center>
</body>
</html>
<?php
}
?>