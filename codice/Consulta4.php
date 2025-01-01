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
  echo "<b> Podcast mas seguito </b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b> Podcast </b></td>";
  echo "<td><b> Numero de Seguidores </b></td>";
  echo "</tr>";
  $consulta = "SELECT p.titulo AS podcast, COUNT(uhp.usuario_idusuraio) AS num_seguiti
               FROM podcast AS p
               INNER JOIN usuario_has_podcast AS uhp ON p.idpodcast = uhp.podcast_idpodcast
               GROUP BY p.idpodcast
               ORDER BY num_seguiti DESC
               LIMIT 1";
  $resultado = $mysqli->query($consulta);

  if ($fila = $resultado->fetch_object()) {
      echo "<tr>";
      echo "<td><b>" . $fila->podcast . "</b></td>";
      echo "<td><b>" . $fila->num_seguiti . "</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
