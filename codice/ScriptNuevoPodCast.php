<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include_once('Conexion.php');

$login = $_POST['login'];
$password = $_POST['password'];
$titulo = $_POST['titulo'];
$informacion = $_POST['informacion'];
$n_seguidores = $_POST['n_seguidores'];
$enlace_a_imagen = $_POST['enlace_a_imagen'];
$fecha_creation = date('Y-m-d H:i:s');
$n_reproducciones = $_POST['n_reproducciones'];
$idtematica = $_POST['idtematica'];

$resultado = $mysqli->query("SELECT MAX(idpodcast) as maximo FROM podcast");
$fila = $resultado->fetch_object();
$newId = $fila->maximo + 1;

$cadenaSQL = "INSERT INTO podcast (idpodcast, login, password, titulo, informacion, n_seguidores, enlace_a_imagen, fecha_creation, n_reproducciones, idtematica)
              VALUES ('$newId', '$login', '$password', '$titulo', '$informacion', '$n_seguidores', '$enlace_a_imagen', '$fecha_creation', '$n_reproducciones', '$idtematica')";

$mysqli->query($cadenaSQL);
header("Location: NuevoPodcast.php?");
$mysqli->close();



?>

</body>
</html>
