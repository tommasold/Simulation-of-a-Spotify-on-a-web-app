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
  echo "<b> Artistas por Temática </b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b> Número de Artistas </b></td>";
  echo "<td><b> Temática </b></td>";
  echo "</tr>";
  $tematicas = "SELECT COUNT(*) as total, t.nombre FROM soldanidani.artista as ar INNER JOIN soldanidani.tematica as t WHERE ar.idtematica = t.idtematica GROUP BY t.idtematica";
  $resultado = $mysqli->query($tematicas);

  while ($fila = $resultado->fetch_object()){
     echo "<tr>";
     echo "<td><b>" . $fila->total . "</b></td>";
     echo "<td><b>" . $fila->nombre . "</b></td>";
     echo "</tr>";
   }
   echo "</table>";
	?>
</body>
</html>
