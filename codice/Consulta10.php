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
  echo "<b>Episodios sin Me gusta</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>ID Episodio</b></td>";
  echo "<td><b>Descripción</b></td>";
  echo "<td><b>Fecha de publicación</b></td>";
  echo "<td><b>Enlace</b></td>";
  echo "<td><b>Duración (min)</b></td>";
  echo "<td><b>Número de reproducciones</b></td>";
  echo "</tr>";

  $consulta = "SELECT e.idepisiodio, e.descripcion, e.fecha_publicacion, e.enlace, e.duracion, e.n_reproducciones
               FROM episodio AS e
               LEFT JOIN usuario_like_episodio AS ule ON e.idepisiodio = ule.episodio_idepisiodio
               WHERE ule.usuario_idusuraio IS NULL";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->idepisiodio . "</b></td>";
      echo "<td><b>" . $fila->descripcion . "</b></td>";
      echo "<td><b>" . $fila->fecha_publicacion . "</b></td>";
      echo "<td><b>" . $fila->enlace . "</b></td>";
      echo "<td><b>" . $fila->duracion . "</b></td>";
      echo "<td><b>" . $fila->n_reproducciones . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
