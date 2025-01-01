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
  $tipo = $_POST['tipo'];
  $enlaceaspotify = $_POST['enlaceaspotify'];
  $resultado = $mysqli->query("SELECT MAX(idcollection) as maximo FROM collection");
  $fila = $resultado->fetch_object();
  $newId = $fila->maximo + 1;
  $cadenaSQL = "INSERT INTO collection(idcollection, nombre, tipo, image)
              VALUES ('$newId','$nombre','$tipo','enlaceaspotify')";
  $mysqli->query($cadenaSQL);
  header("Location: Pagina_Album.php?idalbumes=". $idalbumes);
$mysqli->close();
?>
</body>
</html>
