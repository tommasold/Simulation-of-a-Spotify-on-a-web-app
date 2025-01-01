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
  echo "<b>Numero medio de me gustast de artistas</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>Artista</b></td>";
  echo "<td><b>Numero medio de me gusta</b></td>";
  echo "</tr>";
  $consulta = "SELECT a.nombre AS artista, AVG(IFNULL(likes.num_likes, 0)) AS media_mi_piace
               FROM artista AS a
               LEFT JOIN (
                   SELECT u.idusuraio, COUNT(ul.usuario_idusuraio) AS num_likes
                   FROM usuario_like_episodio AS ul
                   INNER JOIN usuario AS u ON ul.usuario_idusuraio = u.idusuraio
                   GROUP BY u.idusuraio
               ) AS likes ON a.idartista = likes.idusuraio
               GROUP BY a.idartista";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->artista . "</b></td>";
      echo "<td><b>" . round($fila->media_mi_piace, 2) . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
