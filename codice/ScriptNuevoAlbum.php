<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php
	include_once ('Conexion.php');
	$titulo = $_POST['titulo'];
  $image = $_POST['image'];
  $fecha = $_POST['fecha'];
  $idartista = $_POST['idartista'];
  $resultado = $mysqli->query("SELECT MAX(idalbum) as maximo FROM album");
  $fila = $resultado->fetch_object();
  $newId = $fila->maximo + 1;
  $cadenaSQL = "INSERT INTO album(idalbum,image,titulo,fecha,idartista)
              VALUES ('$newId','$image','$titulo','$fecha','$idartista')";
  $mysqli->query($cadenaSQL);
  header("Location: Pagina_Album.php?idalbumes=". $idalbumes);
$mysqli->close();
?>
</body>
</html>
