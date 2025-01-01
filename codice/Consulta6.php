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
  echo "<b>Número medio de Me gusta por podcast</b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b>Podcast</b></td>";
  echo "<td><b>Número medio de Me gusta</b></td>";
  echo "</tr>";
  $consulta = "SELECT p.titulo AS podcast, AVG(IFNULL(likes.num_likes, 0)) AS media_me_gusta
               FROM podcast AS p
               LEFT JOIN (
                   SELECT ul.episodio_idepisiodio, COUNT(ul.usuario_idusuraio) AS num_likes
                   FROM usuario_like_episodio AS ul
                   GROUP BY ul.episodio_idepisiodio
               ) AS likes ON p.idpodcast = likes.episodio_idepisiodio
               GROUP BY p.idpodcast";
  $resultado = $mysqli->query($consulta);

  while ($fila = $resultado->fetch_object()){
      echo "<tr>";
      echo "<td><b>" . $fila->podcast . "</b></td>";
      echo "<td><b>" . round($fila->media_me_gusta, 2) . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
