<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<link rel="stylesheet" href="micss.css">
</head>
<body>
	<?php
	include_once('Conexion.php');
	session_start();

	$idepisiodio = $_GET['idepisodio'];
	$id = $_SESSION['id'];
	$cancion = "SELECT * FROM episodio WHERE idepisiodio='$idepisiodio'";
	$resultado = $mysqli->query($cancion);
	$fila = $resultado->fetch_object();

	echo "<div>";
	echo "<iframe style='border-radius:12px' src='" . $fila->enlace . "' width='100%' height='352' frameborder='0' allowfullscreen='' allow='autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture' loading='lazy'></iframe>";
	echo "<p><b> Número de reproducciones: " . $fila->n_reproducciones . "</b></p>";
	echo "<p><b> Duración: " . $fila->duracion . "</b></p>";

	if ($_SESSION['type'] == 'usuario') {


	echo "<form action='ScriptMeGustaEpisodio.php' method='post' class='formulario'>";
	echo "<input type='hidden' name='idepisodio' value='" . $idepisiodio . "' />";
	echo "<input type='submit' style='width:100%; background-color:green;color:white;' value='Me Gusta'>";
	echo "</form>";

	echo "<form action='ScriptAnadirListaEpisodios.php' method='post' class='formulario'>";
	$listas = "SELECT * FROM playlist_de_episodio WHERE usuario_idusuraio='$id'";
	$resultado2 = $mysqli->query($listas);
	echo "<input type='submit' style='width:100%; background-color:green;color:white;' value='Añadir a una lista de reproducción'>";
	echo "<select name='idlista' style='width:100%;'>";
	while ($fila2 = $resultado2->fetch_object()) {
	    echo "<option style='background-color: white; color: black;' value='" . $fila2->idplaylist . "'>" . $fila2->nombre . "</option>";
	}
	echo "</select>";
	echo "<input type='hidden' name='idepisodio' value='" . $idepisiodio . "' />";
	echo "</form>";

}

if ($_SESSION['type'] == 'administrador') {
    echo "<form action='ScriptAnadirRecopilacionEpisodio.php' method='post' class='formulario'>";
    $recopilaciones = "SELECT * FROM colleccion WHERE idadministrador='$id'";
    $resultado2 = $mysqli->query($recopilaciones);
    echo "<input type='submit' style='width:100%; background-color:green;color:white;' value='Añadir a una recopilación'>";
    echo "<select name='idlista' style='width:100%;'>";
    while ($fila2 = $resultado2->fetch_object()) {
        echo "<option style='background-color: white; color: black;' value='" . $fila2->idcolleccion . "'>" . $fila2->nombre . "</option>";
    }
    echo "</select>";
    echo "<input type='hidden' name='idepisiodio' value='" . $idepisiodio . "' />";
    echo "</form>";
}

	$recopilaciones = "SELECT * FROM playlist_de_episodio as rec WHERE EXISTS (SELECT * FROM playlist_de_episodio_has_episodio as rcan WHERE rcan.episodio_idepisiodio = '$idepisiodio' and rcan.playlist_de_episodio_idplaylist = rec.idplaylist)";
	$resultado5 = $mysqli->query($recopilaciones);
	if ($resultado5->num_rows > 0) {
		echo "<div>";
		echo "<p style='font-size:30px; '><b>Listas de reproducción en las que aparece</b></p>";
		while ($fila5 = $resultado5->fetch_object()) {
			echo "<div class='column' style='margin: 20pt;'>";
			echo "<a class='menu' href='ListaReproduccionEpisodios.php?idlista=" . $fila5->idplaylist . "&nombre=" . $fila5->nombre . "&publica=" . $fila5->tipo . "'>";
			echo "<p>" . $fila5->nombre . "</p></a>";
			echo "</div>";
		}
		echo "</div>";
	}

	$gustas = "SELECT * FROM usuario as usu INNER JOIN usuario_like_episodio as mg WHERE mg.usuario_idusuraio = usu.idusuraio and mg.episodio_idepisiodio='$idepisiodio'";
	$resultado6 = $mysqli->query($gustas);
	if ($resultado6->num_rows > 0) {
		echo "<hr>";
		echo "<div>";
		echo "<p style='font-size:30px; '><b>Usuarios a los que le gusta</b></p>";
		while ($fila6 = $resultado6->fetch_object()) {
			echo "<div style='width:100%;'>";
			echo "<img src='" . $fila6->direcion . "' class='avatar'/>";
			echo "<br/>";
			echo "<p><b>" . $fila6->nickname . "</b></p>";
			echo "</div>";
		}
		echo "</div>";
	}

	$mysqli->close();
	?>
</body>
</html>
