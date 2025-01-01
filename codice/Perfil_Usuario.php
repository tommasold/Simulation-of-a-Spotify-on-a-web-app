<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<link rel="stylesheet" href="micss.css">
</head>
<body>
	<?php
	include_once ('Conexion.php');
  session_start();

	$login = $_SESSION['login'];
	$password = $_SESSION['password'];
	$usuario = "SELECT * FROM usuario WHERE login='$login' AND password='$password'";
	$resultado = $mysqli->query($usuario);

		$fila = $resultado->fetch_object();
		echo "<br/>";
		echo "<br/>";
    echo "<div width='100%''>";
    echo "<img src=" . $fila->direcion ."  class='avatar'/>";
		echo "<br/>";
		echo "<br/>";
	 	echo "<p><b> Perfil de " . $fila->nickname .  "</b></p>";
		echo "<p><b> Nombre: " . $fila->nombre .  "</b></p>";
    echo "</div>";




 $usuario = $fila->idusuraio;
 $artistas ="SELECT * FROM artista INNER JOIN usuario_has_artista as aseg WHERE
 aseg.usuario_idusuraio=$usuario AND
 aseg.artista_idartista = artista.idartista";
 $resultado2 = $mysqli->query($artistas);
 if ($resultado2->num_rows>0){
	 	echo "<hr>";
	 echo "<div>";
	 echo "<p style='font-size:30px; '><b>Artistas que sigues</b></p>";
		while ($fila2 = $resultado2->fetch_object()) {
			echo "<div class='column' style='margin: 20pt;'>";
			echo "<a class='menu' href='Pagina_Artista.php?idartistas=" . $fila2->idartista . "'> <img width='200' height='200' src='". $fila2->direcion ."'></img></a>";
			echo "<p>" . $fila2->nombre . "</p>";
			echo "</div>";
		}
	}
	echo "</div>";


	$usuario = $fila->idusuraio;
  $podcasts ="SELECT * FROM podcast INNER JOIN usuario_has_podcast as pseg
	WHERE pseg.usuario_idusuraio=$usuario AND
  pseg.podcast_idpodcast = podcast.idpodcast";
  $resultado3 = $mysqli->query($podcasts);
  if ($resultado3->num_rows>0){
		echo "<hr>";
		echo "<div>";
		echo "<p style='font-size:30px; '><b>Podcasts que sigues</b></p>";
 		while ($fila3 = $resultado3->fetch_object()) {
			echo "<div class='column' style='margin: 20pt;'>";
			echo "<a class='menu' href='Pagina_PodCast.php?idpodcast=" . $fila3->idpodcast. "'> <img width='200' height='200' src='". $fila3->enlace_a_imagen ."'></img></a>";
			echo "<p>" . $fila3->titulo . "</p>";
			echo "</div>";
 		}
 	}
	echo "</div>";


	$usuario = $fila->idusuraio;
  $canciones ="SELECT * FROM pieza as can INNER JOIN usuario_like_pieza as gcan INNER JOIN album as alb WHERE gcan.usuario_idusuraio=$usuario
	and can.idpieza = gcan.pieza_idpieza and alb.idalbum = can.idalbum";
  $resultado4 = $mysqli->query($canciones);
  if ($resultado4->num_rows>0){
		echo "<hr>";
  	echo "<div>";
  	echo "<p style='font-size:30px; '><b>Canciones que te gustan</b></p>";
 	 while ($fila4 = $resultado4->fetch_object()) {
		echo "<div class='column' style='margin: 20pt;'>";
		echo "<a class='menu' href='Pagina_Cancion.php?idcanciones=" . $fila4->idpieza . "'> <img src=" . $fila4->image . " width='200' height='200'/></a>";
 		echo "<p>" . $fila4->titulo . "</p>";
 		echo "</div>";
 	 }
  }
	echo "</div>";


	$usuario = $fila->idusuraio;
	$episodios = "SELECT epi.*, pod.enlace_a_imagen AS enlace_podcast
	              FROM episodio AS epi
	              INNER JOIN usuario_like_episodio AS gep ON epi.idepisiodio = gep.episodio_idepisiodio
	              INNER JOIN podcast AS pod ON pod.idpodcast = epi.idpodcast
	              WHERE gep.usuario_idusuraio = $usuario";

	$resultado5 = $mysqli->query($episodios);

	if ($resultado5->num_rows > 0) {
	    echo "<hr>";
	    echo "<div>";
	    echo "<p style='font-size:30px; '><b>Episodios que te gustan</b></p>";
	    while ($fila5 = $resultado5->fetch_object()) {
	        echo "<div class='column' style='margin: 20pt;'>";
	        echo "<img src='" . $fila5->enlace_podcast . "' width='200' height='200'/>";
	        echo "<p style='max-width: 150pt; overflow: hidden;'>" . $fila5->descripcion . "</p>";
	        echo "</div>";
	    }
	}
	echo "</div>";

$mysqli->close();
?>
</body>
</html>
