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
  $idusuarios = $_SESSION['id'];
	$idartistas = $_GET['idpodcast'];
  $artista = "SELECT * FROM podcast WHERE idpodcast='$idartistas'";
	$resultado = $mysqli->query($artista);

		$fila = $resultado->fetch_object();
    echo "<br/>";
    echo "<br/>";
    echo "<div>";
    echo "<img src=" . $fila->enlace_a_imagen ." width='100%' height='500'/>";
	 	echo "<p style='font-size:50px; '><b>" . $fila->titulo .  "</b></p>";
		echo "<p><b> Descripción: " . $fila->informacion .  "</b></p>";
    echo "<p><b> Número de reproducciones: " . $fila->n_seguidores .  "</b></p>";

		$tematica = "SELECT * FROM tematica WHERE idtematica='$fila->idtematica'";
		$resultadot = $mysqli->query($tematica);
	  $filat = $resultadot->fetch_object();
		echo "<p><b> Temática: " . $filat->nombre .  "</b></p>";


		$seguimiento = "SELECT * FROM usuario_has_podcast WHERE usuario_idusuraio='$idartistas' and usuario_idusuraio='$idusuarios'";
		$seguido = $mysqli->query($seguimiento);
		if ($seguido->num_rows==0){
		echo "<a href='ScriptSeguimientoPodCast.php?usuario=" . $idusuarios . "&artista=" . $idartistas . "' class='menu'><button style='width:100%; margin:10pt;  background-color:green;color:white;'>Seguir</button></a><br/>";
	  }

		echo "</div>";


    $idpodcast = $_GET['idpodcast'];

    $query = "SELECT * FROM episodio WHERE idpodcast='$idpodcast'";
    $resultado = $mysqli->query($query);

    if ($resultado->num_rows > 0) {
        echo "<hr/>";
        echo "<p style='font-size:30px;'><b>Episodios de PodCast</b></p>";
        echo "<table style='width:100%'>";
        $count = 1;
        while ($fila = $resultado->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $count . ".</td>";
            echo "<td><a class='menu' href='Pagina_Episodios.php?idepisodio=" . $fila->idepisiodio . "'><p><b>" . $fila->descripcion . "</b></p></a></td>";
            echo "<td><b>" . intval($fila->duracion ) . "</b></td>";
            echo "</tr>";
            $count++;
        }
        echo "</table>";
    } else {
        echo "<p>No hay episodios para este podcast.</p>";
    }




  $listas = "SELECT * FROM playlist_de_episodio as rec  WHERE EXISTS (SELECT * FROM playlist_de_episodio_has_episodio as rcan
    INNER JOIN episodio as can
    INNER JOIN podcast as alb
    WHERE alb.idpodcast = '$idpodcast'
    and alb.idpodcast = can.idpodcast
    and rcan.episodio_idepisiodio= can.idepisiodio
    and rcan.playlist_de_episodio_idplaylist = rec.idplaylist)";

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


  $seguidores = "SELECT * FROM usuario as usu INNER JOIN usuario_has_podcast as seg WHERE seg.usuario_idusuraio = usu.idusuraio and seg.podcast_idpodcast='$idartistas'";

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
