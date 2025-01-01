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

	$idartistas = $_SESSION['id'] ;
  $artista = "SELECT * FROM artista WHERE idartista='$idartistas'";
	$resultado = $mysqli->query($artista);

		$fila = $resultado->fetch_object();
    echo "<br/>";
    echo "<br/>";
    echo "<div>";
    echo "<img src=" . $fila->direcion ." width='100%' height='500'/>";
	 	echo "<p style='font-size:50px; '><b>" . $fila->nombre .  "</b></p>";
		echo "<p><b> Descripción: " . $fila->descripcion .  "</b></p>";
    echo "<p><b> Número de reproducciones: " . $fila->n_reprocciones .  "</b></p>";

		$tematica = "SELECT * FROM tematica_artista WHERE idtematica='$fila->idtematica'";
		$resultadot = $mysqli->query($tematica);
	  $filat = $resultadot->fetch_object();
		echo "<p><b> Temática: " . $filat->nombre .  "</b></p>";

    echo "<p><b> Ingresos Actuales </b></p>";
		$ingresos = "SELECT * FROM ingresos_artistas WHERE idartista='$idartistas'";
		$resultadoi = $mysqli->query($ingresos);

		IF ($resultadoi->num_rows==0) {
	  echo "<p><b> Cantidad: 0 </b></p>";
		} ELSE
    {
	  $filai = $resultadoi->fetch_object();
		echo "<p><b> Fecha: " . $filai->fecha .  "</b></p>";
    echo "<p><b> Cantidad: " . $filai->cantidad .  "</b></p>";
	  }
    echo "</div>";



  $canciones = "SELECT *, can.titulo as titulocancion FROM pieza as can INNER JOIN album as alb WHERE alb.idartista = '$idartistas'
  and can.idalbum = alb.idalbum ORDER BY can.n_reproducciones";
  $resultado2 = $mysqli->query($canciones);
  $count = 1;
  if ($resultado2->num_rows>0){
		echo "<hr>";
    echo "<p style='font-size:30px; '><b>Canciones Más Escuchadas</b></p>";
	  echo "<table style='width:100%'>";
    while ($fila2 = $resultado2->fetch_object() and $count<=5) {
		echo "<tr>";
		echo "<td>". $count . ".</td>";
		echo "<td><img src=" . $fila2->image . " width='40' height='40'/></td>";
		echo "<td><a class='menu' href='Pagina_Cancion.php?idcanciones=" . $fila2->idpieza . "'>" . $fila2->titulo . " </a></td>";
		echo "<td><b>" . $fila2->duracion_minutos . ":" . $fila2->duracion_segundos . "</b></td>";
		echo "</tr>";
    $count = $count +1;
	}
	echo "<table>";
  }


  $albumes = "SELECT * FROM album WHERE idartista = '$idartistas'";
  $resultado3 = $mysqli->query($albumes);
  if ($resultado3->num_rows>0){
		echo "<hr>";
		echo "<div>";
	  echo "<p style='font-size:30px; '><b>Álbumes</b></p>";
    while ($fila3 = $resultado3->fetch_object()) {
  	echo "<div class='column' style='margin: 20pt;'>";
		echo "<a class='menu' href='Pagina_Album.php?idalbumes=" . $fila3->idalbum . "'> <img src=" . $fila3->image ." width='200' height='200'/></a>";
	 	echo "<p><b>" . $fila3->titulo .  "</b></p>";
		echo "<p><b> Año de Publicación: " . $fila3->fecha .  "</b></p>";
    echo "</div>";
	}
	echo "<div>";
  }


	echo "<a href='NuevaAlbum.php?idartista=". $idartistas . "' class='menu'><button style='width:100%; margin:10pt;  background-color:green;color:white;'>Nuevo Album</button></a><br/>";



  $recopilaciones = "SELECT * FROM colleccion as rec  WHERE EXISTS (SELECT * FROM colleccion_has_pieza as rcan
    INNER JOIN pieza as can
    INNER JOIN album as alb
    INNER JOIN artista as art
    WHERE art.idartista = '$idartistas'
    and alb.idartista = art.idartista
    and can.idalbum = alb.idalbum
    and rcan.pieza_idpieza = can.idpieza
    and rcan.colleccion_idcolleccion = rec.idcolleccion)";

  $resultado4 = $mysqli->query($recopilaciones);
  if ($resultado4->num_rows>0){
		echo "<hr>";
		echo "<div>";
		echo "<p style='font-size:30px; '><b>Recopilaciones en las que aparece</b></p>";
    while ($fila4 = $resultado4->fetch_object()) {
  	echo "<div class='column' style='margin: 20pt;'>";
    echo "<img src=" . $fila4->image ." width='200' height='200'/>";
	 	echo "<p><b>" . $fila4->nombre .  "</b></p>";
    echo "</div>";
	}
	echo "<div>";
  }


  $listas = "SELECT * FROM playlist_de_canciones as rec  WHERE EXISTS (SELECT * FROM playlist_has_pieza as rcan
    INNER JOIN pieza as can
    INNER JOIN album as alb
    INNER JOIN artista as art
    WHERE art.idartista = '$idartistas'
    and alb.idartista = art.idartista
    and can.idalbum = alb.idalbum
    and rcan.pieza_idpieza = can.idpieza
    and rcan.playlist_idplaylist = rec.idplaylist)";

  $resultado5 = $mysqli->query($listas);
  if ($resultado5->num_rows>0){
		echo "<hr>";
	  echo "<div>";
	  echo "<p style='font-size:30px; '><b>Listas de reproducción en las que aparece</b></p>";
    while ($fila5 = $resultado5->fetch_object()) {
  	echo "<div class='column' style='margin: 20pt;'>";
		echo "<a class='menu' href='ListaReproduccionCanciones.php?idlista=" . $fila5->idplaylist . "&nombre=". $fila5->nombre ."&publica=". $fila5->tipo . "'>
														 <p>" . $fila5->nombre .  "</p></a>";
    echo "</div>";
	}
	echo "<div>";
  }


  $seguidores = "SELECT * FROM usuario as usu INNER JOIN usuario_has_artista as seg WHERE seg.usuario_idusuraio = usu.idusuraio";

  $resultado6 = $mysqli->query($seguidores);
  if ($resultado6->num_rows>0){
		echo "<hr>";
		echo "<div>";
		echo "<p style='font-size:30px; '><b>Usuarios que lo siguen</b></p>";
    while ($fila6 = $resultado6->fetch_object()) {
      echo "<div width='100%''>";
      echo "<img src=" . $fila6->direcion ."  class='avatar'/>";
  		echo "<br/>";
  	 	echo "<p><b>" . $fila6->nickname .  "</b></p>";
      echo "</div>";
  }
  echo "<div>";
}


$mysqli->close();
?>
</body>
</html>
