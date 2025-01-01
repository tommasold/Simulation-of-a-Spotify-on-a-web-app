<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="micss.css">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php
	include_once ('Conexion.php');
	$busqueda = $_POST['busqueda'];

	$bartistas = "SELECT * FROM artista WHERE nombre LIKE '%$busqueda%'";
	$rartistas = $mysqli->query($bartistas);
	if ($rartistas->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Artistas</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $rartistas->fetch_object()) {
			echo "<tr>";
			echo "<td><img src=" . $fila->direcion . " width='40' height='40'/></td>";
			echo "<td><a class='menu' href='Pagina_Artista.php?idartistas=" . $fila->idartista . "'><b>" . $fila->nombre . "</b></a></td>";
		}
		echo "</table>";
	}
	$bcanciones = "SELECT * FROM pieza WHERE titulo LIKE '%$busqueda%'";
	$rcanciones = $mysqli->query($bcanciones);
	if ($rcanciones->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Canciones</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $rcanciones->fetch_object()) {
			echo "<tr>";
				echo "<td><a class='menu' href='Pagina_Cancion.php?idcanciones=" . $fila->idpieza . "'><b>" . $fila->titulo . "</b></a></td>";

		}
		echo "</table>";
	}
	$bcanciones = "SELECT * FROM podcast WHERE titulo LIKE '%$busqueda%'";
	$rcanciones = $mysqli->query($bcanciones);
	if ($rcanciones->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Podcast</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $rcanciones->fetch_object()) {
			echo "<tr>";
				echo "<td><a class='menu' href='Pagina_Podcast.php?idpodcast=" . $fila->idpodcast . "'><b>" . $fila->titulo . "</b></a></td>";

		}
		echo "</table>";
	}
	$balbumes = "SELECT * FROM album WHERE titulo LIKE '%$busqueda%'";
	$ralbumes = $mysqli->query($balbumes);
	if ($ralbumes->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Albumes</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $ralbumes->fetch_object()) {
			echo "<tr>";
			echo "<td><img src=" . $fila->image . " width='40' height='40'/></td>";
			echo "<td><a class='menu' href='Pagina_Album.php?idalbumes=" . $fila->idalbum . "'><b>" . $fila->titulo . "</b></a></td>";

		}
		echo "</table>";
	}

	$blistasdereproduccioncanciones = "SELECT * FROM playlist_de_canciones WHERE nombre LIKE '%$busqueda%' and tipo";
	$rlistasdereproduccioncanciones = $mysqli->query($blistasdereproduccioncanciones);
	if ($rlistasdereproduccioncanciones->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Listas de reproducción de canciones</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $rlistasdereproduccioncanciones->fetch_object()) {
			echo "<tr>";
			echo "<td><a class='menu' href='ListaReproduccionCanciones.php?idlista=" .
			$fila->idlistasdereproduccioncanciones . "&nombre=" . $fila->nombre . "&publica=" . $fila->tipo . "'><b>" . $fila->nombre . "</b></a></td>";

		}
		echo "</table>";
	}
	$busuarios = "SELECT * FROM usuario WHERE nickname LIKE '%$busqueda%'";
	$rusuarios = $mysqli->query($busuarios);
	if ($rusuarios->num_rows>0){
		echo "<hr>";
		echo "<p style='font-size:30px; '><b>Usuarios</b></p>";
		echo "<table style='width:100%'>";
		while ($fila = $rusuarios->fetch_object()) {
			echo "<tr>";
			echo "<td><img src=" . $fila->direcion ."  width='40' height='40'/></td>";
			echo "<td><b>" . $fila->nickname . "</b></td>";

		}
		echo "</table>";
	}

$mysqli->close();
?>
</body>
</html>
