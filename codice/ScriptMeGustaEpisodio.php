<?php
session_start();
include_once('Conexion.php');

$idusuario = $_SESSION['id'];
$idepisodio = $_POST['idepisodio'];

$insert_like = "INSERT INTO usuario_like_episodio (usuario_idusuraio, episodio_idepisiodio) VALUES (?, ?)";
$stmt_insert_like = $mysqli->prepare($insert_like);
$stmt_insert_like->bind_param("ii", $idusuario, $idepisodio);
$stmt_insert_like->execute();

$mysqli->close();

header("Location: pagina_episodio.php?idepisodio=$idepisodio");
exit;
?>
