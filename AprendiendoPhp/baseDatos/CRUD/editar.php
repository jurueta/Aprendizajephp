<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

  <?php

    $id = $_GET["id"];
    $nombre = $_GET["nom"];
    $descripcion = $_GET["des"];

   ?>

<p>

</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="actualizar.php">
  <table width="25%" border="0" align="center">

    <tr>
      <td>id</td>
      <td><label for="nom"></label>
      <input type="text" name="id" id="id" value="<?php echo $id;?>" readonly></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="ape"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre;?>"></td>
    </tr>
    <tr>
      <td>Descripcion</td>
      <td><label for="dir"></label>
        <input type="text" name="des" id="dir" value="<?php echo $descripcion;?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
