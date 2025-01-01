
<?php
session_start();
include_once('Conexion.php');

$idlista = $_POST['idlista'];
$idepisodio = $_POST['idepisodio'];

$insert_playlist = "INSERT INTO playlist_de_episodio_has_episodio (playlist_de_episodio_idplaylist, episodio_idepisiodio) VALUES (?, ?)";
$stmt_insert_playlist = $mysqli->prepare($insert_playlist);
$stmt_insert_playlist->bind_param("ii", $idlista, $idepisodio);
$stmt_insert_playlist->execute();

$mysqli->close();

header("Location: Pagina_Episodios.php?idepisodio=$idepisodio");
exit;
?>
