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
  $idusuario= $_POST['idusuario'];
  $resultado = $mysqli->query("SELECT MAX(idplaylist) as maximo FROM playlist_de_canciones");
  $fila = $resultado->fetch_object();
  $newId = $fila->maximo + 1;
  $cadenaSQL = "INSERT INTO playlist_de_canciones(idplaylist,nombre,tipo,usuario_idusuraio)
              VALUES ('$newId','$nombre','musica','$idusuario')";
  $mysqli->query($cadenaSQL);
  header("Location: NuevaListaCanciones.php?&usuario=". $idusuario);
$mysqli->close();
?>
</body>
</html>
