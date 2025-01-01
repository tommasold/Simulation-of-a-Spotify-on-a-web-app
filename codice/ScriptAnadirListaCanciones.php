<?php
session_start();
include_once('Conexion.php');

$idcancion = $_POST['idcancion'];
$idlista = $_POST['idlista'];

$query = "INSERT INTO playlist_has_pieza (playlist_idplaylist, pieza_idpieza) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ii", $idlista, $idcancion);
$stmt->execute();

$mysqli->close();

header("Location: listas.php");
exit;
?>
