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
  echo "<b> Artista mas seguito </b>";
  echo "<br/>";
  echo "<table style='width:100%'>";
  echo "<tr>";
  echo "<td><b> Artista </b></td>";
  echo "<td><b> Numero de Seguidores </b></td>";
  echo "</tr>";
  $consulta = "SELECT a.nombre AS artista, COUNT(uha.usuario_idusuraio) AS num_seguiti
               FROM artista AS a
               INNER JOIN usuario_has_artista AS uha ON a.idartista = uha.artista_idartista
               GROUP BY a.idartista
               ORDER BY num_seguiti DESC
               LIMIT 1";
  $resultado = $mysqli->query($consulta);

  if ($fila = $resultado->fetch_object()) {
      echo "<tr>";
      echo "<td><b>" . $fila->artista . "</b></td>";
      echo "<td><b>" . $fila->num_seguiti . "</b></td>";
      echo "</tr>";
  } else {
      echo "<tr>";
      echo "<td colspan='2'><b>Nessun risultato trovato</b></td>";
      echo "</tr>";
  }
  echo "</table>";
  ?>
