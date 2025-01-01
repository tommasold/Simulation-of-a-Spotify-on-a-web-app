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

	$idpodcast = $_SESSION['id'] ;
  $podcast = "SELECT * FROM podcast WHERE idpodcast='$idpodcast'";
	$resultado = $mysqli->query($podcast);

		$fila = $resultado->fetch_object();
    echo "<br/>";
    echo "<br/>";
    echo "<div>";
    echo "<img src=" . $fila->enlace_a_imagen ." width='100%' height='500'/>";
	 	echo "<p style='font-size:50px; '><b>" . $fila->titulo .  "</b></p>";
		echo "<p><b> Descripción: " . $fila->informacion .  "</b></p>";
    echo "<p><b> Número de seguidores: " . $fila->n_seguidores .  "</b></p>";
    echo "<p><b> Fecha Creation: " . $fila->fecha_creation .  "</b></p>";
    echo "<p><b> Número de reproducciones: " . $fila->n_reproducciones .  "</b></p>";


    $canciones = "SELECT *, can.descripcion as titulocancion
                  FROM episodio as can
                  INNER JOIN podcast as alb
                  WHERE alb.idpodcast = '$idpodcast'
                  AND can.idpodcast= alb.idpodcast";

    $resultado2 = $mysqli->query($canciones);
    $count = 1;

    $canciones = "SELECT *, can.descripcion as titulocancion
                  FROM episodio as can
                  INNER JOIN podcast as alb
                  WHERE alb.idpodcast = '$idpodcast'
                  AND can.idpodcast= alb.idpodcast";

    $resultado2 = $mysqli->query($canciones);
    $count = 1;

    if ($resultado2->num_rows > 0) {
        echo "<hr>";
        echo "<p style='font-size:30px; '><b>Episodios de PodCast</b></p>";
        echo "<table style='width:100%'>";

        while ($fila2 = $resultado2->fetch_object() and $count <= 5) {
            echo "<tr>";
            echo "<td>". $count . ".</td>";
            echo "<td><img src='" . $fila2->enlace . "' width='40' height='40'/></td>";
            echo "<td><a class='menu' href='Pagina_Episodios.php?idepisiodio=" . $fila2->idepisiodio . "'>" . $fila2->titulocancion . "</a></td>";
            echo "<td><b> Duracion: " . $fila2->duracion . "</b></td>";
            echo "<td><b>Fecha de Creación: " . $fila2->fecha_publicacion . "</b></td>";
            echo "<td><b>Reproducciones: " . $fila2->n_reproducciones . "</b></td>";
            echo "</tr>";
            $count = $count + 1;
        }
        echo "</table>";
    }

			echo "<a class='menu' href='NuevoEpisodio.php?idpodcast=". $idpodcast . "'><button style='width:100%; margin:10pt;  background-color:green;color:white;'>Nuevo Episodio</button></a>";
