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
  echo "<b>Numero di apparizioni delle canzoni nelle collezioni e nelle playlist</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>Canzone</b></td>";
  echo "<td><b>Numero di apparizioni nelle Playlist</b></td>";
  echo "<td><b>Numero di apparizioni nelle Collezioni</b></td>";
  echo "</tr>";
  $consulta = "SELECT p.titulo AS canzone,
                      COUNT(DISTINCT pp.playlist_idplaylist) AS apparizioni_playlist,
                      COUNT(DISTINCT cp.colleccion_idcolleccion) AS apparizioni_collezioni
               FROM pieza AS p
               LEFT JOIN playlist_has_pieza AS pp ON p.idpieza = pp.pieza_idpieza
               LEFT JOIN colleccion_has_pieza AS cp ON p.idpieza = cp.pieza_idpieza
               GROUP BY p.idpieza";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->canzone . "</b></td>";
      echo "<td><b>" . $fila->apparizioni_playlist . "</b></td>";
      echo "<td><b>" . $fila->apparizioni_collezioni . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
