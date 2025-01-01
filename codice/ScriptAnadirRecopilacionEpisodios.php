
<?php
session_start();
include_once('Conexion.php');

$idlista = $_POST['idlista'];
$idepisodio = $_POST['idepisiodio'];

$insert_recopilacion = "INSERT INTO colleccion_has_pieza (colleccion_idcolleccion, pieza_idpieza) VALUES (?, ?)";
$stmt_insert_recopilacion = $mysqli->prepare($insert_recopilacion);
$stmt_insert_recopilacion->bind_param("ii", $idlista, $idepisodio);
$stmt_insert_recopilacion->execute();

$mysqli->close();

header("Location: pagina_episodio.php?idepisodio=$idepisodio");
exit;
?>
