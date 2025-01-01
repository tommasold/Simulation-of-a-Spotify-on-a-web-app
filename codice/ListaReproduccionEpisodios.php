<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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


    $idlista = $_GET['idlista'];
    $nombre = $_GET['nombre'];
    $publica = $_GET['publica'];
    echo "<table style='width:100%'>";
    if ($publica) { echo "<p style='font-size:30px; '><b>Lista pública de Reproducción</b></p>";} else {echo "<p style='font-size:30px; '><b>Lista privada de Reproducción</b></p>";}
    echo "<p style='font-size:20px; '><b>". $nombre ."</b></p>";

    $episodios = "SELECT *, ep.descripcion as tituloepisodio FROM episodio as ep INNER JOIN playlist_de_episodio_has_episodio as lista INNER JOIN podcast as pod WHERE
    lista.playlist_de_episodio_idplaylist='$idlista'
    and ep.idepisiodio = lista.episodio_idepisiodio and ep.idpodcast = pod.idpodcast";
    $resultado_episodios = $mysqli->query($episodios);

    while ($fila_episodios = $resultado_episodios->fetch_object()){
       echo "<tr>";
       echo "<td><img src=" . $fila_episodios->enlace_a_imagen . " width='40' height='40'/></td>";
       echo "<td><a class='menu' href='Pagina_Episodio.php?idepisodio=" . $fila_episodios->idepisiodio . "'>" . $fila_episodios->descripcion . " </a></td>";

       echo "<td><b>" . $fila_episodios->duracion . "</b></td>";

       echo "</tr>";

     }
  echo "</table>";

$mysqli->close();
?>
</body>
</html>
