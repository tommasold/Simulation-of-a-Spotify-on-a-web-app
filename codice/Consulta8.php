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
  echo "<b>Numero di apparizioni degli episodi nelle collezioni e nelle playlist</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>Episodio</b></td>";
  echo "<td><b>Numero di apparizioni nelle Playlist</b></td>";
  echo "<td><b>Numero di apparizioni nelle Collezioni</b></td>";
  echo "</tr>";
  $consulta = "SELECT e.descripcion AS episodio,
                      COUNT(DISTINCT pep.playlist_de_episodio_idplaylist) AS apparizioni_playlist,
                      COUNT(DISTINCT cep.colleccion_idcolleccion) AS apparizioni_collezioni
               FROM episodio AS e
               LEFT JOIN playlist_de_episodio_has_episodio AS pep ON e.idepisiodio = pep.episodio_idepisiodio
               LEFT JOIN colleccion_has_episodio AS cep ON e.idepisiodio = cep.episodio_idepisiodio
               GROUP BY e.idepisiodio";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->episodio . "</b></td>";
      echo "<td><b>" . $fila->apparizioni_playlist . "</b></td>";
      echo "<td><b>" . $fila->apparizioni_collezioni . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
