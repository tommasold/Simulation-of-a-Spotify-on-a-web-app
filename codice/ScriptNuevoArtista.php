<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php
	include_once ('Conexion.php');
	$login = $_POST['login'];
  $password = $_POST['password'];
  $nombre = $_POST['nombre'];
  $reproduciones = $_POST['n_reproducciones'];
  $direciones = $_POST['direcion'];
  $tema = $_POST['tema'];
  $descripcion = $_POST['descripcion'];
	$idtematica= $_POST['idtematica'];
  $resultado = $mysqli->query("SELECT MAX(idartista) as maximo FROM artista");
  $fila = $resultado->fetch_object();
  $newId = $fila->maximo + 1;
  $cadenaSQL = "INSERT INTO artista(idartista,login,password,nombre,n_reprocciones,direcion,tema,descripcion,idtematica)
            VALUES ('$newId','$login','$password','$nombre','$reproduciones','$direciones','$tema', '$descripcion', '$idtematica')";
  $mysqli->query($cadenaSQL);
  header("Location: NuevoArtista.php");
$mysqli->close();
?>
</body>
</html>
