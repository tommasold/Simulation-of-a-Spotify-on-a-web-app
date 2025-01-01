<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="micss.css">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
</head>
<body>

<form action="ScriptNuevoEpisodio.php" method="post" class="formulario" style='margin:20pt; background-color:black;color:white;'>
    <table>
        <tr>
            <td>Titulo:</td>
            <td><input type="text" size="120" name="titulo"/></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td><input type="datetime-local" name="fecha"/></td>
        </tr>
        <tr>
            <td>enlance:</td>
            <td><input type="text" name="enlance" size="120" /></td>
        </tr>
        <tr>
            <td>duracion:</td>
            <td><input type="number" name="duracion" size="120" /></td>
        </tr>
        <tr>
            <td>Reproducciones:</td>
            <td><input type="number" name="reproducciones" size="120" /></td>
        </tr>
        <tr>
            <td><input type="hidden" name="idpodcast" value="<?php echo htmlspecialchars($_GET['idpodcast']); ?>"/></td>
        </tr>
        <tr>
            <td>idcolleccion:</td>
            <td><input type="number" name="idcolleccion" size="120" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" style='width:100%; background-color:green;color:white;' value="Publicar" />
            </td>
        </tr>
    </table>
</form>

</body>
</html>
