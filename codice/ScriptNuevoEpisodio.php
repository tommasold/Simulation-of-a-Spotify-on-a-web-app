<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include_once('Conexion.php');

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$enlance = $_POST['enlance'];
$duracion = $_POST['duracion'];
$n_reproducciones = $_POST['reproducciones'];
$idpodcast = $_POST['idpodcast'];
$idcolleccion= $_POST['idcolleccion'];

$resultado = $mysqli->query("SELECT MAX(idepisiodio) as maximo FROM episodio");
$fila = $resultado->fetch_object();
$newId = $fila->maximo + 1;

$cadenaSQL = "INSERT INTO episodio (idepisiodio, descripcion, fecha_publicacion,enlace, duracion, n_reproducciones, idpodcast,idcolleccion)
              VALUES ('$newId', '$titulo', '$fecha', '$enlance', '$duracion', '$n_reproducciones', '$idpodcast', '$idcolleccion')";

$mysqli->query($cadenaSQL);
header("Location: NuevoEpisodio.php?&idpodcast=" . $idpodcast);
$mysqli->close();
