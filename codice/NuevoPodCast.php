<!DOCtype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="micss.css">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>

<form action="ScriptNuevoPodcast.php" method="post" class="formulario" style='margin:20pt; background-color:black;color:white;'>
<table>
<tr>
    <td>Login:</td>
    <td><input type="text" size="10" name="login"/></td>
</tr>

<tr>
    <td>Password:</td>
    <td><input type="number" size="10" name="password"/></td>
</tr>

<tr>
    <td>Titulo:</td>
    <td><input type="text" size="30" name="titulo"/></td>
</tr>

<tr>
    <td>Informacion:</td>
    <td><textarea rows="4" cols="30" name="informacion"></textarea></td>
</tr>

<tr>
    <td>N° Seguidores:</td>
    <td><input type="number" size="10" name="n_seguidores"/></td>
</tr>

<tr>
    <td>Enlace a Imagen:</td>
    <td><input type="text" size="30" name="enlace_a_imagen"/></td>
</tr>

<tr>
    <td>Fecha Creation:</td>
    <td><input type="datetime-local" name="fecha_creation"/></td>
</tr>

<tr>
    <td>N° Reproducciones:</td>
    <td><input type="number" size="10" name="n_reproducciones"/></td>
</tr>
<td>Tematica:</td>
<td><input type="number" size="2" name="idtematica"/></td>

<tr>
<td>
<input type="submit" style='width:300%; background-color:green;color:white;' value="Publicar" />
</td>
</tr>
</table>
</form>

</body>
</html>
