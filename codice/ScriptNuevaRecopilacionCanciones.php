<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php
	include_once ('Conexion.php');
	$nombre = $_POST['nombre'];
  $image = $_POST['image'];
  $idadministrador = $_POST['idadministrador'];
  $resultado = $mysqli->query("SELECT MAX(idcolleccion) as maximo FROM colleccion");
  $fila = $resultado->fetch_object();
  $newId = $fila->maximo + 1;
  $cadenaSQL = "INSERT INTO colleccion(idcolleccion,nombre,tipo,idadministrador,image)
              VALUES ('$newId','$nombre','music','$idadministrador','$image')";
  $mysqli->query($cadenaSQL);
  header("Location: NuevaRecopilacionCanciones.php?");
$mysqli->close();
?>
</body>
</html>
