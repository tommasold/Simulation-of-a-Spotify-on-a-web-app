
<?php
session_start();
include_once('Conexion.php');

$idcancion = $_GET['idcanciones'];
$usuario_id = $_SESSION['id'];

$query = "INSERT INTO usuario_like_pieza (usuario_idusuraio, pieza_idpieza) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ii", $usuario_id, $idcancion);
$stmt->execute();

$mysqli->close();

header("Location: pagina_cancion.php?idcanciones=" . $idcancion);
exit;
?>
