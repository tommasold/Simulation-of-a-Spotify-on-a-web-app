<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="micss.css">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>
	<form action="ScriptNuevoArtista.php" method="post" class="formulario" style='margin:20pt; background-color:black;color:white;'>
		<table>
			<tr>
				<td>login:</td>
				<td><input type="text" size="120" name="login"/></td>
			</tr>
      <tr>
				<td>password:</td>
				<td><input type="text" size="120" name="password"/></td>
			</tr>
      <tr>
        <td>nombre:</td>
        <td><input type="text" size="120" name="nombre"/></td>
      </tr>
      <tr>
        <td>n_reproducciones:</td>
        <td><input type="text" size="120" name="n_reproducciones"/></td>
      </tr>
      <tr>
        <td>direcion:</td>
        <td><input type="text" size="120" name="direcion"/></td>
      </tr>
      <tr>
        <td>tema:</td>
        <td><input type="text" size="120" name="tema"/></td>
      </tr>
      <tr>
        <td>descripcion:</td>
        <td><input type="text" size="120" name="descripcion"/></td>
      </tr>
			<tr>
				<td>tematica:</td>
				<td><input type="text" size="120" name="idtematica"/></td>
			</tr>
			<tr>
				<td>
				<input type="submit" style='width:300%; background-color:green;color:white;' value="Publicar" />
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
