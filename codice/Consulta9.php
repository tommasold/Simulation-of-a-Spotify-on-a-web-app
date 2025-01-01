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
  echo "<b>Canciones sin Me gusta</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>ID Canción</b></td>";
  echo "<td><b>Título</b></td>";
  echo "<td><b>Enlace Spotify</b></td>";
  echo "<td><b>Número de reproducciones</b></td>";
  echo "<td><b>Duración (min)</b></td>";
  echo "<td><b>Imagen</b></td>";
  echo "</tr>";

  $consulta = "SELECT p.idpieza, p.titulo, p.enlance_spotify, p.n_reproducciones, p.duracion_minutos, p.image
               FROM pieza AS p
               LEFT JOIN usuario_like_pieza AS ulp ON p.idpieza = ulp.pieza_idpieza
               WHERE ulp.usuario_idusuraio IS NULL";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->idpieza . "</b></td>";
      echo "<td><b>" . $fila->titulo . "</b></td>";
      echo "<td><b>" . $fila->enlance_spotify . "</b></td>";
      echo "<td><b>" . $fila->n_reproducciones . "</b></td>";
      echo "<td><b>" . $fila->duracion_minutos . "</b></td>";
      echo "<td><img src='" . $fila->image . "' alt='Imagen de la canción'></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
